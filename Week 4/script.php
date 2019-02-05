<!--
--------------
Programmer:  Caleb Stone
Course:      ITSE-1306 (Intro to PHP)
Instructor:  Cesar "Coach" Marrero
Assignment:  Week 4 - Lab
Description: Week 4 - Lab - PHP Script User Info
--------------
-->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <Title>User Information Results</title>
</head>
<body>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];

print "<p>First Name: $fname</p>";
print "<p>Last Name: $lname</p>";
print "<p>Email Address: $email</p>";
print "<p>Phone Number: $phone</p>";
print "<p>Date of Birth: $dob</p>";

?>

</body>
</html>

