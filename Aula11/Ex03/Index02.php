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
    $ini = isset($_GET["inicio"])?$_GET["inicio"]:0;
    $fim = isset($_GET["fim"])?$_GET["fim"]:0;
    $inc = isset($_GET["inc"])?$_GET["inc"]:0;


    if ($ini < $fim){

        while ($ini <= $fim){

            echo "$ini ";
            $ini += $inc;
        } 
    }else {
        while ($ini >= $fim) {

                echo "$ini ";
                $ini -= $inc;
            }
        }
    ?>
    </br>
</div>
<a href="javascript:history.go(-1)" class="juca1">Voltar</a> 
</body>
</html>