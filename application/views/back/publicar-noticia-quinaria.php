<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:01
 */
?>
<div class="container">
    <h3>Publicar projeto</h3>
    <?php echo form_open_multipart("noticia/publicarNoticiaQuinaria"); ?>
    <label for="titulo">Título</label>
    <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Insira aqui o título da notícia">
    <br/>

    <label for="descricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="descricao" placeholder="Insira aqui a descrição da notícia"></textarea>
    <br/>

    <label for="imagem">Adicionar imagem</label>
    <input type="file" name="imagem" id="imagem">
    <br/>

    <button class="btn btn-success" type="submit">Publicar</button>
    <a class="btn btn-warning" href="<?= base_url("noticia/listarNoticiaQuinaria") ?>">Voltar</a>
    <?php echo form_close(); ?>
</div>
