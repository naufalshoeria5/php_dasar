<?php

// Membuat Infinity Loop :)
// code dibawah di uncomment kalau kepo aja wkwk
// for (;;) {
//     echo 'Tiati Jadi Lag Laptopnya';
// }

$counter = 1;
for (; $counter < 10;) {
    echo "Test $counter" . PHP_EOL;

    $counter++;
}

// loop with init statement
for ($counter = 1; $counter < 10;) {
    echo "Test $counter" . PHP_EOL;

    $counter++;
}

// loop with post statement
for ($counter = 1; $counter < 10; $counter++) {
    echo "Test $counter" . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--) :
    echo "Test $counter" . PHP_EOL;
endfor;
