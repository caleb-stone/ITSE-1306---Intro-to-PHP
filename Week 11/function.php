<?php
// --------------
// -- Programmer:  Caleb Stone
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  Week 11 - Lab
// -- Description: Week 11 - Lab - Password Strength Function
// --------------

function eval_password (string $pass) : int {
    $strength = 10;
   
    if (strlen($pass) < 8 )
    {
        $strength -= 4;
    }

    if (ctype_digit($pass))
    {
        $strength -= 3;
    }

    if (ctype_alpha($pass))
    {
        $strength -= 3;
    }

    if (ctype_alnum($pass))
    {
        if (preg_match_all("/[0-9]/", $pass) >= 2)
        {
            $strength += 3;
        }
    }

    if (preg_match("/[0-9]/", $pass))
    {
        $letter_count = preg_match_all("/[a-zA-Z]/", $pass);
        $special_count = preg_match_all("/[^a-zA-Z\d]/", $pass);
        if ( ($letter_count >= 2) || ($special_count >= 2) || ( ($letter_count == 1) && ($special_count == 1) ) )
        {
            $strength += 3;
        }
    }

    $containsLetter  = preg_match("/[a-zA-Z]/",    $pass);
    $containsDigit   = preg_match("/[0-9]/",          $pass);
    $containsSpecial = preg_match("/[^a-zA-Z\d]/", $pass);
    if ($containsLetter == true && $containsDigit == true && $containsSpecial == true)
    {
        $strength += 4;
    }
   
    return $strength;
}

?>
