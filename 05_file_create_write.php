<?php
/*
|--------------------------------------------------------------------------
| 📝 PHP File Create and Write
|--------------------------------------------------------------------------
| You can create and write to files using:
| - fopen() with "w" (write) or "a" (append) mode
| - fwrite() to write text
| - fclose() to close the file
|
| If the file doesn't exist, PHP will create it.
| If it exists:
|   - "w" mode will overwrite it
|   - "a" mode will append to it
*/

// 📄 Create a new file "newfile.txt" and write content
echo "<h3>Creating and writing to a file using 'w' mode</h3>";
$myfile = fopen("newfile.txt", "w") or die("❌ Unable to open file!");

$txt = "John Doe\n";
fwrite($myfile, $txt); // First write
$txt = "Jane Doe\n";
fwrite($myfile, $txt); // Second write

fclose($myfile);
echo "✔️ Written 'John Doe' and 'Jane Doe' to newfile.txt<br><br>";

// 📄 Overwrite existing file (same as above, will erase old content)
echo "<h3>Overwriting existing file using 'w' mode</h3>";
$myfile = fopen("newfile.txt", "w") or die("❌ Unable to open file!");

$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);

fclose($myfile);
echo "✔️ Overwrote content with 'Mickey Mouse' and 'Minnie Mouse'<br><br>";

// 📄 Append new content to file using "a" mode
echo "<h3>Appending content using 'a' mode</h3>";
$myfile = fopen("newfile.txt", "a") or die("❌ Unable to open file!");

$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);

fclose($myfile);
echo "✔️ Appended 'Donald Duck' and 'Goofy Goof' to newfile.txt<br><br>";

// ✅ Final content of "newfile.txt" now should be:
// Mickey Mouse
// Minnie Mouse
// Donald Duck
// Goofy Goof
?>
