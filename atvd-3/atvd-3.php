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
    // Defina uma variável chamada "date" com o valor do dia atual no formato "d/m/Y"
    $dia = date('d/m/Y');

    // Imprima o valor da variável "date"
    echo "Hoje é dia " . $dia . "!";
?>
</body>
</html>