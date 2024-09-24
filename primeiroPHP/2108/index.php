<?php
    require_once "Cliente.class.php";
    $cliente = new Cliente();
    $conect = $cliente->conexao();
    $resultado = $cliente->buscar($conect);
    // echo "<pre>";
    // var_dump($resultado);
    // echo "</pre>;"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
   
</head>
<body>
    <h1>
        Lista D. clientes
    </h1>
    <a href="Form_cliente.html">Novo Cliente</a>
    <br>
    <table border="1">
    <thead>
        <tr>
           <th>Nome:</th>
           <th>CPF:</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
            foreach($resultado as $dado)
            {
                echo "<tr>
                <td>
                $dado->nome $dado->sobrenome
                </td>
                <td>
                $dado->cpf
                </td>
                </tr>"
                ;
            }
        ?>
        </table>
    </tbody>
</body>
</html>