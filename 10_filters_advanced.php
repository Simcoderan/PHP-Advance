<?php
// 10_filters_advanced.php
// 📘 PHP Advanced Filters — Range Validation, IPv6, Query Required, and Strip High ASCII

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Advanced Filters</title>
</head>
<body>

<h2>🧠 PHP Filters – Advanced Examples</h2>

<hr>

<?php
/*
------------------------------------------------------------
🔢 Example 1: Validate Integer in a Specific Range
------------------------------------------------------------
Checks if the integer is between 1 and 200 (inclusive)
*/

$int = 122;
$min = 1;
$max = 200;

echo "<h3>Integer Range Check (1–200):</h3>";
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo "❌ Variable value is NOT within the legal range.";
} else {
    echo "✅ Variable value is within the legal range.";
}
?>

<hr>

<?php
/*
------------------------------------------------------------
🌐 Example 2: Validate an IPv6 Address
------------------------------------------------------------
Checks if the given IP is a valid IPv6 address
*/

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

echo "<h3>IPv6 Address Validation:</h3>";
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo "✅ $ip is a valid IPv6 address.";
} else {
    echo "❌ $ip is NOT a valid IPv6 address.";
}
?>

<hr>

<?php
/*
------------------------------------------------------------
🔗 Example 3: Validate URL that Must Contain a Query String
------------------------------------------------------------
Checks if the URL includes a query (e.g., ?id=123)
*/

$url = "https://www.w3schools.com"; // No query string

echo "<h3>Validate URL with Query String:</h3>";
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo "✅ $url is a valid URL with a query string.";
} else {
    echo "❌ $url is NOT a valid URL with a query string.";
}
?>

<hr>

<?php
/*
------------------------------------------------------------
🔤 Example 4: Sanitize String and Remove High ASCII (>127)
------------------------------------------------------------
Removes:
- HTML tags
- Any character with ASCII > 127 (e.g., Æ, Ø, Å)
*/

$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

echo "<h3>Sanitized String (Removed HTML & High ASCII):</h3>";
echo $newstr; // Output: Hello World!
?>

</body>
</html>
