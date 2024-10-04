<?php
require_once "pessoa.class.php";
require_once "aluno.class.php";
require_once "instrutor.class.php";
require_once "treino.class.php";
require_once "aparelho.class.php";
require_once "telefone.class.php";

$aparelho1 = new Aparelho("Supino",array());

$aluno1 = new ALuno("Nenhuma","07/03/2006",array(),"Robson","123-456-789-11","14","99165-6976");
// echo "<pre>";
// var_dump($aluno1);
// echo "</pre>";
$instrutor1 = new Instrutor("Rei da essência","Jorlan","123-456-789-10","69","12345-6789");

$treino = new Treino(3,8,$instrutor1,$aluno1,$aparelho1);

echo "<h1>Treino da essência</h1>";
echo "<h3>Dados do Aluno</h3>";
echo "Nome do Aluno: {$treino->getAluno()->getNome()}<br>";
echo "CPF do Aluno: {$treino->getAluno()->getCpf()}";
echo "<h4>Telefone do aluno</h4>";
foreach($treino->getAluno()->getTel() as $telefone)
{
    echo "Telefone: ({$telefone->getDDD()}) {$telefone->getNum()}<br>";
}
echo "Restrições: {$treino->getAluno()->getRestr()}<br>";
echo "Data de nascimento: {$treino->getAluno()->getDN()}<br>";
//instrutor
echo "<h3>Instrutor</h3>";
echo "Nome do Instrutor: {$treino->getInstrutor()->getNome()}<br>";
echo "CPF do Instrutor: {$treino->getInstrutor()->getCpf()}<br>";
echo "Especialidade do Instrutor: {$treino->getInstrutor()->getEsp()}<br>";
echo "<h4>Telefone do aluno</h4>";
foreach($treino->getInstrutor()->getTel() as $telefone)
{
    echo "Telefone: ({$telefone->getDDD()}) {$telefone->getNum()}<br>";
}
echo "<h4>Dados dos aparelhos</h4>";
echo "Aparelho: {$treino->getAparelho()->getDesc()}<br>";
echo "Quantidade de Séries: {$treino->getSerie()}<br>";
echo "Quantidade de Repetições: {$treino->getRep()}<br>";
?>