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
    <form method="get" action="Index02.php">
        <?php

        $c = 1;

        while ($c <= 5) {

        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/></br>";

        $c++;
        }
        ?>
        <input type="submit" value="Entrar" class="botao"/>

    </form>
</div>
</body>
</html>