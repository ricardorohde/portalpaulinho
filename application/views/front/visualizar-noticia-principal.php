<hr/>
<?php
$query = $this->noticia->GetNoticiaByUrl($this->input->get("url"), "principal")->row();
?>
<div class="container">
    <div class="row">
        <div class="blog-post">
            <h3><?= $query->titulo ?>
                <small><?= date("d-m-Y H:i:s", strtotime($query->data)) ?></small>
            </h3>
            <img title="<?= $query->titulo ?>" alt="<?= $query->titulo ?>" class="thumbnail fotoBonita tituloNoticia"
                 src="<?= base_url("uploads/$query->imagem") ?>">
            <div class="descricaoNoticia"><?= $query->descricao ?></div>
            <br/>
            <a target="_blank"
               href="http://www.facebook.com/sharer.php?u=<?=urlencode(base_url('/noticia/visualizarNoticiaPrincipal/?url=' . $query->url))?>">
                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Compartilhar no Facebook</a>
        </div>

    </div>
</div>