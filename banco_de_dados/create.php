<?php  
    session_start(); //sempre q usar uma var de session temo q inicia-la, estou usando lá embaixo
    include_once 'conexao.php';

    //inserção no banco de dados
     if(isset($_POST["nome"])) {
        /*
        $nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); //filter_input = filtra a var e trás uma segurança á mais, não é recomendado acessar a var diretamente dessa forma: $_POST["nome"]; 
                                                                                    //FILTER_SANITIZE_SPECIAL_CHARS = tipo de filtro q eu quero q seja aplicado, este filtro é aplicado para textos
                                                                                   //INPUT_POST = método de envio poderia ser qq outro, porém aqui estamos recebendo via post
        $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
        */
         
        //print_r($_POST);//apenas pra visualzar se as informações estão sendo enviadas
        $nome     = $_POST["nome"]; //essa forma não é adequada á forma acima é a correta
        $email    = $_POST["email"];
        $telefone = $_POST["telefone"]; 

        
        $inserir = "INSERT INTO tb_clientes "; //lembre-se q esses espaços no final são importantes pq este .= se trata de uma concatenação
        $inserir .= "(nome, email, telefone) ";
        $inserir .= "VALUES ";
        $inserir .= "('$nome', '$email', '$telefone')"; //var telefone sem aspas pq é um número do tipo inteiro, foi classificado como int se colocar aspas dará erro

        $operacao_inserir = mysqli_query($link, $inserir);
        if(!$operacao_inserir) {
            die("Error no banco de dados ou email já cadastrado");
        }

     } 
/*
     session_start();
    include_once 'conexao.php';
   
    $nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);//number_int só aceita números inteiros, a única coisa q ele deixa passar é o sinal de + e -
 
 
 /**Verificação pra que o e-mail não se repita, já estou fazendo isso lá pelo banco de dados com o UNIQUE, mas 
 * vou relembrar aqui. código abaixo:
 */
/*

 $querySelect = $link->query("select email from tb_clientes"); //selecionando o campo e-mail da tabela tb_clientes
 $array_emails = []; //campo vazio armazenado na var
  

 while($emails = $querySelect->fetch_assoc()):        //$emails = tem acesso aos emails do banco de dados pq eu transformei a var $querySelect em array associativo, e dessa forma consigo pegar item por item  
    $emails_existentes = $emails['email'];           //$emails_existentes = todos os emails estão dentro dessa var, $emails['email']; = acessando um item do array, que nesse caso é o 'email'
    array_push($array_emails, $emails_existentes ); //o array_push está colocando a var($emails_existentes) com os emails cadastrados dentro da var($array_emails)
                                                   
 endwhile;
 
 if(in_array($email,$array_emails)):   //$email = a var q está recebendo os emails via post, $array_emails = está recebendo os emails já cadastrados no banco de dados 
                                      //in_array — Checa se um valor existe em um array 
     $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse e-mail'."</p>";
     header("location:../");   
 
else:
    $queryInsert = $link->query("insert into tb_clientes values(default, '$nome', '$email', '$telefone')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."</p>";
        header("location:../");

    endif;
endif; 

$queryInsert = $link->query("INSERT INTO tb_clientes VALUES (default, '$nome', '$email', '$telefone')");
$affected_rows = mysqli_affected_rows($link);

      if($affected_rows > 0):
         $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."</p>";
         header("location:../");
      endif; */

?>



    
      
