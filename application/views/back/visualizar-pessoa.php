<?php

$id = $this->input->get("id");
$query = $this->pessoa->getPessoaById($id)->row();

?>
<div class="container">
    <table class="table">
        <tr style="background-color: #d1d1d1">
            <td colspan="2"><strong>Informações Pessoais</strong></td>
        </tr>
        <tr>
            <td><strong>Nome</strong></td>
            <td><?= $query->nome ?></td>
        </tr>
        <tr>
            <td><strong>Data de Nascimento</strong></td>
            <td>
                <?php $bornDate = $query->data_de_nascimento ?>
                <?php echo date("d/m/Y", strtotime($bornDate)) ?>
            </td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><?= $query->email ?></td>
        </tr>
        <tr>
            <td><strong>Telefone</strong></td>
            <td><?= $query->telefone ?></td>
        </tr>
        <tr style="background-color: #d1d1d1">
            <td colspan="2"><strong>Informações de Endereço</strong></td>
        </tr>
        <tr>
            <td><strong>CEP</strong></td>
            <td><?= $query->cep ?></td>
        </tr>
        <tr>
            <td><strong>Endereço</strong></td>
            <td><?= $query->endereco ?></td>
        </tr>
        <tr>
            <td><strong>Bairro</strong></td>
            <td><?= $query->bairro ?></td>
        </tr>
        <tr>
            <td><strong>Número</strong></td>
            <td><?= $query->numero ?></td>
        </tr>
        <tr>
            <td><strong>Complemento</strong></td>
            <td><?= $query->complemento ?></td>
        </tr>
        <tr>
            <td><strong>Ponto de Referência</strong></td>
            <td><?= $query->pontoref ?></td>
        </tr>
        <tr>
            <td><strong>Cidade</strong></td>
            <td><?= $query->cidade ?></td>
        </tr>
        <tr style="background-color: #d1d1d1">
            <td colspan="2"><strong>Informações Adicionais</strong></td>
        </tr>
        <tr>
            <td><strong>Descrição</strong></td>
            <td><?= $query->descricao ?></td>
        </tr>
    </table>
    <a class="btn btn-warning btn-block" href="JavaScript: window.history.back()">Voltar</a>
</div>


