<div class="container">
<hr>
</div>
<?php foreach ($query as $noticia) { ?>

    <div class="container">
        <div class="fundoNoticia">
<div class="row">
    <div class="col-md-3">
    <ul class="mostrarImagem">
        <li><img width="260px" height="144px" class="img-rounded" src="<?= base_url("uploads/$noticia->imagem") ?>"></li>
    </ul>
    </div>
    <div class="col-md-8">
    <ul class="callout mostrarNoticia">
        <li>
           <a class="tituloNoticia" href="<?= base_url("noticia/visualizarNoticia/?id=$noticia->id") ?>"><?= $noticia->titulo ?></a>
        </li>

        <li><div class="descricaoNoticia"><?= resumirNoticia($noticia->descricao, 250) ?></li></div>
            </ul>

</div>
</div>
        </div>
    </div>

<?php } ?>

<div class="container">
    <hr>
<?= $paginacao ?>
</div>