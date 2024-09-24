<?php
class Conta
{
    public function __construct(protected string $agencia = "", protected  string $numero = "",
    protected string $titular = "", protected  float $saldo = 0.00){}

     public function getAgencia()
     {
        return $this->agencia;
     }
     public function setAgencia($ag)
     {
        $this->agencia = $ag;
     }

     public function getNumero()
     {
        return $this->numero;
     }
     public function setNumero($nu)
     {
        $this->numero = $nu;
     }

     public function getTitular()
     {
        return $this->titular;
     }
     public function setTitular($t)
     {
        $this->titular = $t;
     }

     public function getSaldo()
     {
        return $this->saldo;
     }
     public function setSaldo($s)
     {
        $this->saldo = $s;
     }
     
     public function Sacar(float $valor)
     {
        $this->saldo -= $valor;
     }
     public function Depositar(float $valor)
     {
        $this->saldo += $valor;
     }
}
?>