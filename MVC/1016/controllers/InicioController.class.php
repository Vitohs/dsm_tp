<?php
    class InicioController
    {
        public function Inicio()
        {
            echo "<h2>Estou na classe iniciocontroller e executei o metodo inicio.</h2>";
            require_once "views/menu.html";
        }
    }