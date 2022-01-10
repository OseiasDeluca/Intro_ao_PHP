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
    function teste(&$x) { // Agora colocando o & ovalor de $x será passado como referência, para $a.
        $x += 2;
        echo "<p> O valor de X é $x</p>";
    }

    $a = 3;
    teste($a);
    echo "<p>O valor de A é $a</p>"
    
    // Antes sem o "&":
    // O valor de X é 5
    // O valor de A é 3

    // Depois:
    // O valor de X é 5
    // O valor de A é 5
    ?>
</div>
</body>
</html>