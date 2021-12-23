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

    //CALCULAR MÉDIA DO ALUNO

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $m = ($n1 + $n2) / 2;

    echo "Sua nota da primeira prova foi: $n1 <br/>";
    echo "Sua nota da segunda prova foi: $n2 <br/>";
    echo "Média: $m <br/>";

    //ESTRUTURA CONDICIONAL ANINHADA

    if ($m < 5) {
        $s = "REPROVADO";
    } 
    elseif ($m > 5 && $m < 7) {
        $s = "RECUPERAÇÃO";
    } else {
        $s = "APROVADO";
    }

    echo "Situação: $s"
    ?>
<br/> <a href="Index.html">Voltar</a>
</div>
</body>
</html>