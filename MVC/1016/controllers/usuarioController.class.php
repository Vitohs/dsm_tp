<?php
    Class usuarioController
    {
        public function listar()
        {
            echo "<h2>estou na classe usuarioController e executei o metodo listar()<h2>";
            //busca de dados no banco de dados
            require_once "models/usuario.class.php";
            $usuario = new Usuario();
            $retorno = $usuario->Buscar_todos_usuarios();
            //mostrando os dados na view
            require_once "views/listar_usuarios.php";
        }
        public function inserir()
        {
            echo "Estou no inserir";
        }
        public function alterar()
        {
            echo "Estou no Alterar";
        }
        public function excluir()
        {
            echo "Estou no Excluir";
        }
    }