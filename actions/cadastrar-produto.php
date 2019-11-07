<?php
if($_POST){

    include "model/conexao.php";
    include "model/produto.class.php";
    include "model/categoria.class.php";
    include "dao/produto.dao.php";

    try {
        $produto = new produto();
        $produto->setNome($_POST['nome']);
        $produto->setPreco($_POST['preco']);
        $categoria = new Categoria();

        $categoria->setPk_categoria($_POST['categoria']);
        $produto->setCategoria($categoria);
        

        $DAO = new DAOProduto;
        $msg = $DAO->cadastrar($produto);
     

    } catch (Exception $erro) {
        $msg = $erro->getMessage();
    }

}
?>