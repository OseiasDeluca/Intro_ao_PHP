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
    //3.Função wordwrap

    $txt = "Este é um exemplo de string gigante que fora criada pelo PHP e vai mostrar o funcionamento do wordwrap";
    // $res = wordwrap($txt, 8,); - Mostrá apenas no código fonte a quebra
    $res = wordwrap($txt, 8, "<br/>"); // Na execução será mostrada na página.
    // $res = wordwrap($txt, 8, "<br/>\n") - Será mostrado na página e no código fonte.
    //$res = wordwrap($txt, 5, "<br/>"\n, false) - O false no final do wordwarp, gerará a quebra por palavra que tiver - de 5 letras.
    //$res = wordwrap($txt, 5, "<br/>"\n, true) - O true no final do wordwarp, quebrará por palavra que tiver 5 letras, independentemente, se ela estrá inteira ou não.
    echo($res);
    
    ?>
</div>
</body>
</html>