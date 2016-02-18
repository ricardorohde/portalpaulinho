<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:01
 */
?>
<h3>Publicar projeto</h3>
<?php echo form_open_multipart("noticia/publicarNoticiaQuaternaria"); ?>
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" placeholder="Insira aqui o título da notícia">

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" placeholder="Insira aqui a descrição da notícia"></textarea>
    <br/>

    <label for="imagem">Adicionar imagem</label>
    <input type="file" name="imagem" id="imagem">

    <button class="success button" type="submit">Publicar</button>
    <a class="button warning" href="<?= base_url("noticia/listarNoticiaQuaternaria") ?>">Voltar</a>
<?php echo form_close(); ?>