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
    //4.Função = strlen
    $txt ="Curso em Vídeo";
    $tamanho = strlen($txt); // 15 - Pois palavras com acentuação, o acento será contado também.
    $tamanho2 = mb_strlen($txt); // 14 - Será desconsiderados os acentos.
    echo($tamanho), "<br>";
    echo($tamanho2);
    // 15 - Pois palavras com acentuação, o acento será contado também.
    ?>
</div>
</body>
</html>