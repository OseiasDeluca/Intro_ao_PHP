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
    // $print_r - gera saíde em testes
    // ÚTIL EM TESTES!

    echo "Usando print_f: <br>";
    $v[0] = 4;
    $v[1] = 5;
    $v[2] = 6;
    $v[3] = 7;
    print_r($v);
    $v2 = array (3, 7, 6, 2, 1, 9);
    echo "<br>";
    print_r($v2);
    echo " '=>' Significa associação, logo o índice [0], está associado ao número 3 <br>";
   

    // Essa função pode ser sustituida por essas duas funções: var_dump($x) & var_export($x);
    echo "<br>";
    //var_dump
    echo "Usando var_dump:";
    $a[0] = 4;
    $a[1] = 5;
    $a[2] = 6;
    $a[3] = 7;
    var_dump($a);
    $v1 = array (3, 7, 6, 2, 1, 9);
    echo "<br>";
    var_dump($v1);

    // var_export
    echo "Usando var_export: <br>";
    $b[0] = 4;
    $b[1] = 5;
    $b[2] = 6;
    $b[3] = 7;
    var_export($b);
    $v3 = array (3, 7, 6, 2, 1, 9);
    echo "<br>";
    var_export($v3);
    
    ?>
</div>
</body>
</html>