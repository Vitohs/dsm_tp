<?php
    class Cliente
    {
        // atributos da classe
        public function __construct(
        public int $id_cliente = 0,
        public string $nome = "",
        public string $sobrenome = "",
        public string $cpf = "" ){}

        // métodos
        public function inserir($conexao)
        {
            $sql = "insert into cliente (nome,sobrenome,cpf) values(?,?,?)";
            $stm = $conexao->prepare($sql);
            $stm->bindValue(1,$this->nome);
            $stm->bindValue(2,$this->sobrenome);
            $stm->bindValue(3,$this->cpf);
            $stm->execute();
            return "Cliente cadastrado com sucesso";   
        }
        // abrir aqui uma conexao para o banco de dados
        public function conexao()
        {
        // criando uma variavel que vai receber dados do banco
           $parametros = "mysql:host=localhost;dbname=exemplo;charset=utf8mb4";
        //    aqui crio a conexao, o PDO é crucial para abrir, o root é usuario, depois a senha
           $conexao = new PDO($parametros, "root" , "" ); 
        //    oq a function vai retornar ae
           return $conexao;
        }
        public function buscar($conexao)
        {
            $sql = "select * from cliente";
            $stm = $conexao->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
?>