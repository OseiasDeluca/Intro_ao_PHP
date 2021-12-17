<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Operadores de Atrubuição 02</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php

        // Declarei as variáveis 
        $a = 1;
        $b = 3;
        $c = $a + $b; // Variável $c é a soma da $a e $b
        $d = 1;

        // Aqui passarei a fazer as atribuições nas variáveis

        $c += 5;

        // $b = $b + $a; Resultado = 4 

        // Forma mais completa, mas tendo a mesma variável, existe um atalho:
        $b += $a; // Mesmo resultado

        // 3 exepmplos de atribuição
        // $a = $a + 1; // Completo
        // $a += 1; // Simplificado
        $a++; // Variével que recebe ela mesmo, +1

        
        // $d = $d.$b; // CONCATENAÇÃO, NÃO SOMA!
        $d .= $b; // Mesma coisa, só que menor
        // $c = $c + 5; Forma mais completa

        echo "$c <br/>";
        echo "$b <br/>";
        echo "$a <br/>";
        echo "$d <br/>"; 



        // Operadores de Atribução

        // Adição: $a = $a + $b ->      #a += $b
        // Subtração:  $a = $a - $b ->      $a -= $b
        // Multiplicação:  $a = $a * $b ->      $a*= $b
        // Divisão: $a = $a / $b ->     $a /= $b
        // Módulo: $a = $a % $b -> $b  ->       $a %= $b
        // Concatenação: $a = $a.$b     ->      $a .= $b 
    ?>
</div>
</body>
</html>