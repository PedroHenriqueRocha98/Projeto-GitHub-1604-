<?php
echo "Digite o primeiro número: ";
$numero1 = (int) trim(fgets(STDIN));

echo "Digite o segundo número: ";
$numero2 = (int) trim(fgets(STDIN));

$soma = $numero1 + $numero2;

if ($soma > 20) {
    $resultado = $soma + 8;
    echo "Soma maior que 20. Resultado final: $resultado\n";
} else {
    $resultado = $soma - 5;
    echo "Soma menor ou igual a 20. Resultado final: $resultado\n";
}
?>
