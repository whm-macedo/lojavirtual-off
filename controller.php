<?php 

    require "includes/autoload.php";
    // capturando os dados da url
    // Ex.: http://localhost/lojavirtual/admin/departamento/cadastrar/listar
    // model = departamento & action=listar
    // começa a contar do adin, pois o htaccess está na raiz

    $router = $_GET['model'].$_GET['action'];
    // router = departamentolistar

    $view = "";

    // config
        $url = "http://localhost/lojavirtual-off";

    switch($router){

        case 'categoriacadastrar':
            
            $obj = new \LOJA\API\CategoriaCadastrar;
            $msg = $obj->msg;
            $view = "form-categoria.php";
            break;

        case 'categorialistar':

            $obj = new \LOJA\API\CategoriaListar;            
            $lista = $obj->lista;
            $view = "lista-categoria.php";
            break;

        case 'categoriavisualizar':
            $obj = new \LOJA\API\CategoriaVisualizar; 
            $categoria = $obj->dados;
            $view = "visualiza-categoria.php";
            break;

        case 'clientecadastrar':
        
            $obj = new \LOJA\API\ClienteCadastrar;
            $msg = $obj->msg;
            $view = "form-cliente.php";
            break;


            // admin/cliente/listar
        case 'clientelistar':
            $obj = new \LOJA\API\ClienteListar;            
            $lista = $obj->lista;
            $view = "lista-cliente.php";
            break;

            // admin/cliente/visualizar/:id
        case 'clientevisualizar':
           $obj = new \LOJA\API\ClienteVisualizar; 
            $cliente = $obj->cliente;
            $view = "visualiza-cliente.php";
            break;

        case 'produtocadastrar':
        
            $obj = new \LOJA\API\ProdutoCadastrar;
            $msg = $obj->msg;
            $obj2 = new \LOJA\API\CategoriaListar;                ;
            $lista = $obj2->lista;
            $view = "form-produto.php";
            break;
    

        case 'produtolistar':
            $obj = new \LOJA\API\ProdutoListar;            
            $lista = $obj->lista;
            $view = "lista-produto.php";
            break;


        case 'usuariocadastrar':
            include "actions/cadastrar-usuarios.php";
            $view = "form-usuario.php";
            break;

        case 'usuariolistar':
            include "actions/listar-usuario.php";
            $view = "lista-usuario.php";
            break;

        case 'usuariovisualizar':
            include "actions/buscar-usuarios.php";
            $view = "visualiza-usuario.php";
            break;

        case 'fornecedorcadastrar':
            include "actions/cadastrar-fornecedor.php";
            $view = "form-fornecedor.php";
            break;

        
        case 'fornecedorlistar':
            include "actions/listar-fornecedor.php";
            $view = "lista-fornecedor.php";
            break;

        case 'fornecedorvisualizar':
            include "actions/buscar-fornecedor.php";
            $view = "visualiza-fornecedor.php";
            break;

        default:
        $view = "home.php";
        break; 
    }

  
    include "view/{$view}";
  
?>