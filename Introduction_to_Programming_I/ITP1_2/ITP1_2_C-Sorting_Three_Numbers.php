<?php
$input = trim(fgets(STDIN));

$values = explode(" ", $input);
sort($values);
echo $values[0] . " " . $values[1] . " " . $values[2] . "\n";