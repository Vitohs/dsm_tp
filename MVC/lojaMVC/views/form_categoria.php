<?php
    require_once "header.php"
?>
<div class="content">
    <div class="container">
        <h1>Categorias</h1>
        <form action="/lojaMVC/inserir_categoria" method="post">
            <label for="descritivo">Descritivo</label>
            <input type="text" name="descritivo" id="descritivo" placeholder="Insira um descritivo" required>
            <div style="color:red;font-size;11px">
                <?php
                    echo $msg;
                ?>
            </div>
            <input type="submit" class="btn btn-primary" >
        </form>
    </div>
</div>