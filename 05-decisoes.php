<?php

// Tomando decisões com PHP

// Nossas variáveis que servirão para tomar decisões
$idade = 18;
$acompanhadx = true;
$qualCondicional = 'Ternária';

if ($qualCondicional != 'Ternária') {

    // Se for maior ou igual a 18
    if ($idade >= 18) {
        echo 'Maior de idade. Autorizado.';
    } elseif ($acompanhadx && $idade >= 16) {
        echo 'Tem mais de 16 anos e está acompanhado. Autorizado.';
    } else {
        echo 'Menor de idade. Reprovado.';
    }
    
} else {
    // Em uma única linha, com if ternário
    echo $idade >= 18 ? 'Maior de idade. Autorizado.' : ($acompanhadx && $idade >= 16 ? 'Tem mais de 16 anos e está acompanhado. Autorizado.' : 'Menor de idade. Reprovado.');
}