<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Operadores Aritméticos</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
<?php
        $n1 = 3; // Variavél do primeiro valor
        $n2 = 2; // Variavél do segundo valor
        $s = $n1 + $n2; // // Variavél responsaável p/ receber o valor da primeira variável e da segunda
        echo "A soma entre $n1 e $n2 é = $s"; // Mostra no navegador
        echo "<br/>A subtração vale = ". ($n1-$n2);
        echo "<br/>A multiplicação vale = ". ($n1*$n2);
        echo "<br/>A divisão vale = ". ($n1/$n2);
        echo "<br/>O resto da divisão vale = ". ($n1%$n2);

        //ORDEM DE PRECEDÊNCIA NO RSULTADO DASCONTAS

        //Em uma conta qualquer o que será calculado primeiro será:
        //Parênteses (), Multiplicação, Divisão, Módulo, Adição e Subutração

        $m = $n1 + $n2 / 2; // Exemplo de um calculo de média ERRADO
        echo "<p><br/> Resultado do cálculo de média errado: $m";
        echo "<br/>Como o código foi escrito: $n1 + $n2 / 2 = $m";
        echo "<br/> '$n1' é a variável 1 e '$n2' é variável 2";

        $m1 = ($n1 + $n2) / 2; // Exemplo de um calculo de média CORRETO
        echo "<p> <br/> Resultado do cálculo de média correto: $m1";
        echo "<br/>Como o código foi escrito: ($n1  + $n2) / 2 = $m1";
        echo "<br/> '$n1' é a variável 1 e '$n2' é variável 2";

        ?>
</div>
</body>
</html>