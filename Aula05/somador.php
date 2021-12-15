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
        echo "<br/>A subtracao vale ". ($n1-$n2);
        echo "<br/>A multiplicacao vale ". ($n1*$n2);
        echo "<br/>A divisao vale ". ($n1/$n2);
        echo "<br/>A smodulo vale ". ($n1%$n2);
    ?> 
</div>
</body>
</html>