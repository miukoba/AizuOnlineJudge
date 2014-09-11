<?php
$stdIn = trim(fgets(STDIN));
$lengths = explode(" ", $stdIn);
echo $lengths[0] * $lengths[1];
echo " ";
echo ($lengths[0] + $lengths[1]) * 2;
echo "\n";
