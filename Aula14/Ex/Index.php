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
    <!-- Exercícios de criação própria -->
    <?php
        $a = isset($_GET["funcao"])?($_GET["funcao"]):1;
        $b = isset($_GET["funcao1"])?($_GET["funcao1"]):1;

        function soma($a, $b) {
            $s = $a + $b;
            echo "A soma vale $s.";
        }
        soma($a, $b)
    ?>
</div>
</body>
</html>