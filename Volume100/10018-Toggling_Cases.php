<?php
$input = trim(fgets(STDIN));

$strArray = str_split($input);
foreach ($strArray as $char) {
    if (ctype_upper($char)) {
        echo strtolower($char);
    } else {
        echo strtoupper($char);
    }
}
echo "\n";
