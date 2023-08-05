<?php

// 1. Global Scope
// Varible yang dibikin di luar scope
// hanya bisa di akses di luar function
// jika di dalam function kita tidak bisa akses variable global scope

$name = "Eko"; //Global Scope

function sayName(): string
{
    global $name; // menambahkan global keywoard untuk mengakses global scope
    return "Hai $name"; // Local Scope

}

sayName();

// 2. Local Scope

function sayNameLocal()
{
    $name = "eko"; // Local Scope
}

sayName();
echo $name;

// Variable yang dibuat dalam scope
// hanya dapat diakses dari function dia sendiri

// 3. Static Scope


// Global Scope

// cara 1
global $name;
// cara 2
var_dump($GLOBALS['name']);
