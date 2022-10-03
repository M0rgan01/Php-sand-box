<?php

function helloWorld($nom) {
    echo "Bonjour $nom\n";
}

function helloWorldReturn($nom) {
   return "Bonjour $nom\n";
}

function helloWorldReturnWithDefault($nom = "Marc") {
    return "Bonjour $nom\n";
}

helloWorld("Jean");
$nom = helloWorldReturn("Jhon");

echo $nom;

// PORTEE DES VARIABLES
// les functions ne reconnaisse pas les variables de portée global
function notWorked() {
    return "Bonjour $nom\n";
}

// Une manière de récup les vars de porté global (mauvaise pratique)
function worked() {
    global $nom;
    return "Bonjour $nom\n";
}