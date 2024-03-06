<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>exercicio 5</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        // Solicita ao usuário que informe seu nome e sobrenome
        var nome = prompt('Informe seu NOME e SOBRENOME');
    </script>
</head>
<body>
<?php
    // Atribui o valor da variável JavaScript 'nome' à variável PHP '$nome'
    // usando uma tag script dentro do código PHP
    $nome =  "<h1><script> document.write(nome) </script><h1>";

    // Exibe o valor da variável '$nome'
    echo $nome;
?>
</body>
</html>