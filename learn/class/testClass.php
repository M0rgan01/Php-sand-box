<?php

namespace testPHP\classes;

// instantiation
$creneau = new Creneau(9, 17);

var_dump($creneau);

// appel d'une fonction
$inclusHeure = $creneau->inclusHeure(10);
var_dump($inclusHeure);

// appel d'une fonction statique
echo Creneau::getFormat();
// appel d'une variable statique
echo Creneau::$format;