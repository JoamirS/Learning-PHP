<?php

// Desafio: Mostrar todos os números ímpares de 1 a 100

// Primeira forma, não recomendada, mas lógica
/*for ($counter = 1; $counter <= 100; $counter += 2) {
    echo "$counter\n";
}
*/

// Segunda forma, recomendada, pois há o cálculo

$counter = 1;

while ($counter <= 100) {
    if ($counter % 2 != 0) {
        echo "$counter\n";
    }
    $counter++;
}
