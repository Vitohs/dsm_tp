<?php

class Fornecedor
{
    public function __construct(private string $razaosocial = "", private string $cnpj = "",
     private string $telefone = "", private array $produto = array())
     {}
    
     public function getRazao()
     {
        return $this->razaosocial;
     }
     public function getCnpj()
     {
        return $this->cnpj;
     }
     public function getTel()
     {
        return $this->telefone;
     }
     public function getProduto()
     {
        return $this->produto;
     }
   //                            TIPAGEM FORTE
     public function setProduto(Produto $produto)
     {
         $this->produto[] = $produto;
     }
}


?>