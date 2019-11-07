<?php
require_once "model/conexao.php";
require_once "dao/categoria.dao.php";

$obj = new DAOCategoria();
$lista = $obj->listaCategoria();

?>