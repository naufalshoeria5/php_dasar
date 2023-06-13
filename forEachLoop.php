<?php

$names = ['naufal', 'hidayah', 'surya'];
$namesKey = [
    "first_name" => 'naufal',
    "middle_name" => 'hidayah',
    "last_name" => 'surya'
];

foreach ($names as $key => $value) {
    echo "hello $value " . PHP_EOL;
}

foreach ($namesKey as $key => $value) {
    echo "$key : $value " . PHP_EOL;
}
