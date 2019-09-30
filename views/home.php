<?php 
    require_once 'views/partials/header.php'; 
?>
    <h1>Lista de Funcionários</h1>
<?php

    # Receber número da página
    $pagina_actual = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);

    $pagina = (!empty($pagina_actual)) ? $pagina_actual : 1;
    # Quantidade por página
    $quantidade_por_pg = 10;

    # inicio da listagem
    $inicio = ($quantidade_por_pg * $pagina) - $quantidade_por_pg;

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
    if(isset($_GET['query'])) {
        $query = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);
        $funcionarios = "SELECT * FROM funcionarios WHERE nome LIKE '%$query%' OR email LIKE '%$query%' OR telefone LIKE '%$query%' OR endereco LIKE '%$query%' OR salario LIKE '%$query%' LIMIT $inicio, $quantidade_por_pg";
    } else {
        $funcionarios = "SELECT * FROM funcionarios LIMIT $inicio, $quantidade_por_pg";
    }
    

    $resultado = mysqli_query($conn, $funcionarios);

    if(mysqli_num_rows($resultado) == 0) {
        echo "<h3>Nenhum resultado encontrado!</h3>";
    }
?>
<form action="?page=pesquisar" method="get">
    <input type="search" placeholder="Pesquisar..." name="query" id="" 
    <?php if(isset($_GET['query'])) echo "value=$query"; ?> > <button type="submit">Pesquisar</button>
</form>
<br>
<table>
    <tr class="theader">
        <td>ID:</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Endereço</td>
        <td>Salário</td>
        <td>Cargo</td>
        <!--<td>Telefone</td>-->
        <td id="accoes">Acções</td>
    </tr>
<?php
    while($row_funcionario = mysqli_fetch_assoc($resultado)) {
        $id = $row_funcionario['id'];
        echo "<tr>";
        echo "<td>".$row_funcionario['id']."</td>";
        echo "<td class='nome'><a href='?page=funcionario&id=$id'>".$row_funcionario['nome']."</a></td>";
        echo "<td>".$row_funcionario['email']."</td>";
        echo "<td>".$row_funcionario['endereco']."</td>";
        echo "<td>".moedaMonetaria($row_funcionario['salario'])."</td>";
        echo "<td>".$row_funcionario['cargo']."</td>";
        # echo "<td>".$row_funcionario['telefone']."</td>";
        echo "
        <td>
            <a href='?page=editform&id=".$row_funcionario['id']."'>Editar</a>
            <a class='excluir' href='/scripts/excluirfuncionario.php?id=".$row_funcionario['id']."'>Excluir</a>
        </td>";
        echo "</tr>";
    } 
?>
</table>
<?php 
    # mostrando a paginação
    $result_pg = mysqli_query($conn, "SELECT COUNT(id) AS num_result FROM funcionarios");
    $row_pg = mysqli_fetch_assoc($result_pg);
    $quant_pg = ceil($row_pg['num_result'] / $quantidade_por_pg);
    $max_links = 2;

    echo "<div class='pagination'>";
    echo '<a href="?p=1">Primeira</a>';
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina -1; $pag_ant++) {
        if($pag_ant >= 1) {
            echo "<a href=?p=$pag_ant>$pag_ant</a>";
        }
    }
    echo "<a id='active'>$pagina</a>";
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
        if($pag_dep <= $quant_pg) {
            echo "<a href=?p=$pag_dep>$pag_dep</a>";
        }
    }
    echo "<a href=?p=$quant_pg>Última</a>";
    echo "</div>";

    # the footer section load
    require_once 'views/partials/footer.php'; 
?>