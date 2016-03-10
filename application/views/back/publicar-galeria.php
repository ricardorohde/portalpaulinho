<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:01
 */
?>
<div class="container">
    <h3>Inserção de novas imagens</h3>
    <?php echo form_open_multipart("galeria/inserirGaleria"); ?>

    <label for="imagem">Adicionar imagem</label>
    <input type="file" name="imagem" id="imagem">
    <br/>

    <button class="btn btn-success" type="submit">Inserir</button>
    <a class="btn btn-warning" href="<?= base_url("galeria/listarGaleria") ?>">Voltar</a>

    <?php echo form_close(); ?>
</div>
