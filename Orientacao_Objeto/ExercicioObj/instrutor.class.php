<?php

class Instrutor extends Pessoa
{

    public function __construct(private string $especialidade = "",$nome = "",$cpf = "",$ddd = "", $numero = "", $pessoa = null)
    {
        parent :: __construct($nome,$cpf,$ddd, $numero, $pessoa);
    }

    public function getEsp()
    {
        return $this->especialidade;
    }
    public function setEsp($esp)
    {
        return $this->especialidade = $esp;
    }
}