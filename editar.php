<?php include_once 'includes/header.incluir.php' ?>
<?php include_once 'includes/menu.incluir.php' ?>


<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5>
    </div>

</div>

<?php
    include_once 'banco_de_dados/conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);//pegar com filtros é a maneira correta de acessar esses dados, essa maneira não é tao usada -> $id = $_GET["id"]
    //$querySelect = $link->("select * from tb_clientes where id='$id' "); //essa linha não foi aceita nesse código]

    $_SESSION['id'] = $id ; //guardando o id de cada item a ser editado ou ecluido na var $_SESSION

    $query_ = ("SELECT * FROM tb_clientes where id='$id'");
    $connectt = mysqli_query($link, $query_);

    while($registros = mysqli_fetch_assoc($connectt)):
        $id          = $registros["id"];
        $nome        = $registros["nome"];
        $email       = $registros["email"];
        $telefone    = $registros["telefone"];  
    endwhile;     

?>


<!--Formulário de cadastro-->
<div class="row container">
      <p>&nbsp;</p> <!--Acrescentará uma linha vazia ou um espaço-->
      <form action="banco_de_dados/update.php" method="POST" class="col s12">
        <fieldset class="formulario" style="padding: 75px">
          <legend><img src="img/avatar.jpg" alt="[imagem]" width="100"></legend>
          <h5 class="light center">Cadastro de clientes</h5>
    

          <!--Campo Nome-->
          <div class="input_field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
            <label for="nome">Nome do Cliente</label>
          </div>  

            <!--Campo E-mail-->
          <div class="input_field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email"  value="<?php echo $email ?>" maxlength="50" required>
            <label for="email">E-mail do Cliente</label>
          </div>  

            <!--Campo Telefone-->
          <div class="input_field col s12">
            <i class="material-icons prefix">phone</i>
            <input type="tel" name="telefone" id="telefone"  value="<?php echo $telefone ?>" maxlength="15">
            <label for="tel">Telefone do Cliente</label>
          </div>

          <!--Botôes-->
          <div class="input-field col s12">
            <input  type="submit" value="Alterar" class="btn blue">
            <a href="consultas.php" class="btn red">Cancelar</a>
          </div>

        </fieldset>
      </form>
    </div>



<?php include_once 'includes/footer.incluir.php' ?>