<?php
$input = trim(fgets(STDIN));
$values = explode(" ", $input);
$a = intval($values[0]);
$b = intval($values[1]);
$c = intval($values[2]);

$count = 0;
for ($i = $a; $i <= $b; $i++) {
    if ($c % $i === 0) {
        $count++;
    }
}
echo $count . "\n";