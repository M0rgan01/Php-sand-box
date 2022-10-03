<?php

// WHILE
$chiffre = 0;
while ($chiffre !== 10) {
    echo "- $chiffre\n";
    $chiffre++;
}

// FOR
for ($i = 0; $i < 10; $i++) {
    echo "- $i\n";
}

// FOR EACH
$notes = [10, 15, 18];
foreach ($notes as $note) {
    echo "- $note\n";
}

$eleves = [
    'Jean' => 13,
    'Marc' => 16,
];
foreach ($eleves as $key => $eleve) {
    echo "- $key: $eleve\n";
}

// TESTS

$testNotes = [];
while (true) {
    $input = readline("Entrez une note :");
    if ($input !== "fin") {
        $testNotes[] = (int)$input;
    } else {
        break;
    }
}

foreach ($testNotes as $note) {
    echo "- $note\n";
}