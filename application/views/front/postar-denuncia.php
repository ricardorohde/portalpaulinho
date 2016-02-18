<br/>
<div class="row">
    <strong><small>Campos sinalizados com</small><span style="color: red"> * </span><small>são obrigatórios.</small></strong>
    <h2>Denuncia de infração</h2>
    <?= form_open("denuncia/postarDenuncia") ?>
        <label for="nome"><span style="color: red">* </span>Seu nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Qual o seu nome?">

        <label for="telefone"><span style="color: red">* </span>Seu Telefone:</label>
        <input type="text" name="telefone" id="telefone" maxlength="11" placeholder="Qual o seu telefone?">
        <br/>

        <h3>Local a ser denunciado</h3>
        <label for="cep"><span style="color: red">* </span>CEP</label>
        <small>Digite aqui o CEP (sem traço). Aguarde o preenchimento automático do endereço</small>
        <input id="cep" name="cep" type="text" maxlength="8" placeholder="Digite aqui o CEP">

        <label for="logradouro"><span style="color: red">* </span>Endereço</label>
        <input id="logradouro" name="endereco" type="text">

        <label for="bairro"><span style="color: red">* </span>Bairro</label>
        <input id="bairro" name="bairro" type="text">

        <label for="numero"><span style="color: red">* </span>Número da casa</label>
        <input id="numero" name="numero" type="text">

        <label for="complemento">Complemento</label>
        <input id="complemento" name="complemento" type="text" placeholder="Ex: Casa 2; AP 54/B...">

        <label for="pontoref">Ponto de referência</label>
        <input id="pontoref" name="pontoref" type="text" placeholder="Próximo a tal lugar...">

        <label for="localidade">Cidade</label>
        <input id="localidade" name="cidade" type="text">

        <label for="descricao"><span style="color: red">* </span>Descrição</label>
        <textarea name="descricao" id="descricao" placeholder="O que você deseja reportar? Ex: caixa d'água sem proteção..." rows="3"></textarea>
        <br/>

        <button type="submit" class="button large">Denunciar</button>
    <?= form_close() ?>
</div>
<script type="text/javascript" src="../assets/js/cep.js"></script>