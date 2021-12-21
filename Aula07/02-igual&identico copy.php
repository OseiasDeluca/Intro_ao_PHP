<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";

        $r  = ($a == $b)?"SIM":"NÃO";
        $j = ($a === $b)?"SIM":"NÃO"; // Para ser identica presica ter o mesmo valor e o mesmo TIPO primitivo
        echo "As variáveis A e B são iguais? R: $r <br/>"; // Aqui não leva em consideração o TIPO, apenas se são iguais, veja que uma é do tipo Number outra do tipo String!
        echo "As variáveis são do mesmo TIPO (IDENTICAS)? R: $j";
    ?>
</div>
</body>
</html>