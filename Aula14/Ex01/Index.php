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
            echo "<p>A soma vale $s</p>";
        }
    
        soma(3, 4);
        soma(8, 2);
        $x = 9;
        $y =15;
        soma($x, $y)
    ?>
</div>
</body>
</html>