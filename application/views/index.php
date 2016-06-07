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

<div id="owl-carousel" class="owl-carousel owl-theme">
    <?php foreach ($noticiaPrincipal as $principal) { ?>
        <div class="item">
            <a href="<?= base_url("noticia/visualizarNoticiaPrincipal/?url=$principal->url"); ?>">
                <img class="img-responsive center-block" title="<?= $principal->titulo ?>"
                     src="<?= base_url("/uploads/$principal->imagem") ?>"
                     alt="<?= $principal->titulo ?>">
            </a>
        </div>
    <?php } ?>
</div>
<div style="padding-top: 50px;" class="container"><!--Imagens da esquerda-->
    <div class="maisNoticias">
        <a href="<?= base_url("home/galeria") ?>">Visite a galeria</a>
    </div>
    <div class="row">
        <div class="col-md-7"><!--Container das imagens-->
            <div class="col-md-4"><!--Primeira imagem-->
                <a href="<?= base_url("noticia/visualizarNoticiaSecundaria/?url=$noticiaSecundaria->url") ?>">
                    <img class="img-circle imgE img-responsive" src="<?= base_url("/uploads/$noticiaSecundaria->imagem") ?>" alt="">
                </a>
                <div id="orgTexto"><a class="cor"
                                      href="<?= base_url("noticia/visualizarNoticiaSecundaria/?url=$noticiaSecundaria->url") ?>"><?= $noticiaSecundaria->titulo ?></a>
                </div>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url("noticia/visualizarNoticiaTerciaria/?url=$noticiaTerciaria->url") ?>">
                    <img class="img-circle imgE img-responsive" src="<?= base_url("/uploads/$noticiaTerciaria->imagem") ?>" alt="...">
                </a>
                <div id="orgTexto"><a class="cor"
                                      href="<?= base_url("noticia/visualizarNoticiaTerciaria/?url=$noticiaTerciaria->url") ?>"><?= $noticiaTerciaria->titulo ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-5"><!--Container da coluna dois de imagens-->
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <a href="<?= base_url("noticia/visualizarNoticiaQuaternaria/?url=$noticiaQuaternaria->url") ?>">
                            <img class="img-circle imgD img-responsive hidden-xs" src="<?= base_url("/uploads/$noticiaQuaternaria->imagem") ?>"
                                 alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="well well-lg">
                            <a href="<?= base_url("noticia/visualizarNoticiaQuaternaria/?url=$noticiaQuaternaria->url") ?>"><?= $noticiaQuaternaria->titulo ?></a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <a href="<?= base_url("noticia/visualizarNoticiaQuinaria/?url=$noticiaQuinaria->url") ?>">
                            <img class=" img-circle imgD img-responsive hidden-xs" src="<?= base_url("/uploads/$noticiaQuinaria->imagem") ?>"
                                 alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="well well-lg">
                            <a href="<?= base_url("noticia/visualizarNoticiaQuinaria/?url=$noticiaQuinaria->url") ?>"><?= $noticiaQuinaria->titulo ?></a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="maisNoticias">
                <a href="<?= base_url("home/noticia") ?>">Mais noticias<a/>
            </div>
        </div>
    </div>
</div>

<!-- Responsive Slide -->
<div class="callbacks_container  hidden-sm hidden-xs" style="width: 50%; margin-left: 350px; padding-top: 35px; padding-bottom: 50px;">
    <ul class="rslides" id="slider4">
        <?php foreach ($noticiaSenaria as $senaria) : ?>
            <li>
                <img class="img-responsive center-block" src="<?= base_url("/uploads/$senaria->imagem") ?>" alt="<?= $senaria->titulo ?>">
                <p class="caption"><?= $senaria->titulo ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>



