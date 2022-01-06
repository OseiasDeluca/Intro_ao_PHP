<!-- ESTRUTURA DE REPETIÇÃO - DO WHILE-->

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
    $c = 0;
    do {
        echo "$c ";
        $c += 2;
    } while ($c <= 20) ;

    $d = 10;
    
    echo "<br/>";
    do {
        echo "$d ";
        $d--;
    } while($d >= 1)


    ?>
</div>
</body>
</html>