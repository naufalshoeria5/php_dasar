<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$person = [
    'first_name' => 'Naufal',
    'last_name' => 'Hidayah'
];

// array keys mengambil semua keys milik array
var_dump(array_keys($person));

// array values mengambil semua values milik array
var_dump(array_values($person));

// array map mengubah semua data array dengan callback

$dataResult = array_map(fn (int $value) => $value * 10, $data);

var_dump($dataResult);

// sort mengurutkan array

// rsort mengurutkan array terbalik
rsort($data);

var_dump($data);
// shuffle mengubah posisi di array secara random