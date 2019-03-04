<?php
// --------------
// -- Programmer:  Caleb Stone
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  Week 8 - Lab
// -- Description: Week 8 - Lab - Anagram Output
// --------------

echo '<!doctype html>';
echo '<html lang="en">';
echo '<head>';
echo '  <meta charset="utf-8">';
echo '  <title>Anagram Output</title>';
echo '</head>';
echo '<body>';

echo '<h1>Anagram Output</h1>';

// variables
$string1 = $_POST["string1"];
$string2 = $_POST["string2"];

// compare strings
if (strlen ($string1) != strlen($string2))
{
    echo "<p>Strings <b>$string1</b> and <b>$string2</b> are not the same length, and therefore cannot be anagrams.</p>";
}
else
{
    // see if anagrams
    if (count_chars($string1, 1) == count_chars($string2, 1))
    {
        echo "<p>Strings <b>$string1</b> and <b>$string2</b> are anagrams.</p>";
    }
    else
    {
        echo "<p>Strings <b>$string1</b> and <b>$string2</b> are not anagrams.</p>";
    }
}

echo '</body>';
echo '</html>';
?>
