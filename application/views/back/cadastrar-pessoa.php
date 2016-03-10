<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css"/>
<div class="container">
    <strong>
        <small>Campos sinalizados com</small>
        <span style="color: red"> * </span>
        <small>são obrigatórios.</small>
    </strong>
    <h2>Informações Pessoais</h2>
    <?= form_open("pessoa/cadastrarPessoa") ?>
    <label for="nome"><span style="color: red">* </span>Nome:</label>
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Qual o nome completo da pessoa?">

    <label for="data-nasc"><span style="color: red">* </span>Data de Nascimento:</label>
    <input class="form-control" maxlength="10" type="text" name="data-nasc" id="calendario"
           placeholder="Ex: 04/02/1994">

    <label for="email"><span style="color: red">* </span>Email:</label>
    <input class="form-control" type="email" name="email" id="email" placeholder="Qual o email da pessoa?">

    <label for="telefone"><span style="color: red">* </span>Telefone:</label>
    <input class="form-control" type="text" name="telefone" id="telefone" placeholder="E o telefone?">
    <br/>

    <h3>Endereço</h3>
    <label for="cep"><span style="color: red">* </span>CEP</label>
    <small>Digite aqui o CEP (sem traço). Aguarde o preenchimento automático do endereço</small>
    <input class="form-control" id="cep" name="cep" type="text" maxlength="8" placeholder="Digite aqui o CEP">

    <label for="logradouro"><span style="color: red">* </span>Endereço</label>
    <input class="form-control" id="logradouro" name="endereco" type="text">

    <label for="bairro"><span style="color: red">* </span>Bairro</label>
    <input class="form-control" id="bairro" name="bairro" type="text">

    <label for="numero"><span style="color: red">* </span>Número da casa</label>
    <input class="form-control" id="numero" name="numero" type="text">

    <label for="complemento">Complemento</label>
    <input class="form-control" id="complemento" name="complemento" type="text" placeholder="Ex: Casa 2; AP 54/B...">

    <label for="pontoref">Ponto de referência</label>
    <input class="form-control" id="pontoref" name="pontoref" type="text" placeholder="Próximo a tal lugar...">

    <label for="localidade">Cidade</label>
    <input class="form-control" id="localidade" name="cidade" type="text">
    <br/>

    <h3>Informações Adicionais</h3>
    <label for="descricao"><span style="color: red">* </span>Observações</label>
    <textarea class="form-control" name="descricao" id="descricao"
              placeholder="Existe alguma informação extra que precisamos saber?"
              rows="3"></textarea>
    <br/>

    <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
    <?= form_close() ?>
    <br/>
</div>
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script src="https://raw.githubusercontent.com/igorescobar/jQuery-Mask-Plugin/master/dist/jquery.mask.min.js"></script>
<script>
    $('#telefone').on("focusout", function () {
        var phone, element;
        element = $(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if (phone.length > 10) {
            element.mask("(99) 99999-9999");
        } else {
            element.mask("(99) 9999-99999");
        }
    }).trigger('focusout');
</script>
<script>
    $(function () {
        $("#calendario").datepicker({
            dateFormat: 'dd/mm/yy',
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            changeMonth: true,
            changeYear: true
        });
    });
</script>