<?php
function converterDolarParaReal($valorDolar, $cotacaoDolar = 1.81) {
    $valorReal = $valorDolar * $cotacaoDolar;
    return round($valorReal, 2);
}

$valorDolar = 100;  
$valorEmReais = converterDolarParaReal($valorDolar);
echo "$valorDolar dólares equivalem a R$ $valorEmReais reais.";
?>
