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
        $v = isset($_GET["tab"])?$_GET["tab"]:1;
        echo "<P>Mostrando a tabuada de $v </p>";

        $tab = 1;

        do {
            $res = $v * $tab;
            echo "$v x $tab = $res </br>";
            $tab++;
        }while ($tab <= 10);
    ?>

    <a href="Index.html">Voltar</a>
</div>
</body>
</html>