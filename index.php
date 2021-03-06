<?php include_once 'includes/header.incluir.php' ?>
<?php include_once 'includes/menu.incluir.php' ?>


    <!--Formulário de cadastro-->
    <div class="row container">
      <p>&nbsp;</p> <!--Acrescentará uma linha vazia ou um espaço-->
      <form action="banco_de_dados/create.php" method="POST" class="col s12">
        <fieldset class="formulario" style="padding: 75px">
          <legend><img src="img/avatar.jpg" alt="[imagem]" width="100"></legend>
          <h5 class="light center">Cadastro de clientes</h5>
         
          
          <!--< ?php 
              if(isset($_SESSION['msg'])):
                echo $_SESSION['msg'];
                  session_unset();//para limpar A SESSÃO, EVITA Q ESSA MSG FIQUE SENDO MOSTRADA O TEMPO TODO AO USUÁRIO, UNSET RESETA A VAR $SESSION
              endif;
          ?>--> 

          <!--Campo Nome-->
          <div class="input_field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
            <label for="nome">Nome do Cliente</label>
          </div>  

            <!--Campo E-mail-->
          <div class="input_field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email" maxlength="50" required>
            <label for="email">E-mail do Cliente</label>
          </div>  

            <!--Campo Telefone-->
          <div class="input_field col s12">
            <i class="material-icons prefix">phone</i>
            <input type="tel" name="telefone" id="telefone" maxlength="15">
            <label for="tel">Telefone do Cliente</label>
          </div>

          <!--Botôes-->
          <div class="input-field col s12">
            <input type="submit" value="cadastrar" class="btn blue">
            <input type="reset" value="limpar" class="btn red">
          </div>

        </fieldset>
      </form>
    </div>

    <?php include_once 'includes/footer.incluir.php' ?>




     

