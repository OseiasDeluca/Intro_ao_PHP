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
    // String é tudo o que esteja dentro das "", seja número ou qualqeur outra coisa.

    // 25 FUNÇÕES PARA MANIPULAÇAO DE STRING
    // 1.Printf

    $p = "Leite";
    $pr = 4.5;
    echo "<p>Com echo: O $p custa R$". number_format($pr, 2),"</p>"; // Jeito antigo
    printf("Com printf: O %s custa R$%.2f", $p, $pr); // Jeito com printf
    // %.2f significa float, formatando-o com 2 casa depois a vírgula.

    // %d - Valor decimal (positivo ou negativo);
    // %u - Valor decimal sem sinal (apenas positivos);
    // %f - Valor real;
    // %s - String;
    ?>
</div>
</body>
</html>