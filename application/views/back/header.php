<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Painel Moderador</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    <?= load_css(array("bootstrap.min"), "assets/css") ?>
    <?= load_js(array("jquery.min"), "assets/js/vendor") ?>
    <?= load_js(array("cep", "jquery.mask.min"), "assets/js") ?>
</head>
<body>
<div class="content">
    <?php
    get_mensagem("msgerro");
    get_mensagem("msgsucesso");
    ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?=base_url("/painel")?>">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Galeria <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("galeria/publicarGaleria")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("galeria/listarGaleria")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Notícia Primária <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("noticia/publicarNoticiaPrincipal")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("noticia/listarNoticiaPrincipal")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Notícia Secundária <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("noticia/publicarNoticiaSecundaria")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("noticia/listarNoticiaSecundaria")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Notícia Terciária <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("noticia/publicarNoticiaTerciaria")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("noticia/listarNoticiaTerciaria")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Notícia Quaternária <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("noticia/publicarNoticiaQuaternaria")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("noticia/listarNoticiaQuaternaria")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Notícia Quinária <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("noticia/publicarNoticiaQuinaria")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("noticia/listarNoticiaQuinaria")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Notícia Senária <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("noticia/publicarNoticiaSenaria")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("noticia/listarNoticiaSenaria")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Pessoas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url("pessoa/cadastrarPessoa")?>">Cadastrar</a></li>
                            <li><a href="<?=base_url("pessoa/listarPessoas")?>">Listar</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=base_url("painel/editarBiografia")?>">Biografia</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=base_url("usuario/logout")?>">Deslogar</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<?= load_js(array("bootstrap.min", "nicEdit"), "assets/js") ?>