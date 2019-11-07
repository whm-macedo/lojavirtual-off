<?php
namespace LOJA\Actions;
use LOJA\Model\Categoria;
use LOJA\DAO\DAOCategoria;

class CategoriaCadastrar{

    function __construct(){

if ($_POST) {
     
      try {
        $cadastrar = new Categoria();
        $cadastrar->setNome($_POST['nome']);
        

        $DAO = new DAOCategoria;
        $msg = $DAO->cadastrarCategoria($cadastrar);

    } catch (Exception $erro) {
        $msg = $erro->getMessage();
    }
}
}
}
?>