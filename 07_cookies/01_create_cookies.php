<?php
// Create a cookie named "user" with value "John Doe"
$cookie_name = "user";
$cookie_value = "John Doe";

// Set cookie to expire in 30 days
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<body>

<h2>Creating a Cookie</h2>

<?php
// Check if cookie is set
if(!isset($_COOKIE[$cookie_name])) {
  echo "❌ Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "✅ Cookie '" . $cookie_name . "' is set!<br>";
  echo "🔹 Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
