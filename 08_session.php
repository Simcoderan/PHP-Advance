<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "Simran";
$_SESSION["role"] = "student";
?>

<!DOCTYPE html>
<html>
<body>

<h2>PHP Sessions</h2>
<p>Session variables are set.</p>

<a href="08_sessions_read.php">Go to another page to read session</a>

</body>
</html>
