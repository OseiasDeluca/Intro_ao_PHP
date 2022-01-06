<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style01.css">
    <title></title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php

        function soma($a, $b){
            $s = $a + $b;
            return "$s";
        }
        
        $x = 3;
        $y = 4;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r"
        /*
        Outra maneira também que pode dar certo.
        function soma($a, $b){
            return $a+$b;
        }
        
        $x = 3;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r"
        */

    ?>
</div>
</body>
</html>