<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Clientes</title>
</head>

<body>
    <h1>Clientes</h1>

    <form method="POST" action="../controller/clienteController.php?action=inserirCidade">
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome do cliente..." name="txtNome" />
        <br>
        <input type="date"  name="txtNome" />
        <br>
        <label>Salário: </label>
        <input type="text" placeholder="Salário" name="txtSalário" />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <hr>

    <?php
        require_once('consultaClientes.php');

        if( isset($_REQUEST["nomeVazio"])){
            echo "<script> alert('Todos os campos devem ser preenchidos!'); </script>";
        }

        if( isset($_REQUEST["nome"])){
            $nome = $_REQUEST["nome"];
            echo "<script> alert('Cliente $nome cadastrada com sucesso!'); </script>";
        }

        if( isset($_REQUEST["novoNome"])){
            $novoNome = $_REQUEST["novoNome"];
            echo "<script> alert('Cliente $novoNome foi atualizada com sucesso!'); </script>";
        }

        if( isset($_REQUEST["excluido"])){
            echo "<script> alert('Cliente excluida com sucesso!'); </script>";
        }

        if( isset($_REQUEST["erro"])){
            echo "<script> alert('Erro! Não foi possível cadastrar!'); </script>";
        }
    ?>

</body>

</html>