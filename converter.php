<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fahrenheit = $_POST['fahrenheit'];
    
       $celsius = ($fahrenheit - 32) * 5 / 9;

    echo "<h1>A temperatura em Celsius é: " . round($celsius, 2) . "°C</h1>";
}
?>
