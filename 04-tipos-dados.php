<?php

// Tipos de dados php


$dados = [
    1, // inteiro
    1.341242, // decimal
    NULL, // nulo
    new stdClass, // objeto
    true, // booleano
    'php' // string
];

foreach ($dados as $valor) {
    echo gettype($valor), "\n";
}