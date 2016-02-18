<?php
$query = $this->noticia->GetNoticiaById($this->input->get("id"), "principal")->row();
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
            <a target="_blank"
               href="http://www.facebook.com/sharer.php?u=<?= urlencode('http://localhost/dengue/noticia/visualizarNoticia/?id=' . $query->id) ?>"><i
                    class="fi-social-facebook"></i> Compartilhar</a>
        </div>

    </div>
</div>