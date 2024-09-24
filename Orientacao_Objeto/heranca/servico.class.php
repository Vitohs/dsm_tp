<?php
class Servico
{
    public __construct(protected string $desc, protected float $preco,){}

    public function getDesc()
    {
        return $this->desc;
    }
    public function setDesc($dd)
    {
        $this->desc = $dd;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($vlr)
    {
        $this->preco = $vlr;
    }
}