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
        echo "Passe o valor pela URL <br/>";
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1+$n2)/2;

        echo "A media entre $n1 e $n2 é $m <br/>";

        // $sit = ($m<6)?"REPROVADO":"APROVADO"; // Operador unário

        // echo "A situação do aluno é: $sit"
        echo "A situação do aluno é: " . (($m<6)?"REPROVADO":"APROVADO"); // Concatenação
    ?>
</div>
</body>
</html>