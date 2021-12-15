!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Operadores Aritméticos</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->

    <!-- No meu navegador o caminho para visualizar a página é: http://localhost/introPHP/Aula05/somador_p_parametro.php -->

    <!-- Como passar então o valor de uma variável pela barra do navegador? -->
    <!-- Fazer a variável "pegar" o valor colocado na barra de pesquisa -->
    <!-- Como? R: $n1 = $_GET["a"] -->
    <!-- Faça: http://localhost/introPHP/Aula05/somador_p_parametro.php?a=3&b=2 -->
</head>
<body>
    <!-- ATENÇÃO: Os valors das variáveis serão passado na barra de pesquisa do navegador -->
<div>
<?php
        echo "PASSAR PARÂMETROS NA BARRA DE PESQUISA";
        echo "<br/>EXEMPLO: http://localhost/introPHP/Aula05/somador_p_parametro.php?a=3&b=2<br/>";
        echo "<br/><b>*Esse caminho é exclusivo meu, preste atenção qual é o seu caminho na barra de pesquisa!*</b>";

        //GET = Pegar
        $n1 = $_GET["a"]; // Variavél que pegará o primeiro valor p/ parâmetro;
        $n2 = $_GET["b"]; // Variavél que pegará o segundo valor p/ parâmetro;
        $s = $n1 + $n2; // // Variavél responsaável p/ receber o valor da primeira variável e da segunda

        echo "<h2> Valores recebidos: $n1 e $n2 </h2>";

        $m1 = ($n1 + $n2) / 2; // Exemplo de um calculo de média CORRETO
        echo "<p>A soma entre $n1 e $n2 é = $s"; // Mostra no navegador
        echo "<br/>A subtração vale = ". ($n1-$n2);
        echo "<br/>A multiplicação vale = ". ($n1*$n2);
        echo "<br/>A divisão vale = ". ($n1/$n2);
        echo "<br/>O resto da divisão vale = ". ($n1%$n2);
        echo "<br/>Resultado do cálculo de média: $m1";
        ?>
</div>
</body>
</html>