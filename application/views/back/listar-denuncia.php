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
<h3>Listagem de denuncias</h3>
<table id="listagem" class="listagem">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>Visualizar</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = $this->denuncia->GetDenuncia()->result();
    foreach ($query as $dados) { ?>
        <tr>
            <td><?= $dados->nome ?></td>
            <td><?= $dados->telefone ?></td>
            <td><?= resumirNoticia($dados->descricao) ?></td>
            <td><?= date("d-m-Y", strtotime($dados->data)) ?></td>
            <td>
                <a href="<?= base_url("denuncia/visualizarDenuncia?id=$dados->id") ?>"><i class="fi-magnifying-glass"></i></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
