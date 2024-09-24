<?php

class Exame extends Servico
{
    public function __construct(private string $mprotetiva, private string $tipo)
    {
       parent ::  __construct($desc, $preco);
    }

    public function getMprotetiva()
    {
        return $this->mprotetiva;
    }
    public function setMprotetiva($mp)
    {
        $this->mprotetiva = $mp;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tp)
    {
        $this->tipo = $tp;
    }
}