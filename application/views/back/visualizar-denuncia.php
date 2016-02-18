<?php

$id = $this->input->get("id");
$query = $this->denuncia->GetDenunciaById($id)->row();

?>
    <table>
        <tr>
            <td colspan="2" style="text-align: center"><strong>Dados do usuário</strong></td>
        </tr>
        <tr>
            <td><strong>Nome</strong></td>
            <td><?=$query->nome?></td>
        </tr>
        <tr>
            <td><strong>Telefone</strong></td>
            <td><?=$query->telefone?></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center"><strong>Dados do infrator</strong></td>
        </tr>
        <tr>
            <td><strong>CEP</strong></td>
            <td><?=$query->cep?></td>
        </tr>
        <tr>
            <td><strong>Endereço</strong></td>
            <td><?=$query->endereco?></td>
        </tr>
        <tr>
            <td><strong>Bairro</strong></td>
            <td><?=$query->bairro?></td>
        </tr>
        <tr>
            <td><strong>Número</strong></td>
            <td><?=$query->numero?></td>
        </tr>
        <tr>
            <td><strong>Complemento</strong></td>
            <td><?=$query->complemento?></td>
        </tr>
        <tr>
            <td><strong>Ponto de Referência</strong></td>
            <td><?=$query->pontoref?></td>
        </tr>
        <tr>
            <td><strong>Cidade</strong></td>
            <td><?=$query->cidade?></td>
        </tr>
        <tr>
            <td><strong>Descrição</strong></td>
            <td><?=$query->descricao?></td>
        </tr>
    </table>


