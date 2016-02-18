<div class="row">
    <?php foreach ($dados as $noticia) { ?>
        <div class="medium-2 columns">
            <ul class="mostrarImagem">
                <li><img width="170px" height="95px" src="<?= base_url("uploads/$noticia->imagem") ?>"></li>
            </ul>
        </div>
        <div class="medium-10 columns">
            <ul class="callout mostrarNoticia">
                <li>
                    <strong><a href="<?= base_url("noticia/visualizarNoticia/?id=$noticia->id") ?>"><?= $noticia->titulo ?></a></strong>
                </li>
                <li><?= resumirNoticia($noticia->descricao, 200) ?></li>
                <li><span><strong>Autor(es):</strong></span> <?= $noticia->nome_conexao ?></li>
            </ul>
        </div>
    <?php } ?>
</div>
