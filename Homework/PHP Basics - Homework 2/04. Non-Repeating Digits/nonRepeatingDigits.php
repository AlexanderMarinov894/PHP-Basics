<?php

function nonRepeatingDigits($number)
{
    $isPrinted = false;
    echo("\nThe numbers with three different digits from 0 to ${number} are:\n");
    for ($currentNumber = 0; $currentNumber <= $number; $currentNumber++) {
        if ($currentNumber > 99 && $currentNumber < 1000) {
            $firstDigit = (int)$currentNumber % 10;
            $secondDigit = ((int)$currentNumber/10) % 10;
            $thirdDigit = ((int)$currentNumber/100) % 10;
            $areDifferent = $firstDigit != $secondDigit && $secondDigit != $thirdDigit && $firstDigit != $thirdDigit;


            if ($areDifferent == true) {
                $isPrinted = true;
                echo($currentNumber.' ');
            }
        } elseif ($currentNumber == $number) {
            if($isPrinted==false) {
                echo('No such numbers.');
            }
        }
    }
    echo("\n====================================================="."\n");
}

nonRepeatingDigits(1234);
nonRepeatingDigits(145);
nonRepeatingDigits(15);
nonRepeatingDigits(247);