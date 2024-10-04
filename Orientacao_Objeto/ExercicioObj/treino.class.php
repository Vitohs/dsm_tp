<?php

class Treino
{

    public function __construct(private int $series = 0, private int $repeticoes = 0, private $instrutor = null, private $aluno = null, private $aparelho = null){}

    public function getSerie()
    {
        return $this->series;
    }
    public function setSerie($serie)
    {
        $this->series = $serie;
    }

    public function getAluno()
    {
        return $this->aluno;
    }
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;
    }

    public function getAparelho()
    {
        return $this->aparelho;
    }
    public function setAparelho($aparelho)
    {
        $this->aparelho = $aparelho;
    }

    public function getInstrutor()
    {
        return $this->instrutor;
    }
    public function setInstrutor($instrutor)
    {
        $this->instrutor = $instrutor;
    }

    public function getRep()
    {
       return $this->repeticoes;
    }

    public function setRep($rp)
    {
        $this->repeticoes = $rp;
    }

}