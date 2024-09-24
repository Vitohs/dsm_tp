<?php
        //  truw
	if($_GET)
	{
		require_once "Cliente.class.php";

		$obj = new Cliente(0,$_GET["nome"], $_GET["sobrenome"], $_GET["cpf"]);

		// abrindo os trabalhos
		$conect = $obj->conexao();

		// $obj->nome = $_GET["nome"]; 
		// $obj->sobrenome = $_GET["sobrenome"];
		// $obj->cpf=$_GET["cpf"];

		$msg = $obj->inserir($conect);

		echo $msg;

		// echo "<pre>";
		// var_dump($obj);
		// echo "</pre>";

		// echo "<h1 style='color:blue'>O nome é " . $_GET["nome"] . "</h1><br>";
		
		// echo "O Sobrenome é {$_GET["sobrenome"]}<br>";

		// echo "O CPF é {$_GET["cpf"]}<br>";
	}
	    // to redirecionando para SE eu inicializar aki direto e ele nao tiver nada, volta pro html pra cadastrar
	else
	{
		header("location:index.html");
	}
	// gostei mais da forma html ent vou deixar baixo no momento
	// header("location:index.html");
	// finalizaria aqui e passaria mais nada
	// die()
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>okay</title>
</head>
<body>
	<a href="index.php">
		<h1>
			vizualize em tabela
		</h1>
	</a>
</body>
</html>