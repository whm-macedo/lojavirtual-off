<?php
// Aqui temos a inclusão da conexão, para inicar a comunicacao ao banco de dados antes de qualquer coisa
require_once 'admin/model/conexao.php';
// Aqui temos temos a inclusão do cliente, com os métodos get e set, com reforço na segurança e padrão de projeto
require_once 'admin/model/cliente.class.php';
// Aqui temos a execução do cadastro com o pdo
require_once 'admin/dao/cliente.dao.php';

if ($_POST) {
    try {
        $obj = new Cliente();
        $obj-> setNome($_POST['nome']);
        $obj-> setTelefone($_POST['telefone']);
        $obj-> setEmail($_POST['email']);
        $obj-> setCpf($_POST['cpf']);
        $obj-> setRua($_POST['rua']);
        $obj-> setComplemento($_POST['complemento']);
        $obj-> setCep($_POST['cep']);
        $obj-> setUf($_POST['uf']);
        $obj-> setBairro($_POST['bairro']);

        $DAO = new DAOCliente();
        $msg = $DAO->cadastrar($obj);

    } catch (Exception $e) {
        $msg = $e->getMessage();
    }
}

?>