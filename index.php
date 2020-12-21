<?php
// root->series->chapter (hierarchy)
$all_series_chapter_folder_path = array();

// Get Series level folder paths
$series_folder_path = getSeriesFolderPath(__DIR__);

// For each Series level folder get Chapter level folder path
foreach ($series_folder_path as $series_fldr_pth) {
    array_push($all_series_chapter_folder_path, getSeriesFolderPath((__DIR__ . '\\' . $series_fldr_pth), ($series_fldr_pth . '\\')));
}

// Function to get Series and Chapter level folder path
function getSeriesFolderPath($folder_name, $series_fldr_pth = null)
{
    $base_folder    = $folder_name;
    $series_chapter_path = array();
    $folder_to_check = scandir($folder_name);
    foreach ($folder_to_check as $folder_item) {
        if ($folder_item != '..' && $folder_item != '.' && is_dir($base_folder . "/" . $folder_item)) {
            array_push($series_chapter_path, ($series_fldr_pth . $folder_item));
        }
    }
    return $series_chapter_path;
}

$zip_file_creation_result = $delete_process_result = false;

// $all_series_chapter_folder_path has Series to Chapter level folder path we loop it till Chapter folder path
foreach ($all_series_chapter_folder_path as $ascfp) {
    foreach ($ascfp as $trimmedSeriesChapterFolderPath) {
        // $rootPath is path till last folder which is chapter, not files.
        $rootPath = './' . $trimmedSeriesChapterFolderPath;

        // Initialize archive object
        $zip = new ZipArchive();
        // If Zip already present with same name it'll be overwritten
        // Zipped Chapters will be named same as Chapters
        $zip->open($trimmedSeriesChapterFolderPath . '.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

        // Create recursive directory iterator
        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file) {
            // Skip directories (they would be added automatically)
            if (!$file->isDir()) {
                // Get real and relative path for current file till end (Chapter file)
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }

        // Zip archive will be created only after closing object
        if ($zip->close()) {
            $zip_file_creation_result = true;

            // After successful creation of zip file delete Chapter folders with inside files not Series folder
            if (is_dir($rootPath)) {
                $dir = new RecursiveDirectoryIterator($rootPath, RecursiveDirectoryIterator::SKIP_DOTS);
                foreach (new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::CHILD_FIRST) as $filename => $file) {
                    if (is_file($filename))
                        unlink($filename);
                    else
                        rmdir($filename);
                }
                // after only successful result process delete the Chapter level folder
                (rmdir($rootPath)) ? $delete_process_result = true : '';
            }
        }
    }
}

// To print process results
echo ($zip_file_creation_result) ? 'Zip file creation successful.' : 'Zip file creation failed.';
echo "<br>";
echo ($delete_process_result) ? 'Deleting chapter folder successful after zip file creation.' : 'Deleting chapter folder failed after zip file creation.';
