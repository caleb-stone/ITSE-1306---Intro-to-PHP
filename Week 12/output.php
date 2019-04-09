<?php
// --------------
// -- Programmer:  Caleb Stone
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  Week 12 - Lab
// -- Description: Week 12 - Lab - CSV Output
// --------------

$data_file = "data.csv";

$data_array = array_map('str_getcsv', file($data_file));

echo '<!doctype html>';
echo '<html lang="en">';
echo '<head>';
echo '  <meta charset="utf-8">';
echo '  <Title>CSV Output</title>';
echo '</head>';
echo '<body>';

echo '<table style="width:30%">';
echo '  <tr>';
echo '    <td><b>LAST</b></td>';
echo '    <td><b>FIRST</b></td>';
echo '    <td><b>SALARY</b></td>';
echo '  </tr>';

foreach ($data_array as &$subarray) {
	echo '  <tr>';
	foreach ($subarray as &$value) {
        echo '    <td>',$value,'</td>';
	}
	echo '  </tr>';
}

echo '</table>';

echo '</body>';
echo '</html>';

?>
