<?php

$peso = 70;
$altura = 1.78;

$imc = $peso / ($altura * $altura);

echo "O IMC é equivalente a $imc e ele está " . ($imc < 18 ? "abaixo" : ($imc < 25 ? "dentro" : "acima")) . " do adequado.";