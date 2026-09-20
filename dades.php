<?php
// Definició de constants
define('NOM_BIBLIOTECA', 'La Biblioteca de DAW');
const MAX_ESTRELLES = 5;

// Array associatiu predefinit de llibres
$biblioteca = [
    [
        'id' => 1,
        'titol' => 'El nom del vent',
        'autor' => 'Patrick Rothfuss',
        'any' => 2007,
        'genere' => 'Fantasia',
        'llegit' => true,
        'valoracio' => 5
    ],
    [
        'id' => 2,
        'titol' => '1984',
        'autor' => 'George Orwell',
        'any' => 1949,
        'genere' => 'Ciència-ficció',
        'llegit' => true,
        'valoracio' => 4
    ],
    [
        'id' => 3,
        'titol' => 'Cien años de soledad',
        'autor' => 'Gabriel García Márquez',
        'any' => 1967,
        'genere' => 'Realisme màgic',
        'llegit' => false,
        'valoracio' => 0
    ],
    [
        'id' => 4,
        'titol' => 'El codi Da Vinci',
        'autor' => 'Dan Brown',
        'any' => 2003,
        'genere' => 'Misteri',
        'llegit' => true,
        'valoracio' => 3
    ],
    [
        'id' => 5,
        'titol' => 'La plaça del Diamant',
        'autor' => 'Mercè Rodoreda',
        'any' => 1962,
        'genere' => 'Drama',
        'llegit' => false,
        'valoracio' => 0
    ]
];

// Càlculs previs en variables pròpies
$total_llegits = 0;
$total_no_llegits = 0;
$suma_valoracions = 0;

foreach ($biblioteca as $llibre) {
    if ($llibre['llegit']) {
        $total_llegits++;
        $suma_valoracions += $llibre['valoracio'];
    } else {
        $total_no_llegits++;
    }
}

// Mitjana arrodonida a 1 decimal
$mitjana_valoracio = $total_llegits > 0 ? round($suma_valoracions / $total_llegits, 1) : 0;

/* 
Exemple d'ús de var_dump() per a depuració (comentat segons requisits):
echo '<pre>';
var_dump($biblioteca);
echo '</pre>';
*/