<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Incremento</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
    
    //Pré-incremento $a = $a + 1 -> ++$a
    //Pós-incremento $a = $a + 1 -> $a++
    //Pré-decremento $a = $a - 1 -> --$a
    //Pós-decremento $a = $a - 1 -> $a--

    echo "Qual foi o ano anteirior ao atual?";

    $atual = $_GET["aa"];
    echo "</br> O ano atual é $atual e o ano anterior é " . --$atual;

    ?>
</div>
</body>
</html>