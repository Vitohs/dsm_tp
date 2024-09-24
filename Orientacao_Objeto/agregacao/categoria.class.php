<?php
    class Categoria
    {
        public function __construct(private string $descritivo = "", private array $produto = array()){}

        public function getDescr()
        {
            return $this->descritivo;
        }

        public function getProduto()
        {
            return $this->produto;
        }
        public function setProduto(Produto $produto)
        {
            $this->produto[] = $produto;
        }
    }
?>