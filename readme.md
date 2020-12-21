# Details

- Mainly designed for [Komga](https://komga.org/) to be used with Manga.
- Script developed (in PHP) such that it can be used to zip manga chapters in bulk.
- How To use (Example Series : One Piece)
- Create root folder place index.php inside root folder along with Series folders.
- root-\>One Piece (series folder)-\> Chapter 940 (chapters folder)-\> Chapter files (image files)
- After Zip file creation it'll delete chapters folders not Series folder.
- If Successful it'll display. -\> Zip file creation successful. -\> Deleting chapter folder successful after zip file creation.
- It is also possible to create archive with .cbz extension just replace `.zip` with `.cbz` in this line `$zip->open($trimmedSeriesChapterFolderPath . '.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);`

## Note

* You can edit script as per your needs.
* Use at your own discretion I'm not responsible any loss of data caused by the script.

## File Structure

### Project file structure Before the process

```
root/
┣ Me & Roboco/
┃   ┣ Shueisha\_\#020 - Chapter 20\_ Dieting and Roboco/
┃   ┗ Shueisha\_\#021 - Chapter 21\_ Mom and Roboco/
┣ One Piece/
┃   ┣ Shueisha\_\#994 - Chapter 994\_ My Other Name Is Yamato/
┃   ┣ Shueisha\_\#995 - Chapter 995\_ A Kunoichi's Oath/
┃   ┗ Shueisha\_\#996 - Chapter 996\_ Island of the Strongest/
┣ index.php
┗ readme.txt
```

---

```
root/
┣ Me & Roboco/
┃   ┣ Shueisha\_\#020 - Chapter 20\_ Dieting and Roboco/
┃   ┃   ┣ .nomedia
┃   ┃   ┣ 001.jpg
┃   ┃   ┗ 002.jpg
┃   ┗ Shueisha\_\#021 - Chapter 21\_ Mom and Roboco/
┃       ┣ .nomedia
┃       ┣ 001.jpg
┃       ┗ 002.jpg
┣ One Piece/
┃   ┣ Shueisha\_\#994 - Chapter 994\_ My Other Name Is Yamato/
┃   ┃   ┣ .nomedia
┃   ┃   ┣ 001.jpg
┃   ┃   ┗ 002.jpg
┃   ┣ Shueisha\_\#995 - Chapter 995\_ A Kunoichi's Oath/
┃   ┃   ┣ .nomedia
┃   ┃   ┣ 001.jpg
┃   ┃   ┗ 002.jpg
┃   ┗ Shueisha\_\#996 - Chapter 996\_ Island of the Strongest/
┃       ┣ .nomedia
┃       ┣ 001.jpg
┃       ┗ 002.jpg
┣ index.php
┗ readme.txt

```

### Project file structure After the process

```
root/
┣ Me & Roboco/
┃ ┣ Shueisha\_\#020 - Chapter 20\_ Dieting and Roboco.zip 
┃ ┗ Shueisha\_\#021 - Chapter 21\_ Mom and Roboco.zip 
┣ One Piece/ 
┃ ┣ Shueisha\_\#994 - Chapter 994\_ My Other Name Is Yamato.zip 
┃ ┣ Shueisha\_\#995 - Chapter 995\_ A Kunoichi's Oath.zip 
┃ ┗ Shueisha\_\#996 - Chapter 996\_ Island of the Strongest.zip 
┣ index.php 
┗ readme.txt
```
