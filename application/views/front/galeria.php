<div class="container">
    <hr/>
    <h2>Galeria de Imagens</h2>
    <?php
    foreach ($query as $file) { ?>
        <div class="col-md-4 col-md-2">
            <a class="thumbnail" href="<?=base_url("/uploads/$file->imagem")?>" data-lightbox="roadtrip">
                <img style="width: 200px; height: 100px;" class="img-rounded" src="<?=base_url("/uploads/$file->imagem")?>" alt="Imagem">
            </a>
        </div>
    <?php } ?>
</div>
<div class="container">
    <?=$paginacao?>
</div>
<br/>