<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da Media</title>
</head>
<body>
<h1>Calculo da Media</h1>
    <form method="post" action="calcular_media.php">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" step="0.01" required><br>
        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $media = ($nota1 + $nota2) / 2;
    echo "Aluno: " . $nome . "<br>";
    echo "Média: " . number_format($media, 2) . "<br>";
    if ($media >= 7) {
        echo "Situação: Aprovado";
    } else {
        echo "Situação: Reprovado";
    }
}
?>