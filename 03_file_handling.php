<?php
/*
|--------------------------------------------------------------------------
| 📂 PHP File Handling
|--------------------------------------------------------------------------
| File handling is essential for working with documents, logs, uploads, etc.
| PHP offers many built-in functions to:
|   - Create
|   - Open
|   - Read
|   - Write
|   - Upload
|   - Edit files
|
| 🚨 WARNING:
| File handling can be risky! Errors like overwriting or filling up the
| server can happen easily. Always double-check paths and logic.
*/

/*
|--------------------------------------------------------------------------
| 📘 PHP readfile() Function
|--------------------------------------------------------------------------
| This function reads a file and writes it directly to the output buffer.
| It returns the number of bytes read.
| Syntax:
|   int readfile(string $filename)
|
| Use this only if you just want to display the file content.
*/

// Step 1: Make sure a file named "webdictionary.txt" exists in same folder
// Example content of webdictionary.txt:
// AJAX = Asynchronous JavaScript and XML
// CSS = Cascading Style Sheets
// HTML = Hyper Text Markup Language
// PHP = PHP Hypertext Preprocessor
// SQL = Structured Query Language
// SVG = Scalable Vector Graphics
// XML = EXtensible Markup Language

echo "<h2>Reading file: webdictionary.txt</h2>";

$filename = "webdictionary.txt";

// Check if file exists
if (file_exists($filename)) {
    $bytes = readfile($filename);
    echo "<br><br>Total bytes read: $bytes";
} else {
    echo "File not found: $filename";
}

?>
