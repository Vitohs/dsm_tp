<?php
class produto
{
    public function __construct(private int $id_produto = 0,private string $nome = "", private string $descricao = "",
    private float $preco = 0.00,private string $imagem = ""){}
}
