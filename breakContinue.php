<?php

// * note
// break stop perulangan
// continue next ke perulangan berikutnya


// BREAK
$a = 1;
while (true) {
    echo "ini adalah white ke : $a" . PHP_EOL;
    $a++;

    if ($a >= 10) {
        break;
    }
}

// CONTINUE
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        continue;
    }

    echo "Hello continue $i" . PHP_EOL;
}
