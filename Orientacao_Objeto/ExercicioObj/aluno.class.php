<?php

class Aluno extends Pessoa
{
    public function __construct(private string $restricao = "", private string $data_nasc = "",private array $aparelho = array(),$nome = "",$cpf = "",$ddd = "", $numero = "", $pessoa = null)
    {
        parent :: __construct($nome,$cpf,$ddd,$numero,$pessoa);
    }

    public function getAparelho()
    {
        return $this->aparelho;
    }
    public function setAparelho($ap)
    {
       $this->aparelho[] = $ap;
    }

    public function getRestr()
    {
        return $this->restricao;
    }
    public function setRestr($rr)
    {
        $this->restricao = $rr;
    }

    public function getDN()
    {
        return $this->data_nasc;   
    }

    public function setDN($dn)
    {
        $this->data_nasc = $dn;   
    }
}
?>