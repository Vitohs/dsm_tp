<?php
    require_once "header.php"
?>
<div class="content">
    <div class="container">
        <?php
            if(isset($_GET["msg"]))
            {
                echo "<div class='alert alert-success' role-'alert'>{$_GET["msg"]}</div>";
            }
        ?>
        <h1>Categorias</h1>
        <a href="/lojaMVC/inserir_categoria" class="btn btn-primary">Nova Categoria</a>
        <table class="table table-striped">
                <tr>
                    <th>Descritivo</th>
                    <th>Ações</th>
                </tr>
                <?php
                    foreach($retorno as $dado)
                    {
                        echo 
                        "<tr>
                            <td>{$dado->descritivo}</td>
                            <td>
                                <a href='/lojaMVC/alterar_categoria?id={$dado->id_categoria}' class='btn btn-warning'>Alterar</a>&nbsp;&nbsp;
                               ";
                    
                ?>
                    <a href="/lojaMVC/excluir_categoria?id=<?php echo $dado->id_categoria ?>" class='btn btn-danger' onclick="return confirm('tem certeza disso ?')">
                    Excluir</a>
                    </td>
                    </tr>
                <?php
                    }
                ?>
        </table>
    </div>
</div>