<?php

function sum($firstNumber, $secondNumber)
{
    $sum = $firstNumber+$secondNumber;
    echo("\n${firstNumber} + ${secondNumber} = ".round($sum,2));
}

echo("\nThe sums are:");
sum(2,5);
sum(1.567808,0.356);
sum(1234.5678,333);
echo("\n");