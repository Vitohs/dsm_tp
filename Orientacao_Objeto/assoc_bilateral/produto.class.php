<?php
class Produto
{
    public function __construct(private string $nome = "", private string $desc = "", private float $preco = 0.00, private int $estoque = 0
     ,private array $fornecedor = array())
    {}

    public function getNome()
    {
        return $this->nome;
    }
    public function getDesc()
    {
        return $this->desc;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    public function setFornecedor(Fornecedor $fornecedor)
    {
        $this->fornecedor[] = $fornecedor;
    }
}


?>