<?php
$lines = array();
while (($v = intval(fgets(STDIN)))) {
    array_push($lines, $v);
}

for ($i = 0; $i < count($lines); $i++) {
    echo "Case " . ($i + 1) . ": " . $lines[$i] . "\n";
}
