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
    // A partir do PHP 7
    define('ANIMALS', array(
        'dog',
        'cat',
        'bird',
    ));
    echo ANIMALS[2]; //imprime "cat"
    ?>
</body>
</html>