<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Variáveis referênciadas</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
   <?php

    $a = 3;
    $b = &$a; // Foi adicionado um '&' antes da variável $a
    $b += 5;

    echo "A variável 'a' vale $a";
    echo "</br>A variável 'b' vale $b";
    echo "</br>Conferir no código-fonte o que foi feito, antes a variável 'a' valia 3";
   ?>
</div>
</body>
</html>