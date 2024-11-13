<?php
class Conexao
{
    public function __construct(protected $db = null)
    {
        //aqui depende do banco como eu tenho sql vou de mysql
        $parametros = "mysql:host=localhost;dbname=lojadmvc";
        //tente
        try
        {
            //PDO é um coringa ele vai abrir qualquer persistencia possivel
            //abrindo conexão             usuario senha
            $this->db = new PDO($parametros,"root","");
        }
        //se nao der saia e leve essa mensagem
        //essa eception do pdo fala oq pode ter dado ruim
        catch(PDOException $e)
        {
            echo $e->getCode();
            echo $e->getMessage();
        }
    }
    //php 7
    // protected $db = null;
    // $parametros = "mysql;host=localhost;dbname=lojadmvc";
    // //tente
    // try
    // {

    // }
    // //se nao der saia e leve essa mensagem
    // catch()
    // {

    // }
}