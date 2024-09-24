<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";
    $fornecedor1 = new Fornecedor("Pichau", "tem algo aqui", "(xx)xxxxx-xxxx");
    $fornecedor2 = new Fornecedor("Terabyte", "tem algo aqui", "(xx)xxxxx-xxxx");
    $produto1 = new Produto("PS5", "Play has no limits", 5000, 1000, array($fornecedor1,$fornecedor2));

    // echo "<pre>";
    // var_dump($fornecedor1);
    // echo "</pre>";
    // echo "<br>";

    echo "<h1>Produto</h1>";
    echo "Nome: {$produto1->getNome()}<br>";
    echo "Descrição: {$produto1->getDesc()}<br>";
    $preco = number_format($produto1->getPreco(), 2, ",", ".");
    echo "Preço: R$ $preco <br>";
    echo "Estoque: {$produto1->getEstoque()}<br>";
    echo "<h2>Fornecedores</h2>";

    foreach($produto1->getFornecedor() as $dados)
    {
        echo "Razão Social: {$dados->getRazao()}<br>";
        echo "CNPJ: {$dados->getCnpj()}<br>";
        echo "Telefone: {$dados->getTel()}<br>";
        echo "<br>";
    }
?>