<?php

class Aparelho
{
    public function __construct(private string $descritivo = "", private array $aluno = array()){}

    public function getDesc()
    {
        return $this->descritivo;
    }
    public function setDesc($desc)
    {
        $this->descritivo = $desc;
    }

    public function getAluno()
    {
        return $this->aluno;
    }
    public function setAluno($aluno)
    {
        $this->aluno[] = $aluno;
    }
}