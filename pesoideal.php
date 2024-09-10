<?php
function calcularPesoIdeal($sexo, $altura) {
    if ($sexo == 'F') {
        
        $pesoIdeal = (62.1 * $altura) - 44.7;
    } elseif ($sexo == 'M') {
        
        $pesoIdeal = (72.2 * $altura) - 58;
    } else {
        return "Sexo inválido. Use 'M' para masculino ou 'F' para feminino.";
    }
    
    return round($pesoIdeal, 2); 
}

$sexo = 'F';  
$altura = 1.70;  

$pesoIdeal = calcularPesoIdeal($sexo, $altura);
echo "O peso ideal é: $pesoIdeal kg.";
?>
