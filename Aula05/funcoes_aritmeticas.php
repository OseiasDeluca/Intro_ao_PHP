<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Funções Aritméticas em PHP</title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
      echo "<b>PASSAR VALORES NA BARRA DE PESQUISA!</b>";
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];
      echo "<h3> Valores recebidos: $v1 e $v2 </h3>";

      // abs() = Valor Absoluto
      // pow() = Potenciação
      // sqrt() = Raiz Quadrada
      // round() = Arredondamento
      // intval() = Valor inteiro da vairável
      // number_format() = Formatação

      echo "O valor absoluto de $v2 é " .abs($v2) .";";
      echo "</br>O valor de $v1 <sup>$v2</sup> é " .pow($v1, $v2) .";";
      echo "</br>A raiz de $v1 é " .sqrt($v1) .";";
      echo "</br>O valor de $v2 arredondado é " .round($v2) .";"; // arrendodamento - ceil sempre p/ cima e floor sempre p/ baixo
      echo "</br>A parte inteira de $v2 é " .intval($v2) .";";
      echo "</br>O valor de $v1 em Real é R$" .number_format($v1,2, ",",".") .";";
    ?>
</div>
</body>
</html>