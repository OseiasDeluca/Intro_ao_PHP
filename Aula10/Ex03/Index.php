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
    $Reg = isset($_GET["selecionar"])?$_GET["selecionar"]:0;

    switch($Reg){

        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:           
            echo "Região Norte!";
            break;
        case 8:
        case 9:
        case 10:  
        case 11: 
        case 12:
        case 13:
        case 14:
        case 15:
        case 16:                                                  
            echo "Região Nordeste!";    
            break;
        case 17:    
        case 18:
        case 19:
        case 20:
            echo "Região Centro-oeste!";    
            break;
        case 21:
        case 22:
        case 23:
        case 24:
            echo "Região Sudeste";
            break;    
        case 25:
        case 26:
        case 27:
        default:
            echo  "Região Sul";    
    }
    ?>
    <br/>
    <br/>
    <a href="javascript:history.go(-1)" class="juca1">Voltar</a>
</div>
</body>
</html>