<?php
/*
|--------------------------------------------------------------------------
| 📂 PHP File Open / Read / Close
|--------------------------------------------------------------------------
| This file demonstrates how to open, read, and close files using PHP.
| It uses the file "webdictionary.txt" which should be in the same directory.
| Content of webdictionary.txt:
|   AJAX = Asynchronous JavaScript and XML
|   CSS = Cascading Style Sheets
|   HTML = Hyper Text Markup Language
|   ...
*/

// 🧾 Open file using fopen()
echo "<h3>🔓 Opening file with fopen()</h3>";

$filename = "webdictionary.txt";

// Open file in read-only mode
$myfile = fopen($filename, "r") or die("❌ Unable to open file!");

// 📖 Read entire content using fread()
echo "<strong>📄 Full file content (fread):</strong><br>";
echo fread($myfile, filesize($filename));
fclose($myfile);

echo "<hr>";

/*
|--------------------------------------------------------------------------
| 📘 Read Single Line with fgets()
|--------------------------------------------------------------------------
*/
echo "<h3>📘 Read First Line with fgets()</h3>";
$myfile = fopen($filename, "r") or die("❌ Unable to open file!");
echo fgets($myfile); // Only first line is read
fclose($myfile);

echo "<hr>";

/*
|--------------------------------------------------------------------------
| 🔁 Read Line-by-Line with feof() and fgets()
|--------------------------------------------------------------------------
*/
echo "<h3>🔁 Line-by-line Reading with feof() & fgets()</h3>";
$myfile = fopen($filename, "r") or die("❌ Unable to open file!");
while (!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);

echo "<hr>";

/*
|--------------------------------------------------------------------------
| 🔤 Read Character-by-Character with fgetc()
|--------------------------------------------------------------------------
*/
echo "<h3>🔤 Character-by-character Reading with fgetc()</h3>";
$myfile = fopen($filename, "r") or die("❌ Unable to open file!");
while (!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);

echo "<hr>";

/*
|--------------------------------------------------------------------------
| 📚 Summary of fopen() Modes:
|--------------------------------------------------------------------------
| r   : Read only. Starts at beginning.
| w   : Write only. Clears content or creates file.
| a   : Write only. Appends. Creates file if it doesn’t exist.
| x   : Write only. Creates new file. Fails if file exists.
| r+  : Read/Write. Starts at beginning.
| w+  : Read/Write. Clears file or creates new.
| a+  : Read/Write. Appends. Creates new file if not exists.
| x+  : Read/Write. Fails if file exists.
*/
?>
