<?php include_once 'conexao.php'; session_start();

    if(isset($_POST["nome"])) {
        $id = $_SESSION['id'];
        $nome     = $_POST["nome"]; 
        $email    = $_POST["email"];
        $telefone = $_POST["telefone"];

        //lembre-se em update não se usa o asterisco * depois de UPDATE IGUAL SE USA NO SELECT
        $update  = ("UPDATE tb_clientes SET nome='$nome', email='$email' , telefone='$telefone'  WHERE id='$id' " );
        
        $query = mysqli_query($link, $update);
        
        if(!isset($query)) {
            $mensagem = "ERROR AO ATUALIZAR, VERIFIQUE A EDIÇÃO!";
        } else {
            header("location:../consultas.php");
        }
    }

?>