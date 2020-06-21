<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <nav class="blue-grey">
        <div class="nav-wrraper container">
          <div class="brand-logo light">Sistema de cadastro</div>
           <ul class="right">
             <li><a href=""><i class="material-icons left">search</i>Consultas</li>
           </ul>
           <ul class="right">
            <li><a href=""><i class="material-icons left">account_circle</i>Cadastro</li>
          </ul>
     </div>
    </nav>

    <!--Formulário de cadastro-->
    <div class="row container">
      <p>&nbsp;</p> <!--Acrescentará uma linha vazia ou um espaço-->
      <form action="banco_de_dados/create.php" method="POST" class="col s12">
        <fieldset class="formulario">
          <legend><img src="img/avatar.jpg" alt="[imagem]" width="100"></legend>
          <h5 class="light">Cadastro de clientes</h5>

          <!--Camo Nome-->
          <div class="input_field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
            <label for="nome">Nome do Cliente</label>
          </div>  

            <!--Camo E-mail-->
          <div class="input_field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email" maxlength="50" required autofocus>
            <label for="email">E-mail do Cliente</label>
          </div>  

            <!--Camo Telefone-->
          <div class="input_field col s12">
            <i class="material-icons prefix">phone</i>
            <input type="tel" name="telefone" id="telefone" maxlength="15" required>
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





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="materialize/js/jquery-3.5.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <!--Inicialização Jquery-->
      <script type="text/javascript">
      $(document).ready(function(){

      });
      </script>
    </body>
  </html> 

