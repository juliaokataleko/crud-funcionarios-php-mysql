<?php
function pageInit($page) {
    if(isset($page)) {
        return include "views/$page.php";
    } 
}

function moedaMonetaria(int $valor) {
    return number_format($valor, 2, ',','.')." Akz";
}