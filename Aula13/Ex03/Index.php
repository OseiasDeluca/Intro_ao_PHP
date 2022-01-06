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

    <form method="get" action="02-tabuada.php">
        <select name="num">
        Tabuada:
            <?php
            for($i = 1; $i <= 10; $i ++){
                echo "<option>$i </option>";
            }
            ?>
        </select>
        <button type="submit" value="Fatorial" class="botao">Calcular</button>
        </form>
</div>
</body>
</html>