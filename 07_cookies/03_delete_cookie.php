<?php
// Delete the cookie by setting it with a past time
setcookie("user", "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html>
<body>

<h2>Deleting a Cookie</h2>

<?php
echo "🗑️ Cookie 'user' is deleted (if it was set).";
?>

</body>
</html>
