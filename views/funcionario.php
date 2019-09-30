<?php 
    require_once 'views/partials/header.php'; 
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $id = (int)$_GET['id'];
    $funcionario = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM funcionarios WHERE id = '$id'"));

?>
<h1>Dados de: <?=$funcionario['nome'];?></h1>
<table>
    <tr>
        <td style="width: 140px;">Nome: </td>
        <td><?=$funcionario['nome'];?></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><?=$funcionario['email'];?></td>
    </tr>
    <tr>
        <td>Telefone: </td>
        <td><?=$funcionario['telefone'];?></td>
    </tr>
    <tr>
        <td>Endereço: </td>
        <td><?=$funcionario['endereco'];?></td>
    </tr>
    <tr>
        <td>Gênero: </td>
        <td><?=$funcionario['genero'];?></td>
    </tr>
    <tr>
        <td>Cargo: </td>
        <td><?=$funcionario['cargo'];?></td>
    </tr>
    <tr>
        <td>Salário: </td>
        <td><?=moedaMonetaria($funcionario['salario']);?></td>
    </tr>
    <tr>
        <td>Data de Entrada: </td>
        <td><?=$funcionario['data_registo'];?></td>
    </tr>
</table>
<?php require_once "views/partials/footer.php"; ?>