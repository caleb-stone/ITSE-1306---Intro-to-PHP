<!--
--------------
Programmer:  Caleb Stone
Course:      ITSE-1306 (Intro to PHP)
Instructor:  Cesar "Coach" Marrero
Assignment:  Week 6 - Lab
Description: Week 6 - Lab - Madlibs PHP
--------------
-->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <Title>Madlibs Results</title>
</head>
<body>

<h1>Madlibs Results</h1>
<br>

<?php

$noun = $_POST['noun'];
$verb = $_POST['verb'];
$adjective = $_POST['adjective'];
$adverb = $_POST['adverb'];

print "<p>Noun: $noun</p>";
print "<p>Verb: $verb</p>";
print "<p>Adjective: $adjective</p>";
print "<p>Adverb: $adverb</p><br>";

print "<p>Do you $verb your $adjective $noun $adverb?  That's hilarious!</p>";

?>

</body>
</html>

