<?php
    include_once("Dao/clsConexao.php");
    include_once("Dao/clsCidadeDAO.php");
    include_once("model/clsCidade.php");

    $Cidade = new Cidade( );
    CidadeDAO::getCidades();

?>