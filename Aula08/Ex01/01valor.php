<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Aula 08 - Ex01</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);

    echo "O valor enviado foi $valor <br/>";
    echo "A raiz quadrada do valor enviado é:" . number_format($rq, 2), " <br/>";
    ?>

<a href="index.html">Voltar</a>
</div>
</body>
</html>