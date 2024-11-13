<?php
//contexto se eu recebo algum parametro eu redireciono logo de cara para rotas distintas
    if($_GET)
    {
        //outras rotas http://localhost/index.php?controle=usuarioControllers&metodo=listar

        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
        require_once "Controllers/" . $controle . ".class.php";
        //instanciando a classe
        $obj = new $controle();
        $obj->$metodo();
    }
    else
    {
        //rota inicial http://localhost:8000
        require_once "controllers/InicioController.class.php";
        //instanciando a classe
        $obj = new InicioController();
        $obj->Inicio();
    }


?>