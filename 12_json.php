<?php
// 12_json.php
// 📘 PHP and JSON — Encode, Decode, Access, and Loop

/*
------------------------------------------------------------
📌 What is JSON?
------------------------------------------------------------
JSON = JavaScript Object Notation
- A lightweight data format used to store and exchange data
- Text-based and language-independent (used across platforms)
- Works easily with APIs and web applications
*/

// ----------------------------------------------------------
// 🔸 ENCODE SECTION
// ----------------------------------------------------------
echo "<h2>🔐 JSON Encoding</h2>";

// ✅ Encode an Associative Array into a JSON Object
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "<strong>Associative Array to JSON:</strong><br>";
echo json_encode($age); // Output: {"Peter":35,"Ben":37,"Joe":43}

echo "<br><br>";

// ✅ Encode an Indexed Array into a JSON Array
$cars = array("Volvo", "BMW", "Toyota");
echo "<strong>Indexed Array to JSON:</strong><br>";
echo json_encode($cars); // Output: ["Volvo","BMW","Toyota"]

// ----------------------------------------------------------
// 🔸 DECODE SECTION
// ----------------------------------------------------------
echo "<hr><h2>🔓 JSON Decoding</h2>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// ✅ Decode JSON into PHP Object (default behavior)
echo "<strong>JSON to PHP Object:</strong><br>";
$obj = json_decode($jsonobj);  // Default returns object
var_dump($obj);

echo "<br><br>";

// ✅ Decode JSON into PHP Associative Array
echo "<strong>JSON to PHP Associative Array:</strong><br>";
$arr = json_decode($jsonobj, true);  // Pass true to get associative array
var_dump($arr);

// ----------------------------------------------------------
// 🔸 ACCESSING VALUES
// ----------------------------------------------------------
echo "<hr><h2>🔎 Accessing Decoded JSON Values</h2>";

// ✅ Access values from an object
echo "<strong>From Object:</strong><br>";
echo "Peter: " . $obj->Peter . "<br>";
echo "Ben: " . $obj->Ben . "<br>";
echo "Joe: " . $obj->Joe . "<br>";

echo "<br>";

// ✅ Access values from an array
echo "<strong>From Array:</strong><br>";
echo "Peter: " . $arr["Peter"] . "<br>";
echo "Ben: " . $arr["Ben"] . "<br>";
echo "Joe: " . $arr["Joe"] . "<br>";

// ----------------------------------------------------------
// 🔸 LOOPING THROUGH VALUES
// ----------------------------------------------------------
echo "<hr><h2>🔁 Looping Through Decoded JSON</h2>";

// ✅ Loop through object
echo "<strong>Object Loop:</strong><br>";
foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>";

// ✅ Loop through associative array
echo "<strong>Array Loop:</strong><br>";
foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>
