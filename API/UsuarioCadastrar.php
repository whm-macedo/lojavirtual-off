<?php
namespace LOJA\API;
use LOJA\Model\Usuario;
use LOJA\DAO\DAOUsuario;

class UsuarioCadastrar{

    public $msg;

    function __construct(){

if ($_POST) {
    
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
    }
}
?>