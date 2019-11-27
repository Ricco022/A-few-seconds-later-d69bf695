<?php

if (strpos($argv[1], 's') !== false) {
    $string = $argv[1] . "s";
echo $int = (int)$string . " seconden";
}

else {
    echo "Geen tijd gevonden";
}
?>