<?php
$input = trim(fgets(STDIN));
$values = explode(" ", $input);
$a = intval($values[0]);
$b = intval($values[1]);

echo floor($a / $b)
    . " "
    . $a % $b
    . " "
    . round($a / $b, 6)
    . "\n";