<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title></title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php
  
      for($c = 1;$c <= 10; $c++){
        echo "$c ";
    };

    echo "<br/>";
    for ($i = 10;$i >= 1; $i--){
    echo "$i ";
    };

    echo "<br/>";
    for($i = 0; $i <= 100; $i+= 5){
        echo "$i ";
    };
    echo "<br/>";

    for ($i = 30; $i >= 0; $i -= 2){
        echo "$i ";
    };

   
    ?>
</div>
</body>
</html>