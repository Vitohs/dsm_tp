<?php
require_once "filme.class.php";
require_once "ator.class.php";
require_once "papel.class.php";

$ator1 = new Ator("Victor");
$filme1 = new Filme("Principe do Sani");
$papel = new Papel("Protagonista",$filme1,$ator1);

// echo "<pre>";
// var_dump($papel);
// echo "</pre>";
echo "<h1>Logs do filme: {$filme1->getNome()}</h1>";
echo "Nome: {$papel->getFilme()->getNome()}<br>";
echo "Nome do ator: {$papel->getAtor()->getNome()}<br>";
echo "Papel do ator: {$papel->getNome()}<br>";
?>