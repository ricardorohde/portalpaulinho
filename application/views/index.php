<style>
    .cor {
        color: #000000;
    }

    a {
        color: #FFFFFF;
    }

    a:hover {
        color: #EEEEEE;
    }
</style>
<div class="row">
    <div id="owl-carousel" class="owl-carousel owl-theme">
        <?php foreach ($noticiaPrincipal as $principal) { ?>
            <div class="item">
                <img title="<?= $principal->titulo ?>" src="<?= base_url("/uploads/$principal->imagem") ?>"
                     alt="<?= $principal->titulo ?>">
            </div>
        <?php } ?>
    </div>
</div>
<div style="padding-top: 50px;" class="container"><!--Imagens da esquerda-->
    <div class="maisNoticias">
        <a href="<?=base_url("index/galeria")?>">Visite a galeria</a>
    </div>
    <div class="row">
        <div class="col-md-7"><!--Container das imagens-->
            <div class="col-md-4"><!--Primeira imagem-->
                <a href="<?= base_url("noticia/visualizarNoticiaSecundaria/?id=$noticiaSecundaria->id") ?>">
                    <img class="img-circle imgE" src="<?= base_url("/uploads/$noticiaSecundaria->imagem") ?>" alt="">
                </a>
                <div id="orgTexto"><a class="cor" href="<?= base_url("noticia/visualizarNoticiaSecundaria/?id=$noticiaSecundaria->id") ?>"><?= $noticiaSecundaria->titulo ?></a></div>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url("noticia/visualizarNoticiaTerciaria/?id=$noticiaTerciaria->id") ?>">
                    <img class="img-circle imgE" src="<?= base_url("/uploads/$noticiaTerciaria->imagem") ?>" alt="...">
                </a>
                <div id="orgTexto"><a class="cor" href="<?= base_url("noticia/visualizarNoticiaTerciaria/?id=$noticiaTerciaria->id") ?>"><?= $noticiaTerciaria->titulo ?></a></div>
            </div>
        </div>
        <div class="col-md-5"><!--Container da coluna dois de imagens-->
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <a href="<?= base_url("noticia/visualizarNoticiaQuaternaria/?id=$noticiaQuaternaria->id") ?>">
                            <img class="img-circle imgD" src="<?= base_url("/uploads/$noticiaQuaternaria->imagem") ?>"
                                 alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="well well-lg">
                            <a href="<?= base_url("noticia/visualizarNoticiaQuaternaria/?id=$noticiaQuaternaria->id") ?>"><?= $noticiaQuaternaria->titulo ?></a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <a href="<?= base_url("noticia/visualizarNoticiaQuinaria/?id=$noticiaQuinaria->id") ?>">
                            <img class=" img-circle imgD" src="<?= base_url("/uploads/$noticiaQuinaria->imagem") ?>"
                                 alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="well well-lg">
                            <a href="<?= base_url("noticia/visualizarNoticiaQuinaria/?id=$noticiaQuinaria->id") ?>"><?= $noticiaQuinaria->titulo ?></a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="maisNoticias">
                <a href="<?=base_url("index/noticia")?>">Mais noticias<a/>
            </div>
        </div>
    </div>
</div>

<!-- Responsive Slide -->
<div class="callbacks_container" style="width: 50%; margin-left: 350px; padding-top: 35px; padding-bottom: 50px;">
    <ul class="rslides" id="slider4">
        <?php foreach ($noticiaSenaria as $senaria) : ?>
            <li>
                <img src="<?= base_url("/uploads/$senaria->imagem") ?>" alt="<?= $senaria->titulo ?>">
                <p class="caption"><?= $senaria->titulo ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>



