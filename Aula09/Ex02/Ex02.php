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
    $a = $a = isset($_GET["ano"])?$_GET["ano"]:1900; //Recebe o ano e verifica, se não passar ano 1900 será o valor
    $i = date("Y") - $a; // Recebe ano e subtrai pelo ano atual.

    echo "Você nasceu em $a e tem $i anos. <br/>";


    //ESTRUTURA CONDICIONAL ANINHADA
    if ($i < 16) {
        $v = "proibido.";
    } 
    elseif (($i >= 16 && $i < 18) || ($i >=65)) { // || = ou && = E
            $v = "opcional.";
    }
    else {
        $v = "obrigatório.";
    }


    echo "Você tem $i e seu voto é $v"
    ?>

<br/> <a href="Index.html">Voltar</a>
</div>
</body>
</html>