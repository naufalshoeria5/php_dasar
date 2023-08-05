<?php

// static scope
function increment()
{
    // $counter = 1; // bukan static scope
    static $counter = 1; //static scope

    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
