<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Operadores de Atrubuição</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
    echo "PASSAR VALORES NA BARRA DE PESQUISA";
    $preco = $_GET["p"];
    echo "O preço do produto é R$ $preco";
    $preco +=  ($preco*10/100);
    echo "<br/> O novo preço do produto com 10% de aumento é R$ $preco";
    ?>
</div>
</body>
</html>