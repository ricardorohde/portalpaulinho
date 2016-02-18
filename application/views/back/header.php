<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Painel Moderador</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    <?= load_css(array("foundation.min", "app"), "assets/css") ?>
    <?= load_css(array("foundation-icons"), "assets/foundation-icons") ?>
    <?= load_js(array("foundation.min", "nicEdit"), "assets/js") ?>
    <?= load_js(array("jquery.min"), "assets/js/vendor") ?>
</head>
<body>
<div class="row">
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text">Bem-vindo: <?= $this->session->userdata("userName") ?></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="<?= base_url("/") ?>"><i class="fi-home"></i></a></li>
                <li><a href="<?= base_url("noticia/publicarNoticiaPrincipal") ?>">Publicar Noticia Principal</a></li>
                <li><a href="<?= base_url("noticia/publicarNoticiaSecundaria") ?>">Publicar Noticia Secundária</a></li>
                <li><a href="<?= base_url("noticia/publicarNoticiaTerciaria") ?>">Publicar Noticia Terciária</a></li>
                <li><a href="<?= base_url("noticia/publicarNoticiaQuaternaria") ?>">Publicar Noticia Quaternária</a></li>
                <li><a href="<?= base_url("noticia/publicarNoticiaQuinaria") ?>">Publicar Noticia Quinária</a></li>
                <li><a href="<?= base_url("noticia/publicarNoticiaSenaria") ?>">Publicar Noticia Senária</a></li>
                <li><a href="<?= base_url("noticia/listarNoticiaPrincipal") ?>">Listar Notícias Principal</a></li>
                <li><a href="<?= base_url("noticia/listarNoticiaSecundaria") ?>">Listar Notícias Secundária</a></li>
                <li><a href="<?= base_url("noticia/listarNoticiaTerciaria") ?>">Listar Notícias Terciária</a></li>
                <li><a href="<?= base_url("noticia/listarNoticiaQuaternaria") ?>">Listar Notícias Quaternária</a></li>
                <li><a href="<?= base_url("noticia/listarNoticiaQuinaria") ?>">Listar Notícias Quinária</a></li>
                <li><a href="<?= base_url("noticia/listarNoticiaSenaria") ?>">Listar Notícias Senária</a></li>
                <li><a href="<?= base_url("denuncia/listarDenuncia") ?>">Listar Contatos</a></li>
                <?php
                $verificar = $this->session->userdata("userLogin");
                $li = (isset($verificar) || $verificar == TRUE
                    ? '<li><a href="'.base_url("usuario/logout").'">Deslogar</a></li>'
                    : '<li><a href="'.base_url("usuario/login").'">Login</a></li>');
                ?>
                <?= $li ?>
            </ul>
        </div>
    </div>
    <br/>