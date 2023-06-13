<?php

$i = 1;

while ($i <= 10) {
    echo "i = $i" . PHP_EOL;

    $i++;
}

while ($i <= 10) :
    echo "i = $i" . PHP_EOL;

    $i++;
endwhile;
