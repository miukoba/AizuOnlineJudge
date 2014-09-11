<?php
$input = trim(fgets(STDIN));

$values = explode(" ", $input);
$numA = intval($values[0]);
$numB = intval($values[1]);

if ($numA === $numB) {
    echo "a == b\n";
} elseif ($numA > $numB) {
    echo "a > b\n";
} elseif ($numA < $numB) {
    echo "a < b\n";
}
