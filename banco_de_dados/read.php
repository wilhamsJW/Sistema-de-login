<?php include_once 

'conexao.php';
$querySelect = $link->query("select * from  tb_clientes");
while($registros = $querySelect->fetch_assoc()) :
    $nome = $registros['nome'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];

    echo "<tr>";
    echo "<td>$nome</td><td>$email</td><td>$telefone</td>";
    echo "</tr>";



?>