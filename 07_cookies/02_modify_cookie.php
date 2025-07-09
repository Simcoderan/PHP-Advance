<?php
// Modify the same cookie "user" to a new value
$cookie_name = "user";
$cookie_value = "Alex Porter";

// Reset cookie with a new value and expiration
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html>
<body>

<h2>Modifying a Cookie</h2>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "❌ Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "✅ Cookie '" . $cookie_name . "' is set!<br>";
  echo "🔹 New value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
