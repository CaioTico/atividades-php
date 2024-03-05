<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body> 
<?php
    // Defina uma variável chamada "name" com o valor "do seu nome"
    $name = "Caio Henrique Rodrigues Toledo";
?>
    <!-- Imprima o valor da variável "name" como titulo da página -->
<h1><?php echo 'Olá, ' . $name . '!'; ?></h1>
</body>
</html>