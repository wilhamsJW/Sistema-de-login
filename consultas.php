<?php include_once 'includes/header.incluir.php' ?>
<?php include_once 'includes/menu.incluir.php' ?>

<div class="row container">
   <div class="col s12">
         <h5 class="light">Consultas</h5><hr>

   <table class="striped">
      <thead>
        <tr>
            <!--Aqui temos tudo que é estático-->
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
      </thead>
      <!-- e aqui tudo que é dinâmico, vindo do banco de dados-->
    <tbody> 
        <?php 
            include_once 'banco_de_dados/read.php'; 
        ?>
      </tbody>
    </table>         
  </div>
</div>

<?php include_once 'includes/footer.incluir.php' ?>