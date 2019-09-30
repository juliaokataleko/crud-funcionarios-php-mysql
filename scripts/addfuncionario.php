<?php
session_start();

# including the config app
include "../config.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$salario = (int)$_POST['salario'];
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);

# echo "Nome: $nome<br>Email: $email<br>Telefone: $telefone";
$add_funcionarios = "INSERT INTO `funcionarios` (`id`, `nome`, `email`, `endereco`, `telefone`, 
`genero`, `salario`, `cargo`, `data_registo`, `data_actualizacao`) 
VALUES (NULL, '$nome', '$email', '$endereco', 
'$telefone', '$genero', '$salario', '$cargo', CURRENT_TIMESTAMP, NULL)";

$query_result = mysqli_query($conn, $add_funcionarios);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p class='success'>Funcionário registado com sucesso</p>";
    header("Location:../");
} else {
    $_SESSION['msg'] = "<p class='error'>Algo correu mal</p>";
    header("Location:../");
}
    