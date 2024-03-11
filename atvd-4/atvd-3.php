<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcule 15% de um Valor</title>
</head>
<body>
    <h2>Calcule 15% de um Valor</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="value">Valor:</label>
        <input type="number" name="valor" required>

        <button type="submit">Calcular</button>
    </form>

    <?php

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // puxa o valor inserido no campo 'valor' do formulário
        $value = $_POST["valor"];

        // Calcula 15% do valor
        $percentage = $value * 0.15;

        echo "<p>15% de $value é $percentage</p>";
    }
    ?>
</body>
</html>