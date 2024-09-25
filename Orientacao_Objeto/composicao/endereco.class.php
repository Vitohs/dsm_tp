<?php

class Endereco
{
    // fracamente tipado
    public function __construct(private string $logradouro = "", private string $numero = "", private string $cep = "", private $pessoa = null){}
    
    // fortemente tipado
    // public function __construct(private string $logradouro = "", private string $numero = "", private string $cep = "",
    //  private Pessoa $pessoa = new Pessoa()){}

    public function getLog()
    {
        return $this->logradouro;
    }
    public function getNum()
    {
        return $this->numero;
    }
    public function getCep()
    {
        return $this->cep;
    }
    public function getPessoa()
    {
        return $this->pessoa;
    }
}