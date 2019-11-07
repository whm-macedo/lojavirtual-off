<?php

if ($_GET['id']) {

    require_once "model/conexao.php";
    require_once "model/fornecedor.class.php";
    require_once "dao/fornecedor.dao.php";

    try {
        $DAO = new DAOFornecedor();
        $fornecedor = $DAO->buscarPorId($_GET['id']);
       
    } catch (Exception $erro) {
        $msg = $erro->getMessage();
    }
}
?>