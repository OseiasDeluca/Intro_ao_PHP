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
        // require "funcoes2.php"; - se não achar o arquivo solicitado ele parará o programa aonde não acho
        //include "funcoes2.php"; - mesmo se não achar, continuará rodando programa, mas será notificado do erro mesmo assim.
        include "funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando programa...</h2>";
    ?>
</div>
</body>
</html>