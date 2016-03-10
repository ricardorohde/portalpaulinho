<!DOCTYPE html>
<html>
<head>
    <title>Portal do Professor Paulinho</title>
    <?= load_css(array("bootstrap.min", "app", "owl.carousel", "responsiveslides", "owl.theme", "demo", "lightbox"), "/assets/css") ?>
    <style>
        #owl-carousel .item img {
            display: block;
            width: 100%;
            height: 400px;

        }

        #owl-carousel {
            width: 100%;
        }

        .nav.nav-pills li a {
            color: black;
        }

        .well {
            background-color: rgb(224, 169, 46);
            color: rgb(244, 244, 244);
            margin-top: 2em;
            box-shadow: 2px 2px 2px rgba(27, 24, 29, 0.2);

        }

        .item {
            box-shadow: 12px 1px 1px rgb(230, 39, 136);
        }

    </style>
</head>
<body>
<div class="container">
    <?php
    get_mensagem("msgerro");
    get_mensagem("msgsucesso");
    ?>
    <div class="col-md-12">
        <!--Logo-->
        <div class="col-md-4">
            <a href="<?= base_url("/") ?>">
                <img style="width: 125%" src="<?= base_url('/assets/img/logoP.png') ?>" class="img-rounded"
                     alt="Professor Paulinho">
            </a>
        </div>
    </div>
    <div class="col-md-9 col-md-offset-2">
        <!--Menu-->
        <ul class="nav nav-pills">
            <li><a href="<?= base_url("/") ?>">HOME</a></li>
            <li><a href="<?= base_url("/index/biografia") ?>">BIOGRAFIA</a></li>
            <li><a href="<?= base_url("/index/noticia") ?>">NOTICIAS</a></li>
            <li><a href="<?= base_url("/index/imprensa") ?>">IMPRENSA</a></li>
            <li><a href="<?= base_url("/index/contato") ?>">CONTATO</a></li>
            <li><a href="<?= base_url("/index/galeria") ?>">GALERIA</a></li>
        </ul>
    </div>
</div>
</div>