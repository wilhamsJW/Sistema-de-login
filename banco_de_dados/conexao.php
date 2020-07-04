<?php 
$utf8 = header("Content-Type: text/html; charset=utf-8"); //charset=utf-8 = evitar alguns problemas de acentuação
$link = new mysqli('localhost', 'root', '', 'db_cadastro');
$link->set_charset('utf8');//set_charset('utf-8') = evitar alguns problemas de acentuação

/*
if (!isset($link)) {                                
    echo "ERROR PROBLEMAS NO SERVIDOR";
}*/

?>