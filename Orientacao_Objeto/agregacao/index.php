<?php
    require_once "produto.class.php";
    require_once "categoria.class.php";
    $categoria1 = new Categoria("Material Escolar");
    $categoria2 = new Categoria("Time");
    
    $produto1 = new Produto("Borracha", "preta", 800, 50, $categoria1);
    $produto2 = new Produto("Lápis", "Branco", 80, 100, $categoria1);
    $produto3 = new Produto("Caneca do São Paulo", "Maior do Brasil", 800, 50,$categoria2);
    $produto4 = new Produto("Caneca do Palmeiras", "verde", 51, 51, $categoria2);
    
    $categoria2->setProduto($produto3);
    echo "<h1>Produto</h1>";
    echo "Nome: {$produto1->getNome()}<br>";
 
    echo "Descrisção: {$produto1->getDesc()}<br>";

    echo "preço: {$produto1->getPreco()}<br>";

    echo "Estoque: {$produto1->getEstoque()}<br>";

    echo "Categoria: {$produto1->getCat()->getDescr()}<br>";

    echo "<br></br>";
    echo "<h2>Categoria</h2>";
    foreach($categoria2->getProduto() as $pdtnovo)
    {
        echo "Nome: {$pdtnovo->getNome()}<br>";
        echo "Descrição: {$pdtnovo->getDesc()}<br>";
        echo "Preço: {$pdtnovo->getPreco()}<br>";
        echo "Estoque: {$pdtnovo->getEstoque()}<br>";
    }
?>