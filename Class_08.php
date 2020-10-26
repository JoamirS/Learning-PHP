<?php

$age = 17;
$numberOfPeople = 2;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

echo "A partir de 16 anos, pode entrar acompanhado." . PHP_EOL;

if ($age >= 18) {
    echo "Você tem $age anos. Pode entrar sozinho.";
} else if ($age >= 16 && $numberOfPeople > 1) {
    echo "Você tem $age anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $age anos. Você não pode entrar.";
}

echo PHP_EOL;

echo "Adeus";
