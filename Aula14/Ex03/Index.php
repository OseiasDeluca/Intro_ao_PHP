<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style01.css">
    <title></title>
    <!-- PARA MELHOR VISUALIZAÇÃO DOS COMENTÁRIOS APERTE 'ALT' + 'Z' -->
</head>
<body>
<div>
    <?php

        function soma(){
            // Essa função coloca todos os objetos dentro de um vetor chamado '$p[]'
            $p = func_get_args();//Somar todos os parâmetros
            // Essa função retonra o número de argumentos que foram passados.
            $tot = func_num_args();
            $s = 0;

            for($i=0; $i < $tot; $i++) {
                $s = $s + $p[$i];
            }
            return $s;
        }

        $res = soma(3, 5, 2, 8, 9, 4);
        // Como a função transformou: $p[0], $p[1], $p[2], $p[3], $p[4], $p[5].
        // Logo foram recebidos 5 argumentos.
        echo "A soma dos valores é $res"

    ?>
</div>
</body>
</html>