<!--
--------------
Programmer:  Caleb Stone
Course:      ITSE-1306 (Intro to PHP)
Instructor:  Cesar "Coach" Marrero
Assignment:  Week 5 - Lab
Description: Week 5 - Lab - Blood Alcohol Content PHP
--------------
-->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <Title>Blood Alcohol Content Results</title>
</head>
<body>

<h1>Blood Alcohol Content Results</h1>
<br>

<?php

$weight_in_pounds = $_POST['weight_in_pounds'];
$gender = $_POST['gender'];
$number_of_drinks = $_POST['number_of_drinks'];
$ounces_of_alcohol = $_POST['ounces_of_alcohol'];
$hours = $_POST['hours'];

if ($gender == 'male')
{
  $ratio = 0.73;
}
if ($gender == 'female')
{
  $ratio = 0.66;
}

$limit = 0.08;

$BAC = ($ounces_of_alcohol * 5.14 / $weight_in_pounds * $ratio) - .015 * $hours;
if ($BAC < 0)
{
    $BAC = 0;
}
$BAC = number_format($BAC, 3);

print "<p>Your Blood Alcohol Content is $BAC.</p>";
if ($BAC > $limit)
{
    print "<p>You are over the legal limit ($limit) and are not allowed to drive.</p>";
}
else
{
    print "<p>You are not over the legal limit ($limit) and are allowed to drive.</p>";
}

?>

</body>
</html>

