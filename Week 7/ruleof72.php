<?php
// --------------
// -- Programmer:  Caleb Stone
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  Week 7 - Lab
// -- Description: Week 7 - Lab - Rule of 72
// --------------

echo '<!doctype html>';
echo '<html lang="en">';
echo '<head>';
echo '  <meta charset="utf-8">';
echo '  <title>Rule of 72</title>';
echo '</head>';
echo '<body>';

echo '<h1>Rule of 72</h1>';

$rate = "";
$error = false;
$years = 0;
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $rate = $_POST["rate"];
  $rate = trim($rate);
  $rate = htmlspecialchars($rate);

  if (is_numeric($rate) && $rate > 0)
  {
    $years = 72 / $rate;
    $years = number_format($years, 1);
  }
  else
  {
    $rate = "";
    $error = true;
  }

  $submitted = true;

}

?>

<form action="ruleof72.php" method="post">

  <p>Rate of Return (%): <input type="text" name="rate" size="14">
  </p>

  <input type="submit" name="submit" value="Submit">

</form>

<?php

if ($submitted == true)
{
  if ($error == false)
  {
    print "<br><br>You input $rate% as the rate of return. To double your investment it will take approximately $years years to do so.";
  }
  else
  {
    print "<br><br>Rate must be numeric and not zero.";
  }
}

echo '</body>';
echo '</html>';

?>
