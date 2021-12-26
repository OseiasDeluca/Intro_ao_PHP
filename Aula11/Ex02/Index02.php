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
    $i = 1;
    while($i <= 5){
        $v = "num".$i;
        $url = "v".$i;
        $$v = isset($_GET[$url])?$_GET[$url]:0;
        $i++;
    }

    $i = 1;
    while($i <= 5){
        $v = "num".$i;
        echo "Valor $i:". $$v."<br/>";
        $i++;
    }
    ?>
</div>
</body>
</html>