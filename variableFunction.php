<?php

function sayHello(string $name, $filter)
{
    $filename = $filter($name);

    echo "Hello $filename" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Eko", "sampleFunction");
sayHello("Eko", 'strtoupper');
sayHello("Eko", 'strtolower');
