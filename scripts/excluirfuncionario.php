<?php 
    session_start();

    # including the config app
    include "../config.php";
    
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $id = (int)$_GET['id'];
    $funcionario = mysqli_query($conn, "SELECT * FROM funcionarios WHERE id = '$id'");

    
    if(mysqli_query($conn, "DELETE FROM funcionarios WHERE id = '$id'")) {
        $_SESSION['msg'] = "<p class='success'>Funcionário apagado com sucesso</p>";
        header("Location:../");
    } else {
        $_SESSION['msg'] = "<p class='error'>Algo correu mal</p>";
        header("Location:../");
    }
?>