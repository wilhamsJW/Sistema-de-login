<?php include_once 'conexao.php'; 
    session_start();

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $queryDelete = $link->query("DELETE from tb_clientes where id='$id' ");

    if(mysqli_affected_rows($link)):
        header("location:../consultas.php");
    endif;    
?>