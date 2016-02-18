<!DOCTYPE html>
<html>
<head>
    <title>Portal do Professor Paulinho</title>
    <?= load_css(array("bootstrap.min", "app", "owl.carousel", "responsiveslides", "owl.theme", "demo"), "/assets/css") ?>
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
    <div class="row">
        <!--Logo-->
        <div id="logo">
            <div class="col-md-2">
                <a href="<?= base_url("/") ?>">
                    <img id="logo" src="<?= base_url('/assets/img/logoP.png') ?>" class="img-rounded" alt="Professor Paulinho">
                </a>
            </div>
        </div>
        <!--Redes sociais-->
        <div class="col-md-6 ">
            <ul id="menuRede">
                <li>
                    <a href="">
                        <img width="48px" height="48px" id="redesSociais" src="<?= base_url('/assets/img/face.png') ?>" class="img-responsive" alt="Responsive image">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img width="48px" height="48px" id="redesSociais" src="<?= base_url('/assets/img/google.png') ?>" class="img-responsive" alt="Responsive image">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img width="48px" height="48px" id="redesSociais" src="<?= base_url('/assets/img/insta.png') ?>" class="img-responsive" alt="Responsive image">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Menu-->
    <div class="row">
        <div class="col-md-9 col-md-offset-4">
            <div id="menuPag">
                <ul class="nav nav-pills">
                    <li><a href="<?= base_url("/") ?>">HOME</a></li>
                    <li><a href="#">BIOGRAFIA</a></li>
                    <li><a href="<?= base_url("/index/noticia") ?>">NOTICIAS</a></li>
                    <li><a href="#">IMPRENSA</a></li>
                    <li><a href="#">CONTATO</a></li>
                    <li><a href="<?=base_url("/usuario")?>">PAINEL</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>