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
<<<<<<< HEAD
    <h1>Clientes</h1>

    <form method="POST" action="controller/salvarCliente.php?inserir">
        <label>Nome: </label>
        <input type="texto" placeholder="Digite o nome da cidade..." name="txtNome" />
        <Br>
        <label>Data de Nascimento: </label >
        <input type="data"  nome="txtNascimento" />
        <Br>

        <label>Salário: </label>
        <input type="número" nome="txtSalario" />
        <br>

        <label>Cidade: </label>
        <select name="txtCidade">
            <option valor="0">Selecione...</option>
    <?php
          $cidades = CidadeDAO::getCidades(); 
          foreach($cidades as $cid){
             echo '<valor da opção="'.$Cid->id..'">'$Cid->nome .'</option>';
          }

        ?>
        <!-- <option value="1">Itati</option> -->
        </select>
        <br>

        <input type="Enviar" value="Salvar" />
        <input type="repor" value="Limpar" />
=======
    <h1>Cidades</h1>

    <form method="POST" action="controller/salvarCliente.php?inserir">
        <label>Salário: </label>
        <label>Slário: </label>
        <input type="text" placeholder="Digite o nome da cidade..." name="txtNome" />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="limpar" />

>>>>>>> cbc2d259b9e3a701795408bab736a725115ddb3a
    </form>
    <hr>

    <?php
    

    $cidades = CidadeDAO::getCidades();
<<<<<<< HEAD

=======
>>>>>>> cbc2d259b9e3a701795408bab736a725115ddb3a
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
<<<<<<< HEAD
        echo "<script> alert('O campo nome não pode ser vaazio!');</script>";
    }
=======
>>>>>>> cbc2d259b9e3a701795408bab736a725115ddb3a

    if (isset($_REQUEST["cidadeExcluida"])) {
        echo "<script>alert('Cidade excluida com sucesso!');</script>";
    }
<<<<<<< HEAD

=======
}
>>>>>>> cbc2d259b9e3a701795408bab736a725115ddb3a

    if (isset($_REQUEST["nome"])) {
        $nome = $_REQUEST["nome"];
        echo "<script> alert('Cidade $nome cadastrada com sucesso!');</script>";
    }

?>

</body>

</html>