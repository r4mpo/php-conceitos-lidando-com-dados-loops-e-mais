<?php

// Definimos o que queremos executar no script
$acao = "tabuada";

// Utilizando laços de repetição para formar uma tabuada
$nosso_numero = 4;

if ($acao === "tabuada") {
    // Neste caso, utilizaremos o for, pois sabemos que percorreremos 10 números (já é pré-definido)
    for ($i = 0; $i <= 10; $i++) {
        echo $nosso_numero . " x " . $i . " = " . ($nosso_numero * $i) . "\n";
    }
}

// Neste segundo exemplo, vamos mostrar quais números de um array são ímpares
$nossos_numeros = [1, 5, 2, 49, 2942, 12, 421, 9, 0];

if ($acao === "numeros_impares") {
    // Utilizaremos o foreach pois ele percorre um array
    foreach ($nossos_numeros as $numero) {
        if (($numero % 2) != 0) {
            echo "O número " . $numero . " é impar." . "\n";
        }
    }
}
