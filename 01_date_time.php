<?php
/*
|--------------------------------------------------------------------------
| PHP Date and Time 📆
|--------------------------------------------------------------------------
| The date() function is used to format a timestamp into a readable date.
| Syntax: date(format, timestamp)
|   - format    : Required. Specifies how to format the date/time.
|   - timestamp : Optional. A specific timestamp to use.
|                 Default is the current date and time.
*/

// 🗓️ Common date formatting characters:
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Day of the week: " . date("l") . "<br><br>";

/*
|--------------------------------------------------------------------------
| PHP Tip: Auto Update Copyright Year
|--------------------------------------------------------------------------
*/
echo "&copy; 2010-" . date("Y") . "<br><br>";

/*
|--------------------------------------------------------------------------
| ⏰ Time Formatting
|--------------------------------------------------------------------------
| Characters:
|   H - 24-hour format (00 to 23)
|   h - 12-hour format (01 to 12)
|   i - Minutes (00 to 59)
|   s - Seconds (00 to 59)
|   a - am/pm
*/

echo "The time is " . date("h:i:sa") . "<br><br>";

/*
|--------------------------------------------------------------------------
| 🌍 Time Zones
|--------------------------------------------------------------------------
*/
date_default_timezone_set("America/New_York");
echo "Time in New York: " . date("h:i:sa") . "<br><br>";

/*
|--------------------------------------------------------------------------
| 🛠️ Create Date with mktime()
|--------------------------------------------------------------------------
| Syntax: mktime(hour, minute, second, month, day, year)
*/
$customDate = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is: " . date("Y-m-d h:i:sa", $customDate) . "<br><br>";

/*
|--------------------------------------------------------------------------
| 📅 Create Date from String using strtotime()
|--------------------------------------------------------------------------
| Converts human-readable string into Unix timestamp
*/
$d1 = strtotime("10:30pm April 15 2014");
echo "From string (10:30pm April 15 2014): " . date("Y-m-d h:i:sa", $d1) . "<br>";

$d2 = strtotime("tomorrow");
echo "Tomorrow: " . date("Y-m-d h:i:sa", $d2) . "<br>";

$d3 = strtotime("next Saturday");
echo "Next Saturday: " . date("Y-m-d h:i:sa", $d3) . "<br>";

$d4 = strtotime("+3 Months");
echo "In 3 months: " . date("Y-m-d h:i:sa", $d4) . "<br><br>";

/*
|--------------------------------------------------------------------------
| 📆 Loop: Next 6 Saturdays
|--------------------------------------------------------------------------
*/
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

echo "Next 6 Saturdays:<br>";
while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}

echo "<br>";

/*
|--------------------------------------------------------------------------
| 🧮 Days Until 4th July
|--------------------------------------------------------------------------
*/
$target = strtotime("July 04");
$remaining = ceil(($target - time()) / 60 / 60 / 24);
echo "There are $remaining days until 4th of July.";
?>
