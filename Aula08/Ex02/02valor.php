<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Aula 08 - Ex02</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
    // isset é uma funçao nativa do PHP, serve para saber se uma variável está definida. Ela basicamente verifica a existência de uma variável, e assim, retorna um valor boleano (true se for verdadeiro, e false se for falso).

    // Resolução temporaria de um problema, quando abrimos o arquivo PHP primeiro
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO]";
    $ano = isset($_GET["ano"])?$_GET["ano"]:"[0]";
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[NÃO INFORMADO]";
    $idade = date("Y") - $ano;

    echo "$nome é $sexo e tem $idade anos."
    ?>

<br/> <a href="index.html">Voltar</a>
</div>
</body>
</html>