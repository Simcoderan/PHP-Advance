<?php
// Try to set a test cookie
setcookie("test_cookie", "test", time() + 3600, "/");
?>
<!DOCTYPE html>
<html>
<body>

<h2>Checking if Cookies Are Enabled</h2>

<?php
// Count $_COOKIE to see if any cookie is set
if(count($_COOKIE) > 0) {
  echo "✅ Cookies are enabled in your browser.";
} else {
  echo "❌ Cookies are disabled in your browser.";
}
?>

</body>
</html>
