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
            <th>Data</th>
            <th>Miniatura</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = $this->galeria->GetGaleria();
        foreach ($query as $dados) { ?>
        <tr>
            <td><?= date("d-m-Y h:i:s", strtotime($dados->data)) ?></td>
            <td><img width="60" height="50" src="<?= base_url("uploads/$dados->imagem") ?>"></td>
            <?php
            $trash = "<span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>";
            ?>
            
            <td><?= anchor("galeria/excluirGaleria/?id=$dados->id", $trash, "title='Excluir' class='deletaRegistro'") ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
