<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 14:27
 */
verificarSeEstaLogado();
get_mensagem("msgerro");
get_mensagem("msgsucesso");
?>
<div class="container">
    <h3>Listagem de projetos</h3>
    <table id="listagem" class="listagem">
        <thead>
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Miniatura</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = $this->noticia->GetNoticia("terciaria");
        foreach ($query as $dados) { ?>
            <?php $disabled = ($dados->status == 0 ? "style='background: grey; color: white'" : "") ?>
            <tr <?= $disabled ?>>
                <td><?= $dados->titulo ?></td>
                <td><?= resumirNoticia($dados->descricao) ?></td>
                <td><?= date("d-m-Y h:i:s", strtotime($dados->data)) ?></td>
                <?php if (isset($dados->imagem) || $dados->imagem != NULL) { ?>
                    <td><img width="50" height="60" src="<?= base_url("uploads/$dados->imagem") ?>"></td>
                <?php } else { ?>
                    <td><p>Vídeo</p></td>
                <?php } ?>
                <?php
                $ativar = "<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>";
                $desativar = "<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>";
                $trash = "<span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>";
                ?>
                <td>
                    <?php if ($dados->status == 1) { ?>
                        <?= anchor("noticia/desativarNoticiaTerciaria/?id=$dados->id", $desativar, "title='Desativar' class='desativaRegistro'") ?> <?= anchor("noticia/excluirNoticiaTerciaria/?id=$dados->id", $trash, "title='Excluir' class='deletaRegistro'") ?></td>
                    <?php } else { ?>
                        <?= anchor("noticia/ativarNoticiaTerciaria/?id=$dados->id", $ativar, "title='Ativar' class='ativaRegistro'") ?> <?= anchor("noticia/excluirNoticiaTerciaria/?id=$dados->id", $trash, "title='Excluir' class='deletaRegistro'") ?></td>
                    <?php } ?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $(function () {
        $('.deletaRegistro').click(function () {
            if (confirm("Deseja realmente exluir este registro?\nEsta operação não pode ser desfeita!"))
                return true;
            else
                return false;
        });

        $('.ativaRegistro').click(function () {
            if (confirm("Deseja realmente ativar esta noticia?"))
                return true;
            else
                return false;
        });

        $('.desativaRegistro').click(function () {
            if (confirm("Deseja realmente desativar esta noticia?\nEsta operação não pode ser desfeita!"))
                return true;
            else
                return false;
        });
    });
</script>
