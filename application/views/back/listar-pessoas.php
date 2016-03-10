<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 14:27
 */
verificarSeEstaLogado();
?>
<div class="container">
    <h3>Listagem de Pessoas</h3>
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
        $query = $this->pessoa->getPessoas()->result();
        foreach ($query as $dados) { ?>
            <tr>
                <td><?= $dados->nome ?></td>
                <td><?= $dados->telefone ?></td>
                <td><?= resumirNoticia($dados->descricao) ?></td>
                <td><?= date("d-m-Y", strtotime($dados->data)) ?></td>
                <td>
                    <a href="<?= base_url("pessoa/visualizarPessoa?id=$dados->id") ?>">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Visualizar
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
