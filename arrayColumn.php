<?php

$kota_kabupaten = [
    [
        'nama' => 'Kabupaten Alor',
        'luas_wilayah' => 2593.17,
        'jumlah_penduduk' => 190953,
        'pusat_pemerintahan' => 'Kalabahi',
    ],
    [
        'nama' => 'Kabupaten Belu',
        'luas_wilayah' => 1785.04,
        'jumlah_penduduk' => 366023,
        'pusat_pemerintahan' => 'Atambua',
    ],
    [
        'nama' => 'Kabupaten Ende',
        'luas_wilayah' => 2291.86,
        'jumlah_penduduk' => 258876,
        'pusat_pemerintahan' => 'Ende',
    ],
    [
        'nama' => 'Kabupaten Flores Timur',
        'luas_wilayah' => 1759.60,
        'jumlah_penduduk' => 254875,
        'pusat_pemerintahan' => 'Larantuka',
    ],
    [
        'nama' => 'Kabupaten Kupang',
        'luas_wilayah' => 11235.84,
        'jumlah_penduduk' => 456769,
        'pusat_pemerintahan' => 'Kupang',
    ],
    [
        'nama' => 'Kabupaten Lembata',
        'luas_wilayah' => 1288.19,
        'jumlah_penduduk' => 117764,
        'pusat_pemerintahan' => 'Lewoleba',
    ],
    [
        'nama' => 'Kabupaten Malaka',
        'luas_wilayah' => 1311.25,
        'jumlah_penduduk' => 168388,
        'pusat_pemerintahan' => 'Betun',
    ],
    [
        'nama' => 'Kabupaten Manggarai',
        'luas_wilayah' => 7645.52,
        'jumlah_penduduk' => 402812,
        'pusat_pemerintahan' => 'Ruteng',
    ],
    [
        'nama' => 'Kabupaten Manggarai Barat',
        'luas_wilayah' => 2284.73,
        'jumlah_penduduk' => 111235,
        'pusat_pemerintahan' => 'Labuan Bajo',
    ],
    [
        'nama' => 'Kabupaten Manggarai Timur',
        'luas_wilayah' => 1594.70,
        'jumlah_penduduk' => 158770,
        'pusat_pemerintahan' => 'Borong',
    ],
    [
        'nama' => 'Kabupaten Nagekeo',
        'luas_wilayah' => 1381.15,
        'jumlah_penduduk' => 121598,
        'pusat_pemerintahan' => 'Mbay',
    ],
    [
        'nama' => 'Kabupaten Ngada',
        'luas_wilayah' => 1768.19,
        'jumlah_penduduk' => 165254,
        'pusat_pemerintahan' => 'Bajawa',
    ],
    [
        'nama' => 'Kabupaten Rote Ndao',
        'luas_wilayah' => 1188.45,
        'jumlah_penduduk' => 147769,
        'pusat_pemerintahan' => 'Baa',
    ],
    [
        'nama' => 'Kabupaten Sabu Raijua',
        'luas_wilayah' => 461.04,
        'jumlah_penduduk' => 73298,
        'pusat_pemerintahan' => 'Sabu',
    ],
    [
        'nama' => 'Kabupaten Sikka',
        'luas_wilayah' => 1629.90,
        'jumlah_penduduk' => 301663,
        'pusat_pemerintahan' => 'Maumere',
    ],
    [
        'nama' => 'Kabupaten Sumba Barat',
        'luas_wilayah' => 7059.67,
        'jumlah_penduduk' => 233240,
        'pusat_pemerintahan' => 'Waikabubak',
    ],
    [
        'nama' => 'Kabupaten Sumba Barat Daya',
        'luas_wilayah' => 1975.92,
        'jumlah_penduduk' => 137462,
        'pusat_pemerintahan' => 'Tambolaka',
    ],
    [
        'nama' => 'Kabupaten Sumba Tengah',
        'luas_wilayah' => 2099.97,
        'jumlah_penduduk' => 140710,
        'pusat_pemerintahan' => 'Waibakul',
    ],
    [
        'nama' => 'Kabupaten Sumba Timur',
        'luas_wilayah' => 7302.47,
        'jumlah_penduduk' => 267573,
        'pusat_pemerintahan' => 'Waingapu',
    ],
    [
        'nama' => 'Kabupaten Timor Tengah Selatan',
        'luas_wilayah' => 5698.56,
        'jumlah_penduduk' => 344273,
        'pusat_pemerintahan' => 'Soe',
    ],
    [
        'nama' => 'Kabupaten Timor Tengah Utara',
        'luas_wilayah' => 3728.30,
        'jumlah_penduduk' => 259091,
        'pusat_pemerintahan' => 'Kefamenanu',
    ],
    [
        'nama' => 'Kota Kupang',
        'luas_wilayah' => 180.00,
        'jumlah_penduduk' => 396857,
        'pusat_pemerintahan' => 'Kupang',
    ],
];

$nama_kota = array_column($kota_kabupaten, 'nama');

var_dump($nama_kota);
