<?php
class Categoria
{
    public function __construct(private int $id_categoria = 0,private string $descritivo = ""){}

    public function getID()
    {
        return $this->id_categoria;
    }
    public function getDesc()
    {
        return $this->descritivo;
    }
}