<?php
$input = trim(fgets(STDIN));

$values = explode(" ", $input);

$w = $values[0];
$h = $values[1];
$x = $values[2];
$y = $values[3];
$r = $values[4];


$validMinX = 0 + $r;
$validMaxX = $w - $r;

$validMinY = 0 + $r;
$validMaxY = $h - $r;


if (($validMinX <= $x && $x <= $validMaxX)
    && ($validMinY <= $y && $y <= $validMaxY)
) {
    echo "Yes\n";
} else {
    echo "No\n";
}
