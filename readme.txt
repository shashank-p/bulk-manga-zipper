* Mainly designed for Komga to used with Manga.
* Script developed such that it can be used to zip manga chapters in bulk.
* How To use (Example Series : One Piece)
* Create root folder place index.php inside root folder along with Series folders.
* root->One Piece (series folder)-> Chapter 940 (chapters folder)-> Chapter files (image files)
* After Zip file creation it'll delete chapters folders not Series folder.
* If Successful it'll display.
    -> Zip file creation successful.
    -> Deleting chapter folder successful after zip file creation.

Note: You can edit script as per your needs.
Note: Use at your own discretion I'm not responsible any loss of data caused by the script.
Note: Below file structure best viewed in notepad.

Project file structure Before the process
**********************************************************************
root/
┣ Me & Roboco/
┃ ┣ Shueisha_#020 - Chapter 20_ Dieting and Roboco/
┃ ┗ Shueisha_#021 - Chapter 21_ Mom and Roboco/
┣ One Piece/
┃ ┣ Shueisha_#994 - Chapter 994_ My Other Name Is Yamato/
┃ ┣ Shueisha_#995 - Chapter 995_ A Kunoichi's Oath/
┃ ┗ Shueisha_#996 - Chapter 996_ Island of the Strongest/
┣ index.php
┗ readme.txt

**********************************************************************
root/
┣ Me & Roboco/
┃ ┣ Shueisha_#020 - Chapter 20_ Dieting and Roboco/
┃ ┃ ┣ .nomedia
┃ ┃ ┣ 001.jpg
┃ ┃ ┗ 002.jpg
┃ ┗ Shueisha_#021 - Chapter 21_ Mom and Roboco/
┃   ┣ .nomedia
┃   ┣ 001.jpg
┃   ┗ 002.jpg
┣ One Piece/
┃ ┣ Shueisha_#994 - Chapter 994_ My Other Name Is Yamato/
┃ ┃ ┣ .nomedia
┃ ┃ ┣ 001.jpg
┃ ┃ ┗ 002.jpg
┃ ┣ Shueisha_#995 - Chapter 995_ A Kunoichi's Oath/
┃ ┃ ┣ .nomedia
┃ ┃ ┣ 001.jpg
┃ ┃ ┗ 002.jpg
┃ ┗ Shueisha_#996 - Chapter 996_ Island of the Strongest/
┃   ┣ .nomedia
┃   ┣ 001.jpg
┃   ┗ 002.jpg
┣ index.php
┗ readme.txt
**********************************************************************

Project file structure After the process
**********************************************************************
root/
┣ Me & Roboco/
┃ ┣ Shueisha_#020 - Chapter 20_ Dieting and Roboco.zip
┃ ┗ Shueisha_#021 - Chapter 21_ Mom and Roboco.zip
┣ One Piece/
┃ ┣ Shueisha_#994 - Chapter 994_ My Other Name Is Yamato.zip
┃ ┣ Shueisha_#995 - Chapter 995_ A Kunoichi's Oath.zip
┃ ┗ Shueisha_#996 - Chapter 996_ Island of the Strongest.zip
┣ index.php
┗ readme.txt
**********************************************************************
