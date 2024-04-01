<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Calculadora de Desconto</title>
    <link rel='stylesheet' href='style.css'> <!-- Link para o arquivo de estilo CSS -->
</head>

<body>
    <div class='calculator'>
        <h1>Calculadora de Desconto</h1>
        <form action='' method='post'> <!-- Formulário de entrada de dados -->
            <label for='product_name'>Nome do Produto:</label> <!-- Rótulo para o nome do produto -->
            <input type='text' name='product_name' id='product_name' required> <!-- Campo de entrada para o nome do produto -->
            <label for='product_value'>Valor do Produto:</label> <!-- Rótulo para o valor do produto -->
            <input type='text' name='product_value' id='product_value' required> <!-- Campo de entrada para o valor do produto -->
            <button type='submit'>Calcular</button> <!-- Botão de submissão do formulário -->
        </form>
    </div>

    <?php
    // Lógica PHP para calcular desconto e exibir resultados
    if (isset($_POST['product_name']) && isset($_POST['product_value'])) {
        $product_name = $_POST['product_name'];
        $product_value = $_POST['product_value'];
        // ...
    ?>
        <!-- Resultado do cálculo exibido após a submissão do formulário -->
        <div class='result' id='result'>
            <h2>Resultado do Cálculo</h2>
            <!-- Parágrafos para exibir os resultados do cálculo -->
            <p id='product_name_display'>Nome do Produto: <?php echo $product_name; ?></p>
            <p id='product_value_original'>Valor Original do Produto: R$ <?php echo number_format($product_value, 2); ?></p>
            <!-- Outros resultados são adicionados aqui -->
        </div>
    <?php } ?>

</body>

</html>
