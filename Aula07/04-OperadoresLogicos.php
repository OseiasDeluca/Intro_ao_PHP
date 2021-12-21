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
        // É obrigado a votar ou não?

        $ano = $_GET["an"];
        $idade = 2021 - $ano;
         
        echo "Quem nasceu em $ano tem idade $idade anos <br/>";
        $tipo = ($idade>=18 && $idade<=65)?"OBRIGATÓRIO":"OPCIONAL";
        echo "Seu voto é: $tipo"
    ?>
</div>
</body>
</html>