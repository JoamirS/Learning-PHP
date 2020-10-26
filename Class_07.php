<?php

$age = 21;

echo "Você só pode entrar se tiver mais de 18 anos" .PHP_EOL;

if ($age >= 18) {
    echo "Você tem $age anos. \nPode entrar.";
} else {
    echo "Você tem $age anos. \n Não pode entrar";
}