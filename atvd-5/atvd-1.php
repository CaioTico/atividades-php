<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Função</title>
</head>
<body>
    <?php
        $num = 5000;
        function teste_escopo1()
        {
            global $num; // define a variavél como global e permite acessar variáveis fora da função
            $num += 5;
            echo $num . "<br>";
        }
        echo $num . "<br>";
        teste_escopo1();
    ?>

</body>
</html>