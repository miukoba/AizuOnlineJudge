<?php
$input = intval(trim(fgets(STDIN)));

$h = floor($input / 60 / 60);
$s = $input % 60;
$m = ($input - $s - ($h * 60 * 60)) / 60;

echo $h . ":" . $m . ":" . $s . "\n";
