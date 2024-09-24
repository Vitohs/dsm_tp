<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";
    //relação bilateral, o fornecedor tem esses 2 produtos abaixo, no caso 2 objetos
    $produto1 = new Produto("sopa", "Puro", 30.00, 100);
    $produto2 = new Produto("Acarajé", "Bom", 10.00, 1);
    $produto3 = new Produto("LCD", "Alucinógeno", 10.000, 12);

    $fornecedor = new Fornecedor("Donvito produções","22-69", "(69)-2222222222", array($produto1, $produto2));
    $fornecedor->setProduto($produto3);
    
    // echo "<pre>";
    // var_dump($fornecedor);
    // echo "</pre>"

    echo "<h1>Fornecedor</h1>";
    echo "Razão Social: {$fornecedor->getRazao()}<br>";
    echo "CNPJ: {$fornecedor->getCnpj()}<br>";
    echo "Telefone {$fornecedor->getTel()}<br>";
    echo "<h2>Produtos</h2>";
    foreach($fornecedor->getProduto() as $produto)
    {
        echo "Nome: {$produto->getNome()}<br>";
        echo "Descrisção: {$produto->getDesc()}<br>";
        $preco = number_format($produto->getPreco(), 2, ",", ".");
        echo "Preço: R$ $preco <br>";
        echo "Estoque: {$produto->getEstoque()}<br>";
        echo "<br>";
    }
?>