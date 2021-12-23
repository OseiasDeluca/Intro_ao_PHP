<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <?php
        // isset é uma funçao nativa do PHP, serve para saber se uma variável está definida. Ela basicamente verifica a existência de uma variável, e assim, retorna um valor boleano (true se for verdadeiro, e false se for falso).

        $txt = isset($_GET["t"])?($_GET["t"]):["NÃO INFORMADO"];
        $tam = isset($_GET["tam"])?($_GET["tam"]):"12pt";
        $cor = isset($_GET["cor"])?($_GET["cor"]):"#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Aula 08 - Ex03</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>"
    ?>

<br/> <a href="index.html">Voltar</a>
</div>
</body>
</html>