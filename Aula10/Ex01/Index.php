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
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    
    switch($o){
        case 1: 
            $r = $n * 2;
            break;
        case 2:
            $r = $n ^ 3;
            break;
        case 3:
            $r = sqrt($n);
            break;
    }

    echo "O resultado é: " . number_format($r, 2);
    ?>
    <br/>
    <br/>
    <a href="Index.html"><button class="juca" >Voltar</button></a>
</div>
</body>
</html>