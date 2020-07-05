<?php include_once 

'conexao.php';
$querySelect = $link->query("select * from  tb_clientes");
while($registros = $querySelect->fetch_assoc()) {
    $id       = $registros['id'];
    $nome     = $registros['nome'];
    $email    = $registros['email'];
    $telefone = $registros['telefone'];

    //Note que aqui estou enviando a ID pela url, essa ID será útil para edição e exlusão, para que o banco de dados saiba qual é Id que quer receber uma ação
    echo "<tr>";

    echo "<td>$nome</td><td>$email</td><td>$telefone</td>";

    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";

    echo "<td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";

    echo "</tr>"; 

}
?>