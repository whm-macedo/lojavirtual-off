<?php
namespace LOJA\includes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: http://localhost/lojavirtual-off/login/adm");
        }
    }
}