<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello('naufal');
$sayHello('hidayah');

function sayGoodbye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodbye("Eko", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodbye("Eko", $filterFunction);

$firstName = "Naufal";
$lastName = "Hidayah";

$sayHelloNaufal = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloNaufal();

$firstName = "Naufal Update";
$lastName = "Hidayah Update";

$sayHelloNaufal();
