<?php
	class CategoriaController
	{
		public function listar()
		{
			$categoriaDAO = new CategoriaDAO();
			$retorno = $categoriaDAO->BuscarTodas();
			require_once "views/listarcategorias.php";
		}
		public function inserir()
		{
			$msg = "";
			if($_POST)
			{
				if(empty($_POST["descritivo"]))
				{
					$msg = "Lembrei daquela sexta-feira";
				}
				else
				{
					//salvar no banco de dados
					$categoria = new Categoria(descritivo:$_POST["descritivo"]);
					$categoriaDAO1 = new CategoriaDAO();
					$retorno = $categoriaDAO1->inserir($categoria);
					header("location:/lojaMVC/categoria");
				}
			}
			require_once "views/form_categoria.php";
		}
		public function excluir()
		{
			if(isset($_GET["id"]))
			{
				$categoria2 = new Categoria($_GET["id"]);
				$categoriaDAO = new CategoriaDAO();
				$retorno = $categoriaDAO->excluir_categoria($categoria2);
				header("location:/lojaMVC/categoria?msg=$retorno");
			}
		}
		public function alterar()
		{
			$msg = "";
			if($_POST)
			{
				if(mepty($_POST["descritivo"]))
				{
					$msg = "por favor preencha o descritivo da categoria";
				}	
			}
			else
			{
				//alterar o registro no banco
				$categoria = new Categoria($_POST["idcategoria"]);
				$categoriaDAO = new CategoriaDAO();
				$retorno = $categoriaDAO->Alterar($categoria);
				header("location:/lojaMVC/categoria?msg=$retorno");
			}
			if(isset($_GET["id"]))
			{
				$categoria2 = new Categoria($_GET["id"]);
				$categoriaDAO = new CategoriaDAO();
				$retorno = $categoriaDAO->BuscarUma($categoria2);
			}
			require_once "views/edit_categoria.php";
		}
	}
?>