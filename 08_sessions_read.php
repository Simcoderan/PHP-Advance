<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Read Session Variables</h2>

<?php
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Role: " . $_SESSION["role"];
?>

</body>
</html>
