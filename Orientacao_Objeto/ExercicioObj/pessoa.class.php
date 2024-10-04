<?php

class Pessoa
{
    public function __construct(protected string $nome = "", protected string $cpf = "", $ddd,$numero,$pessoa, protected array $tel = array())
    {
        $this->tel[] = new Telefone($ddd,$numero,$pessoa);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nomes)
    {
        $this->nome = $nomes;
    }


    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cp)
    {
        return $this->cpf = $cp;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($ddd,$numero,$pessoa)
    {
        $this->tel[] = new Telefone($ddd,$numero,$pessoa);
    }
}