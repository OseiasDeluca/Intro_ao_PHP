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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900; // isset é uma funçao nativa do PHP, serve para saber se uma variável está definida. Ela basicamente verifica a existência de uma variável, e assim, retorna um valor boleano (true se for verdadeiro, e false se for falso).
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos <br/>";
    

    // ESTRUTURA CONDICIONAL
    
    if($i >= 18) {
        $v = "já pode votar";
        $d = "já pode dirigir.";      
    } else {
        $v = "não pode votar";
        $d = "não pode dirigir.";
    }
        echo "Com essa idade você $v e também $d"
    ?>
    <br/> <a href="Index.html">Voltar</a>
</div>
</body>
</html>