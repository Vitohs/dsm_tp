<?php

class LimpezaRestauracao extends Servico
{
    public function __construct(private string $material, private string $tratado)
    {
        parent :: __construct($desc,$preco)
    }

    public function getMaterial()
    {
        return $this->material;
    }
    public function setMaterial($ma)
    {
        $this->material = $ma;
    }

    public function getTratado()
    {
        return $this->tratado;
    }
    public function setTratado($tratado)
    {
        $this->tratado = $tratado;
    }
}