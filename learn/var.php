<?php

// VARIABLE

// simple quote
$nom = 'Doe';
$prenom = 'Jhon';
echo $prenom . ' ' . $nom;

// double quote
$nom = 'Doe2';
$prenom = 'Jhon2';

echo "\n$prenom $nom\n";

$note = 10;
$note2 = 15;

$moyenne = ($note + $note2) / 2;

echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne";


// CONSTANTE

// v1
define('MA_CONSTANTE', 123);
// v2
const MA_CONSTANTE = 123;
