<?php
    // chamando a classe uma vez só
  require_once "produto.class.php";
    // criando objeto
  $obj = new Produto("ps5","play",10,3800);
  
  // aqui no PHP, para acessar algo tem que ser assim
  // $obj->X
  // idferente do C# que seria assim
  // obj.X
  // haha, peguei a visão se liga 
  $obj->setNome("Vai toma");
  echo $obj->getNome();
?>