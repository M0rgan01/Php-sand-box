<?php

// un cast
$note = '10';

if ($note > 10) {
    echo 'Vous avez la moyenne';
} else if ($note === 10) {
    // l'opérateur '===' rajoute une vérification d'égalité du type
    echo 'Vous avez juste la moyenne';
} else if ($note == 10) {
    echo 'Vous avez juste la moyenne v2';
} else {
    echo 'Vous n\'avez pas la moyenne';
}

// un cast
$action = (int)readline("\nEntrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)");

switch ($action) {
    case 1:
        echo 'J\'attaque';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3:
        echo 'Je passe mon tour';
        break;
    default:
        echo 'Commande inconnue';
}