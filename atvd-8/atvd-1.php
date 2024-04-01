<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <section>
        <span>Sistema de tabuada</span>
        <div>
            <form action="" method="post">
                <input type="number" name="numero">
                <br><br>
                <input type="submit" name="">
            </form>
        </div>
        <div>
            <!-- Código de PHP -->
            <?php
                $num = filter_input(INPUT_POST, "numero");
                if($num){
                    for ($i=0; $i < 10; $i++) { 
                        echo "$num x $i = " . ($num * $i) . "<br>";
                    }
                }else{
                    echo "Informe um número para a tabuada";
                }
                ?>
        </div>
    </section>
</body>
</html>