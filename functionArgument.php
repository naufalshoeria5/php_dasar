<?php

// function argument
function hi($name)
{
    echo "Hai $name";
}

hi("naufal");

// default argument value
function sayHello($name = 'ga ngasih nama')
{
    echo "hai $name";
}

sayHello();

// type declaration argument
function sayHelloType(int $name)
{
    echo "hai $name";
}

sayHelloType(10);

// * note valid type
// class parameter harus tipe class
// self parameter harus sama dengan class dimana function ni dibuat
// array parameter harus array
// callable parameter harus callable
// bool paramter harus boolean
// float paramter harus floating point
// int parameter harus integer
// string paramenter harus string
// interable parameter harus array atau Traversable
// object parameter harus object

// *


function sum(int $first, int $second)
{
    $total = $first + $second;
    echo "Total = $total" . PHP_EOL;
}

sum("10", 10);
sum(10, 10);
sum(true, false);
