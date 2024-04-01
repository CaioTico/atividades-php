<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Calculadora de Desconto</title>
    <link rel='stylesheet' href='style.css'>
</head>

<body>
<body>
    <div class='calculator'>
        <h1>Calculadora de Desconto de 7%</h1>
        <form action='#' method='post'>
            <label for='product_name'>Nome do Produto:</label>
            <input type='text' name='product_name' id='product_name' required>
            <label for='product_value'>Valor do Produto:</label>
            <input type='number' name='product_value' id='product_value' required>
            <button type='submit'>Calcular</button>
        </form>
    </div>
    <div class='result' id='result' style='display:none;'>
        <h2>Resultado do Cálculo</h2>
        <p id='product_name_display'></p>
        <p id='product_value_original'></p>
        <p id='discount'></p>
        <p id='product_value_with_discount'></p>
    </div>
    <script src='script.js'></script>
<?php
// Receba o nome e o valor do produto do usuário
if (isset($_POST['product_name']) && isset($_POST['product_value'])) {
    $product_name = $_POST['product_name'];
    $product_value = $_POST['product_value'];

    // Calcule o desconto (7% do valor do produto)
    $discount = $product_value * 0.07;

    // Calcule o valor final do produto com o desconto aplicado
    $product_value_with_discount = $product_value - $discount;

    // Mostre o resultado
    echo "
    <script>
    document.getElementById('result').style.display = 'block';
    document.getElementById('product_name_display').innerHTML = 'Nome do Produto: $product_name';
    document.getElementById('product_value_original').innerHTML = 'Valor Original do Produto: R$ ". number_format($product_value, 2). "';
    document.getElementById('discount').innerHTML = 'Valor do Desconto: R$ ". number_format($discount, 2). "';
    document.getElementById('product_value_with_discount').innerHTML = 'Valor do Produto com Desconto: R$ ". number_format($product_value_with_discount, 2). "';
    </script>
    ";
} else {
    echo "Por favor, preencha os campos de nome do produto e valor do produto.";
}
?>
</body>

</html>