    <?php
    include_once("model/clsCidade.php");
    include_once("dao/clsCidadeDAO.php");
    include_once("dao/clsConexao.php");
    ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Clientes</title>
</head>

<body>
    <h1>Cidades</h1>

    <form method="POST" action="controller/salvarCliente.php?inserir">
        <label>Salário: </label>
        <label>Slário: </label>
        <input type="text" placeholder="Digite o nome da cidade..." name="txtNome" />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="limpar" />

    </form>
    <hr>

    <?php
    

    $cidades = CidadeDAO::getCidades();
        if(count($cidades) == 0){
            
            echo "<h1>Nenhuma cidade cadastrada!<h1>";
        }else{
            
        ?>

    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    
    
        

        <?php

        foreach($cidades as $cid){
            $id = $cid->id;
            $nome = $cid->nome;
            echo " <tr>
                    <td>$id</td>
                    <td>".$cid->nome."</td>
                    <td><button>Editar</button></td>
                    <td><a href='controller/salvarCidade.php?excluir&id=$id'><button>Excluir</button></a></td>
                </tr>";


        }
        ?>
        </table>
        <?php
    }
    
        
       /* <tr>
            <td>1</td>
            <td>Itati</td>
            <td><button>Editar</button></td>
            <td><button>Excluir</button></td>
        </tr>;

        <tr>
            <td>2</td>
            <td>Tangamandápio</td>
            <td><button>Editar</button></td>
            <td><button>Excluir</button></td>
        </tr>*/
    
    if (isset($_REQUEST["nomeVazio"])) {

    if (isset($_REQUEST["cidadeExcluida"])) {
        echo "<script>alert('Cidade excluida com sucesso!');</script>";
    }
}

    if (isset($_REQUEST["nome"])) {
        $nome = $_REQUEST["nome"];
        echo "<script> alert('Cidade $nome cadastrada com sucesso!');</script>";
    }

?>

</body>

</html>