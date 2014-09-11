<?php
$r = intval(trim(fgets(STDIN)));

$area = round($r * $r * M_PI, 6);
$circumference = round($r * 2 * M_PI, 6);

echo $area . " " . $circumference . "\n";