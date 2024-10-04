<?php

class Telefone
{

    public function __construct(private string $DDD = "", private string $Numero = "", private $pessoa = null){}

    public function getDDD()
    {
        return $this->DDD;
    }
    public function getNum()
    {
        return $this->Numero;
    }
    public function getPessoa()
    {
        return $this->pessoa;
    }
    
    public function setPessoa($pepe)
    {
        $this->pessoa = $pepe;
    }
    public function setDDD($dd)
    {
        $this->DDD = $dd;
    }
    public function setNum($nmr)
    {
       $this->Numero = $nmr;
    }
    
}