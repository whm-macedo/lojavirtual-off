<?php
if ($_POST) {
    require_once "model/conexao.php";
    require_once "model/categoria.class.php";
    require_once "dao/categoria.dao.php";
    try {
        $cadastrar = new Categoria();
        $cadastrar->setNome($_POST['nome']);
        

        $DAO = new DAOCategoria;
        $msg = $DAO->cadastrarCategoria($cadastrar);

    } catch (Exception $erro) {
        $msg = $erro->getMessage();
    }
}
?>