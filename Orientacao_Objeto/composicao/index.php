<?php
require_once "pessoa.class.php";
require_once "endereco.class.php";

//endereco saber a quem pertence
$pessoa1 = new Pessoa("Don Vito","123.123");
$endereco1 = new Endereco("rua xv","157","9010", $pessoa1);

// echo "<pre>";
// var_dump($endereco1);
// echo "</pre>";

echo "<h1>Endereco</h1>";
echo "Logradouro {$endereco1->getLog()}<br>";
echo "Logradouro {$endereco1->getNum()}<br>";
echo "Logradouro {$endereco1->getCep()}<br>";

echo "<h3>O endereço pertence a</h3>";
echo "Nome: {$endereco1->getPessoa()->getNome()}<br>";
echo "CPF: {$endereco1->getPessoa()->getCpf()}<br>";

//Pessoa quais são seus endereços
$pessoa2 = new Pessoa("Yuri-san", "157","frei galvão","244","17210991");
// ai papai, to botano mais um endereço para o nosso mestre yuri-san
// entendi, que top kk slc peguei a visão esquece
$pessoa2->setEndereco("Amaral gurgel","157","1717722",null);
// echo "<pre>";
// var_dump($pessoa2);
// echo "</pre>";
echo "<h3>Dados da pessoa</h3>";
echo "Nome: {$pessoa2->getNome()}<br>";
echo "CPF: {$pessoa2->getCpf()}<br>";
echo "<h4>Endereços</h4>";
//to começando a entender foreach consegui fazer sem olhar a professora, interessante esse laço é bacana, vou aposentar o While assimkk
// o do php é diferente do java script (jayÈs.. jkkkk) ou eu to maluco ?, ta me confundindo um pouco
foreach ($pessoa2->getEndereco() as $endereco)
{
    echo "Logradouro: {$endereco->getLog()}<br>";
    echo "Numero: {$endereco->getNum()}<br>";
    echo "CEP: {$endereco->getCep()}<br>";
    echo "<br>";
}