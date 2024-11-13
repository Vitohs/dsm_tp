<?php
    require_once "header.php"
?>
<div class="content">
    <div class="container">
        <h1>Categorias</h1>
        <form action="/lojaMVC/alterar_categoria" method="post">
            <input type="hidden" name="idcategoria" Value="<?php echo $retorno[0]->id_categoria ?>">
            <label for="descritivo">Descritivo</label>
            <input type="text" name="descritivo" id="descritivo" Value="<?php echo $retorno[0]->descritivo ?>">
            <div style="color:red;font-size;11px">
                <?php
                    echo $msg;
                ?>
            </div>
            <input type="submit" class="btn btn-primary" >
        </form>
    </div>
</div>