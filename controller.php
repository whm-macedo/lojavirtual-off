<?php 

    require "includes/autoload.php";
    // capturando os dados da url
    // Ex.: http://localhost/lojavirtual/admin/departamento/cadastrar/listar
    // model = departamento & action=listar
    // começa a contar do adin, pois o htaccess está na raiz

    $router = $_GET['model'].$_GET['action'];
    // router = departamentolistar

    $view = "";

    switch($router){

        case 'categoriacadastrar':
            
            new \LOJA\Actions\CategoriaCadastrar;
            $view = "form-categoria.php";
            break;

        case 'categorialistar':
            include "actions/listar-categoria.php";
            $view = "lista-categoria.php";
            break;
            // admin/cliente/listar
        case 'clientelistar':
            include "actions/listar-clientes.php";
            $view = "lista-cliente.php";
            break;
            // admin/cliente/visualizar/:id
        case 'clientevisualizar':
            include "actions/buscar-cliente.php";
            $view = "visualiza-cliente.php";
            break;

        case 'produtocadastrar':
            include "actions/cadastrar-produto.php";
            $view = "form-produto.php";
            break;

        case 'produtolistar':
            include "actions/listar-produto.php";
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
            echo "default";
        break; 
    }

    include "view/header.php";
    include "view/{$view}";
    include "view/mensagem.php";
    include "view/footer.php";
?>