<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Variáveis de variáveis</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
   <?php
    $x = "abc";
    $$x = "def"; // Criamos uma variável a partir da variável $x - que tem valor de abc, e atribuímos a ele "def"

    echo "O conteúdo da variável X é $x";
    echo "</br>A variável criada recebeu o valor $abc"; // O conteúdo da variável $x recebeu o valor  
   ?>
</div>
</body>
</html>