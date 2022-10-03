<?php

// ARRAY SIMPLE
$notes = [10, 20];
echo $notes[1]; // 20

// ajout d'un élément / modification d'un élément
$notes[3] = 16;

// ajout d'un élément au prochain index
$notes[] = 15;

print_r($notes);

// ARRAY A 2 DIMENSION
$notes2 = [[1, 2, 3], [4, 5, 6]];
echo $notes2[1][2]; // 6

// MAP
$map = [
    'nom' => 'Doe',
    'prenom' => 'Jhon',
    'Notes' => [10, 20],
];

echo $map['nom']; // Doe

// ARRAY / MAP
$array = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jhon',
        'Notes' => [10, 20],
    ],
    [
        'nom' => 'Doe2',
        'prenom' => 'Jhon2',
        'Notes' => [11, 10],
    ],
];

echo $array[1]['Notes'][0]; // 11