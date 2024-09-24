<?php
class Produto
{
    public function __construct(private string $nome = "", private string $desc = "", private float $preco = 0.00, private int $estoque = 0,
    private $categoria = null)
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

    public function getCat()
    {
        return $this->categoria;
    }
    public function setCat(Categoria $categoria)
    {
        $this->categoria = $categoria;;
    }
}
?>