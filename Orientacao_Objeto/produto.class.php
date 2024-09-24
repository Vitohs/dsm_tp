<?php
// inicialização D. classe
class Produto
{
    // criando construtor
    public function __construct(private string $nome = "", private string $desc = "", private int $estoque = 0, private int $preco = 0)
    {

    }
    // metodos gets e sets

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDesc()
    {
        return $this->desc;
    }
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    // carai foda
}
// fim dela

//                      relacionamento entre classes

// HERANÇA : CUSTOMIZAR ATRIBUTOS E METODOS

// ASSOCIAÇÃO : UNILATERAL, BILATERAL, CLASSE ASSOSIATIVA, COMPOSIÇÃO,AGREGAÇÃO

// DEPENDENCIA
?>