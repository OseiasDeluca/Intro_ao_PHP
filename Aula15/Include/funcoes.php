<?php 

//INCLUDE = incluir
//REQUIRE = requerir
//INCLUDE_ONCE & REQUIRE_ONCE = O include ou require, podem ser utilizados várias vezes no mesmo programa.
// Caso, se o arquivo já esteja sendo usado, não carregue de novo, se carreguei carregue. O once evitará que o arquivo seja carregado duplicadamente.
    function ola() {
        echo "<h1>Olá, mundo! - mensagem passada por include.</h1>";
    }

    function mostraValor($v) {
        echo "<h2>Acabei de receber o valor $v - mensagem passada por include.</h2>";
    }
?>