<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:01
 */
$id = $this->input->get("id");
$query = $this->noticia->GetNoticiaById($id)->row();
?>
<h3>Editar projeto</h3>
<?php echo form_open_multipart("noticia/editarNoticia"); ?>
    <input type="hidden" name="id" id="id" value="<?= $query->id ?>">

    <label for="conexao">Nome do Conexão Jovem</label>
    <input type="text" name="conexao" id="conexao" value="<?= $query->nome_conexao ?>">

    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="<?= $query->titulo ?>">

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao"><?= $query->descricao ?></textarea>
    <br/>

    <?php
        if (isset($query->video) || $query->video != NULL) {
            $value = "value='$query->video'";
        }
    ?>
    Editar <a id="imagemLabel" href="#">Imagem</a> / <a id="videoLabel" href="#">Vídeo</a>
    <input type="file" name="imagem" id="imagem">
    <input type="text" name="video" id="video" <?= $value ?> placeholder="Insira a URL do vídeo">
    <?php if (isset($query->imagem) || $query->imagem != NULL) { ?>
        <img width="60" height="70" src="<?= base_url("uploads/$query->imagem") ?>">
    <?php } ?>

    <?php
        $checked = ($query->status == 1 ? "checked='checked'" : "");
    ?>
    <div class="switch">
    <input class="switch-input" type="checkbox" value="1" name="status" id="status" <?= $checked ?>>
        <label for="status" class="switch-paddle">
            <span class="show-for-sr">Ativar / Desativar notícia</span>
        </label>
    </div>

    <button class="button" type="submit">Editar</button>
    <a class="button warning" href="<?= base_url("noticia/listarNoticia") ?>">Voltar</a>
<?php echo form_close(); ?>

<script>

    function aparecerImagem() {
        var inputSelecionado = document.querySelector("#imagem");
        var inputDesselecionado = document.querySelector("#video");
        inputSelecionado.setAttribute("style", "display: block;");
        inputDesselecionado.setAttribute("style", "display: none;");
    }

    function aparecerVideo() {
        var inputSelecionado = document.querySelector("#video");
        var inputDesselecionado = document.querySelector("#imagem");
        inputSelecionado.setAttribute("style", "display: block;");
        inputDesselecionado.setAttribute("style", "display: none;");
    }

    function selecionarImagem() {
        var input = document.querySelector("#imagemLabel");
        input.addEventListener("click", aparecerImagem);
    }

    function selecionarVideo() {
        var input = document.querySelector("#videoLabel");
        input.addEventListener("click", aparecerVideo);
    }

    selecionarImagem();
    selecionarVideo();

</script>

<style>
    #imagem {
        display: none;
    }

    #video {
        display: none;
    }
</style>
