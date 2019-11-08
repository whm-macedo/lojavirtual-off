<?php
if ($_POST) {
    require_once "model/conexao.php";
    require_once "model/usuario.class.php";
    require_once "dao/usuario.dao.php";

    try {
        $cadastrar = new Usuario();
        $cadastrar->setNome($_POST['nome']);
        $cadastrar->setSenha($_POST['senha']);
        
        $DAO = new DAOUsuario;
        $msg = $DAO->cadastrarUsuario($cadastrar);

    } catch (Exception $erro) {
        $msg = $erro->getMessage();
    }
}
?>