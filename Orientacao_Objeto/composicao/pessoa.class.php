<?php
class Pessoa
{
    public function __construct(private string $nome = "", private string $cpf = "", string $logradouro = "",string $numero = "", string $cep = "", $pessoa = null)
    {
        //irmao don vito, se liga, os bglh de cima, serve pra tu cadastrar o endereco previo
        //aqui embaixo, eu to criando um array, e ele vira um objeto, o conteudo dele vai ser os criterios que voce passou
        //pegou a viaão?, que topp
        $this->endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    //ai eu to adicionando mais coisas no array, como ja da pra saber de quem é, o objeto pessoa pode deixar null
    public function setEndereco($logradouro, $numero, $cep, $pessoa)
    {
        $this->endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);
    }
}