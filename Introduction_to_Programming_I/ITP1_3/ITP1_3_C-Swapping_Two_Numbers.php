<?php
while (($line = fgets(STDIN))) {
    $values = explode(" ", trim($line));
    sort($values);

    if ($values[0] == 0 && $values[1] == 0) {
        break;
    }
    echo $values[0] . " " . $values[1] . "\n";
}
