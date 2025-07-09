<?php
// 11_callback_functions.php
// 📘 PHP CALLBACK FUNCTIONS — Basics to Advanced

/*
------------------------------------------------------------
🔁 What is a Callback Function?
------------------------------------------------------------
A callback function is a function that is passed as an argument to another function.
You can use:
- Named functions
- Anonymous functions (closures)
- User-defined callbacks
*/

echo "<h2>🍏 Callback with array_map()</h2>";

// ✅ Named callback function
function my_callback($item) {
  return strlen($item);  // Return the length of the string
}

$fruits = ["apple", "orange", "banana", "coconut"];

// Pass "my_callback" as a string to array_map()
$lengths = array_map("my_callback", $fruits);

// Display result
echo "<strong>String Lengths:</strong><br>";
print_r($lengths);  // Output: Array ( [0] => 5 [1] => 6 [2] => 6 [3] => 7 )

echo "<hr>";
?>

<?php
echo "<h2> Callback using Anonymous Function</h2>";

$fruits = ["apple", "orange", "banana", "coconut"];

// Use an anonymous function as a callback
$lengths = array_map(function($item) {
  return strlen($item);
}, $fruits);

echo "<strong>String Lengths:</strong><br>";
print_r($lengths);  // Output will be same as above
echo "<hr>";
?>

<?php
/*
------------------------------------------------------------
👤 Callback in User-Defined Function
------------------------------------------------------------
You can also pass callback functions to your own functions
*/

echo "<h2>🗣️ Callback Inside User-Defined Function</h2>";

// Callback functions
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

// Function that accepts a callback
function printFormatted($str, $callback) {
  echo $callback($str) . "<br>"; // Call the callback function
}

// Call with different callback functions
printFormatted("Hello world", "exclaim"); // Outputs: Hello world!
printFormatted("Hello world", "ask");     // Outputs: Hello world?
?>

