<?php

if ($_GET['id']) {

    require_once "model/conexao.php";
    require_once "model/usuario.class.php";
    require_once "dao/usuario.dao.php";

    try {
        $DAO = new DAOUsuario();
        $usuario = $DAO->buscarPorId($_GET['id']);
       
    } catch (Exception $erro) {
        $msg = $erro->getMessage();
    }
}
?>