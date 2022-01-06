<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title></title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        
        $r = 0;
        $div = "";
        $cont = 0;
        $result = "";

        echo "<h1>Analisando o número $n...</h1>";

        for($i = 1;$i <= $n;$i++){
            if ($n % $i == 0){
                $div .=" $i";
                $cont++;
            }
        }

        if ($cont > 2){
            $r = "<b>NÃO É PRIMO</b>";
        } else{
            $r = "<b>É PRIMO</b>";
        }
        

        echo "<h2>Valores múltiplos: $div</h2>";

        echo "<h2>Total de múltiplos: $cont </h2>";

        echo "<h1>Resultado: $n $r </h1>"


    ?>
     </br><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>