
<?php
if ($_POST) {
    require_once "model/conexao.php";
    require_once "model/fornecedor.class.php";
    require_once "dao/fornecedor.dao.php";

    try {
        $cadastrar = new Fornecedor();
        $cadastrar->setNome($_POST['nome']);
        $cadastrar->setCidade($_POST['cidade']);
        $cadastrar->setEstado($_POST['estado']);
        $cadastrar->setCnpj($_POST['cnpj']);
        
        $DAO = new DAOFornecedor;
        $msg = $DAO->cadastrarFornecedor($cadastrar);

    } catch (Exception $erro) {
        $msg = $erro->getMessage();
    }
}
?>