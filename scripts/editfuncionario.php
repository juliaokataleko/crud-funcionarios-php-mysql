<?php
session_start();

# including the config app
include "../config.php";

$id = (int)$_POST['id'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$salario = (int)$_POST['salario'];
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);

# echo "Nome: $nome<br>Email: $email<br>Telefone: $telefone";
$add_funcionarios = "UPDATE `funcionarios` SET `nome` = '$nome', `email` = '$email', 
`endereco` = '$endereco', `telefone` = '$telefone', `genero` = '$genero', `salario` = '$salario', 
`cargo` = '$cargo', 
`data_actualizacao` = CURRENT_TIMESTAMP WHERE `funcionarios`.`id` = '$id';";

if(mysqli_query($conn, $add_funcionarios)) {
    $_SESSION['msg'] = "<p class='success'>Funcionário actualizado com sucesso</p>";
    header("Location:../");
} else {
    $_SESSION['msg'] = "<p class='error'>Algo correu mal</p>";
    header("Location:../");
}
    