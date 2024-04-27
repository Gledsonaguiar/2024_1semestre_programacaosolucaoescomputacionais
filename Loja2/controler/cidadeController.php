<?php

require_once ('../model/cidadeModel.php');

class CidadeController
{

    public function consultar()
    {
        $cidade = new Cidade();
        $result = $cidade->consulta();
        return $result;
    }


    public function inserir()
    {

        $nome = $_POST["txtNome"];

        if (strlen($nome) == 0) {
            header("Location: ../view/cidades.php?nomeVazio");
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $novaCid = new Cidade();
            $novaCid->inserir($nome);
            header('Location: ../view/cidades.php?nome=' . $nome);
        } else {
            header("Location: ../view/cidades.php?erro");
        }

    }



    public function excluir()
    {
        $id = $_GET['id'];
        $excluiCidade = new Cidade();
        $excluiCidade->apagar($id);

    }

    public function handleRequest()
    {
        if (isset($_GET['action']) && $_GET['action'] == 'inserirCidade') {
            $this->inserir();
        }

        if (isset($_GET['action']) && $_GET['action'] == 'excluirCidade') {
            $this->excluir();
        }

    }

}
$CidadeController = new CidadeController();
$CidadeController->handleRequest();



