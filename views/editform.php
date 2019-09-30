<?php 
    require_once 'views/partials/header.php'; 
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $id = (int)$_GET['id'];
    $funcionario = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM funcionarios WHERE id = '$id'"));

?>
<h1>Editar funcionário: <?=$funcionario['nome'];?></h1>
<form action="scripts/editfuncionario.php" method="post">
<input type="hidden" name="id" value="<?=$funcionario['id'];?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" placeholder="Nome" id="nome" value="<?=$funcionario['nome'];?>">
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="Email" id="email" value="<?=$funcionario['email'];?>">
    <label for="endereco">Endereço</label>
    <input type="text" name="endereco" placeholder="Endereço" id="endereco" value="<?=$funcionario['endereco'];?>">
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" placeholder="Telefone" id="telefone" value="<?=$funcionario['telefone'];?>">
    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" placeholder="Cargo" id="cargo" value="<?=$funcionario['cargo'];?>">
    <label for="salario">Salário</label>
    <input type="text" name="salario" placeholder="Salário" id="salario" value="<?=$funcionario['salario'];?>">
    <hr>
    <br> 
    <h1>Gênero</h1>
    <input <?php if($funcionario['genero'] == 'F') echo "checked"; ?> type="radio" name="genero" id="" value="Femenino">
    <label for="genero">Femenino</label> 
    <input <?php if($funcionario['genero'] == 'M') echo "checked"; ?> type="radio" name="genero" id="" value="Masculino">
    <label for="genero">Masculino</label> 
    <button id="regButton" type="submit">Actualizar</button>
</form>
<?php require_once "views/partials/footer.php"; ?>