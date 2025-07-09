<?php
// 13_exceptions.php
// 📘 PHP Exceptions — Throwing, Catching, and Handling Errors

/*
------------------------------------------------------------
What is an Exception?
------------------------------------------------------------
- An Exception is an object describing an error or unexpected condition.
- Thrown by PHP built-in functions or user-defined code.
- Stops execution unless caught with try...catch.
*/

// ------------------------------------------------------------
// Example 1: Throwing an Exception (Uncaught)
// ------------------------------------------------------------
// Uncomment to test — will cause fatal error
/*
function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

// This will cause an uncaught exception fatal error
// echo divide(5, 0);
*/

// ------------------------------------------------------------
// Example 2: Using try...catch to catch Exception
// ------------------------------------------------------------
function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

echo "<h2>Example: try...catch</h2>";

try {
    echo "Result: " . divide(5, 0);
} catch (Exception $e) {
    // Exception caught — handle error gracefully
    echo "Unable to divide: " . $e->getMessage();
}

echo "<hr>";

// ------------------------------------------------------------
// Example 3: try...catch...finally
// ------------------------------------------------------------
echo "<h2>Example: try...catch...finally</h2>";

try {
    echo "Result: " . divide(10, 0);
} catch (Exception $e) {
    echo "Unable to divide: " . $e->getMessage() . "<br>";
} finally {
    echo "Process complete.";
}

echo "<hr>";

// ------------------------------------------------------------
// Example 4: try...finally without catch
// ------------------------------------------------------------
echo "<h2>Example: try...finally without catch</h2>";

try {
    echo "Result: " . divide(8, 2) . "<br>";
} finally {
    echo "Process complete regardless of exception.";
}

echo "<hr>";

// ------------------------------------------------------------
// Example 5: Accessing Exception Object Methods
// ------------------------------------------------------------
echo "<h2>Exception Object Methods</h2>";

try {
    echo divide(5, 0);
} catch (Exception $ex) {
    echo "Exception Details:<br>";
    echo "Message: " . $ex->getMessage() . "<br>";
    echo "Code: " . $ex->getCode() . "<br>";
    echo "File: " . $ex->getFile() . "<br>";
    echo "Line: " . $ex->getLine() . "<br>";
    // getPrevious() returns previous exception if nested
    echo "Previous Exception: ";
    var_dump($ex->getPrevious());
}
?>
