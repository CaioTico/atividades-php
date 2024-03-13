<!DOCTYPE html>
<html>

<head>
    <html lang="pt-br">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Verificador de números arredondados</title> <!-- Título da página -->
</head>

<body>
    <h1>VERIFICADOR DE NÚMEROS ARREDONDADOS</h1> <!-- Título principal da página -->
    <form action="" method="post"> <!-- Início do formulário -->
        <label for="numero">Digite um número:</label> <!-- Rótulo do campo de entrada de número -->
        <input type="number" name="numero" id="numero"> <!-- Campo de entrada de número -->
        <input type="submit" name="enviar" value="Enviar"> <!-- Botão de envio do formulário -->
    </form> <!-- Fim do formulário -->
    <?php 
    $numero = null; // Inicializa a variável $numero como nula
    if(isset($_POST['enviar'])){ // Verifica se o formulário foi enviado
        $numero = $_POST['numero']; // Atribui o valor do campo de entrada à variável $numero
        if(ctype_digit($numero)){ // Verifica se o valor de $numero é um número inteiro
            echo "<p>Esse número aki $numero que vc colocou é arredondado.</p>"; // Exibe a mensagem "O número X é arredondado."
        } else {
            echo "<p>Esse número aki $numero que vc colocou não é arredondado.</p>"; // Exibe a mensagem "O número X não é arredondado."
        }
    }
    ?>

</body>

</html>