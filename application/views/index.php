<div class="row">
    <div id="owl-carousel" class="owl-carousel owl-theme">
        <?php foreach ($noticiaPrincipal as $principal) { ?>
            <div class="item">
                <img title="<?=$principal->titulo?>" src="<?=base_url("/uploads/$principal->imagem")?>" alt="<?=$principal->titulo?>">
            </div>
        <?php } ?>
    </div>
</div>
<div class="container" style=""><!--Imagens da esquerda-->
    <div class="row">
        <div class="col-md-7"><!--Container das imagens-->
            <div class="col-md-4"><!--Primeira imagem-->
                <a href="<?= base_url("noticia/visualizarNoticiaSecundaria/?id=$noticiaSecundaria->id") ?>">
                    <img class="img-circle imgE" src="<?=base_url("/uploads/$noticiaSecundaria->imagem")?>" alt="">
                </a>
                <div id="orgTexto"><?=$noticiaSecundaria->titulo?></div>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url("noticia/visualizarNoticiaTerciaria/?id=$noticiaTerciaria->id") ?>">
                    <img class="img-circle imgE" src="<?=base_url("/uploads/$noticiaTerciaria->imagem")?>" alt="...">
                </a>
                <div id="orgTexto"><?=$noticiaTerciaria->titulo?></div>
            </div>
        </div>
        <div class="col-md-5"><!--Container da coluna dois de imagens-->
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <a href="<?= base_url("noticia/visualizarNoticiaQuaternaria/?id=$noticiaQuaternaria->id") ?>">
                            <img class="img-circle imgD" src="<?=base_url("/uploads/$noticiaQuaternaria->imagem")?>" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <div class="well well-lg"><?=$noticiaQuaternaria->titulo?></div>
                        </h4>
                    </div>
                </li>
            </ul>
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <a href="<?= base_url("noticia/visualizarNoticiaQuinaria/?id=$noticiaQuinaria->id") ?>">
                            <img class=" img-circle imgD" src="<?=base_url("/uploads/$noticiaQuinaria->imagem")?>" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <div class="well well-lg"><?=$noticiaQuinaria->titulo?></div>
                        </h4>
                    </div>
                </li>
            </ul>
            <div class="maisNoticias">
                <a href="#">Mais noticias<a/>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="callbacks_container">
    <ul class="rslides" id="slider4">
        <?php foreach ($noticiaSenaria as $senaria) { ?>
        <li>
            <img src="<?=base_url("/uploads/$senaria->imagem")?>" alt="<?=$senaria->titulo?>">
            <p class="caption"><?=$senaria->titulo?></p>
        </li>
        <?php } ?>
    </ul>
</div>



