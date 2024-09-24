<?php
class poupanca extends Conta
{
    public function __construct(private int $aniversario = 0, string $agencia = "", string $numero = "", string $titular = "", float $saldo = 0.00)
    {
        parent:: __construct($agencia, $numero, $titular, $saldo);
    }

     public function getLimite()
     {
        return $this->aniversario;
     }
     public function setLimite($ani)
     {
        $this->aniversario = $ani;
     }
}
?>