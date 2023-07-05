<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);

    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Naufal", "strtoupper");
sayHello("Naufal", "strtolower");
sayHello("Naufal", function (string $name): string {
    return strtoupper($name);
});

sayHello("Naufal", fn ($name) => strtoupper($name));
