<?php
$input = trim(fgets(STDIN));

$values = explode(" ", $input);
$numA = intval($values[0]);
$numB = intval($values[1]);
$numC = intval($values[2]);

if ($numA < $numB && $numB < $numC) {
    echo "Yes\n";
} else {
    echo "No\n";
}