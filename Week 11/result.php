<?php
// --------------
// -- Programmer:  Caleb Stone
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  Week 11 - Lab
// -- Description: Week 11 - Lab - Password Strength Result
// --------------

echo '<!doctype html>';
echo '<html lang="en">';
echo '<head>';
echo '  <meta charset="utf-8">';
echo '  <title>Password Strength Result</title>';
echo '</head>';
echo '<body>';

echo '<h1>Password Strength Result</h1>';

require('function.php');

$pass = $_POST["pass"];

echo '<br>Password strength is ';
// $score should be integer
$score = eval_password($pass);
echo $score;

echo '<br><a href="input.html">Go Back</a>';

echo '</body>';
echo '</html>';

?>
