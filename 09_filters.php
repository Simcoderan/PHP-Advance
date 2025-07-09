<?php
// 09_filters.php
// 📘 PHP FILTERS — Validation & Sanitization Examples

/*
------------------------------------------------------------
🔹 VALIDATION vs SANITIZATION
------------------------------------------------------------
Validating data = Checking if data is in correct format (e.g., email, int)
Sanitizing data = Removing unwanted or illegal characters

Why filters?
- To secure input from users, cookies, APIs, databases
- Avoid invalid/unsafe data causing errors or security risks

PHP has a built-in Filter Extension with many useful tools
*/

// ✅ Display all available PHP filters in a table
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Filters</title>
</head>
<body>

<h2>🧪 List of Available Filters</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Filter Name</th>
        <th>Filter ID</th>
    </tr>
    <?php
    foreach (filter_list() as $filter) {
        echo "<tr><td>$filter</td><td>" . filter_id($filter) . "</td></tr>";
    }
    ?>
</table>

<hr>

<?php
/*
------------------------------------------------------------
🧼 Example 1: Sanitize a String
------------------------------------------------------------
This removes all HTML tags from a string.
NOTE: FILTER_SANITIZE_STRING is deprecated as of PHP 8.1
Use strip_tags() or htmlspecialchars() instead.
*/
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "<h3>Sanitized String: </h3>" . $newstr;
?>

<hr>

<?php
/*
------------------------------------------------------------
🔢 Example 2: Validate an Integer
------------------------------------------------------------
Checks if $int is a valid integer.
*/
$int = 100;
echo "<h3>Validate Integer (100): </h3>";
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "✅ Integer is valid";
} else {
    echo "❌ Integer is not valid";
}
?>

<hr>

<?php
/*
------------------------------------------------------------
⚠️ Tip: Special case when input is 0
------------------------------------------------------------
0 is treated as false, so check with === 0 also.
*/
$int = 0;
echo "<h3>Validate Integer (0 - Special Case): </h3>";
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "✅ Integer is valid";
} else {
    echo "❌ Integer is not valid";
}
?>

<hr>

<?php
/*
------------------------------------------------------------
🌐 Example 3: Validate an IP Address
------------------------------------------------------------
Checks if $ip is a valid IP.
*/
$ip = "127.0.0.1";
echo "<h3>Validate IP Address: </h3>";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo "✅ $ip is a valid IP address";
} else {
    echo "❌ $ip is not a valid IP address";
}
?>

<hr>

<?php
/*
------------------------------------------------------------
📧 Example 4: Sanitize and Validate Email
------------------------------------------------------------
1. Sanitize removes invalid characters.
2. Validate checks if format is correct.
*/
$email = "john.doe@example.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo "<h3>Sanitized & Validated Email: </h3>";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "✅ $email is a valid email address";
} else {
    echo "❌ $email is not a valid email address";
}
?>

<hr>

<?php
/*
------------------------------------------------------------
🔗 Example 5: Sanitize and Validate URL
------------------------------------------------------------
1. Sanitize removes illegal URL characters.
2. Validate checks proper format.
*/
$url = "https://www.w3schools.com";
$url = filter_var($url, FILTER_SANITIZE_URL);
echo "<h3>Sanitized & Validated URL: </h3>";
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo "✅ $url is a valid URL";
} else {
    echo "❌ $url is not a valid URL";
}
?>

</body>
</html>
