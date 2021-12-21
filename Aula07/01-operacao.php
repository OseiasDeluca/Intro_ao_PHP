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

    // Operadores Relacionais
    //Maior $a > $b
    //Menor $a < $b
    //Maior ou igual $a >= $b
    //Menor ou igual $a <= $b
    //Diferente $a <> $b $s != $b
    //Igual $a == $b
    //Idêntico $a === $b

    //Operador Unário

    // expressão ? verdadeiro:falso
    /*
    $a = 3;
    $b = 2;
    $maior = $a>$b?$a:$b;

    echo ($maior)
    */
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    echo "Os valores passados foram $n1 e $n2<br/>";

    $r = ($tipo == "s")?$n1+$n2:$n1*$n2; // Usado para comparação básica!
    echo "Se for passado 'op=s' será somado, se for passado outra letra será multiplicada. <br/>";
    echo "O resultado será $r"
    ?>
</div>
</body>
</html>