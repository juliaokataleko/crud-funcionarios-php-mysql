<?php 
    require_once 'views/partials/header.php'; 
?>
<h1>Adicionar funcionário</h1>
<form action="scripts/addfuncionario.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" placeholder="Nome" id="nome">
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="Email" id="email">
    <label for="endereco">Endereço</label>
    <input type="text" name="endereco" placeholder="Endereço" id="endereco">
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" placeholder="Telefone" id="telefone">
    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" placeholder="Cargo" id="cargo">
    <label for="salario">Salário</label>
    <input type="text" name="salario" placeholder="Salário" id="salario">
    <hr>
    <br> <h1>Gênero</h1>
    
    <input type="radio" name="genero" id="" value="Femenino">
    <label for="genero">Femenino</label> 
    <input type="radio" name="genero" id="" value="Masculino">
    <label for="genero">Masculino</label> 
    <button id="regButton" type="submit">Registar</button>
</form>
<?php require_once "views/partials/footer.php"; ?>