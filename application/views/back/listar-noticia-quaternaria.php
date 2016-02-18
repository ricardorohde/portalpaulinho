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
    $query = $this->noticia->GetNoticia("quaternaria");
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
            $editar = "<i class='fi-pencil'></i>";
            $trash = "<i class='fi-trash'></i>";
            ?>
            <script>
                $(function () {
                    $('.deletaRegistro').click(function () {
                        if (confirm("Deseja realmente exluir este registro?\nEsta operação não pode ser desfeita!"))
                            return true;
                        else
                            return false;
                    });
                });
            </script>
            <td><?= anchor("noticia/editarNoticia/?id=$dados->id", $editar, "title='Editar'") ?> <?= anchor("noticia/excluirNoticia/?id=$dados->id", $trash, "title='Excluir' class='deletaRegistro'") ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
