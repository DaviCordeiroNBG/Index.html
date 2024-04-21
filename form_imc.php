<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>
</head>
<body>
<h1>Calculo do IMC</h1>
    <form method="post" action="calcular_imc.php">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" step="0.01" required><br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br>
        <input type="submit" value="Calcular IMC">
    </form>
    
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $peso = str_replace(",", ".", $peso);
    $altura = str_replace(",", ".", $altura);
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC é: " . number_format($imc, 2);
}
?>