<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link que liga o HTML c/ a pág CSS, isso é uma boa prática de programação! --> 
    <title>Variáveis em PHP</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div> 
    <!-- Para iniciar o PHP em sua página HTML, utiliza-se a SUPERTAG <$php todo o código será escrito nessa SUPERTAG $>   -->
    <?php
        $n = 4; // Variavéis são declaradas sempre com $. Tipo: Int.
        $no = "Gustavo"; // Tipo: string.  
        $n = 4.5; // Tipo: real.
        $nome = "Juca"; // Tipo: string.
        $idade = 35; // Tipo: Int.
        // echo $nome. " tem ". $idade. " anos!"; (concatenação de uma forma mais dificíl)
        echo "$nome tem $idade anos" // mostrará no navegador.
    ?>
</div>
</body>
</html>