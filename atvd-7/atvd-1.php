<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>cáuculo fatorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        h1 {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            margin: 0;
        }
        form {
            margin: 1rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        input[type="number"] {
            padding: 0.5rem;
            margin-bottom: 0.5rem;
        }
        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 0.5rem;
            border: none;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <h1>Caulculadora Fatorial</h1>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">CAULCULAR</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Se o formulário for submetido
    $numero = $_POST["numero"]; // Obtenha o número digitado
    $fatorial = 1; // Inicialize o fatorial como 1
    for ($i = 1; $i <= $numero; $i++) { // Inicie um loop para calcular o fatorial
        $fatorial *= $i; // Multiplique o fatorial atual pelo próximo número
    }
    echo "<p>O fatorial desse numero: {$numero} é: {$fatorial}!</p>"; // Exiba o resultado do cálculo do fatorial
}
?>
</body>
</html>