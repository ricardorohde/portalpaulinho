<br/><br/>
<div class="container">
    <div class="col-md-12">
        <?php echo form_open("usuario/login") ?>
        <?php echo validation_errors(); ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Email / Usuário</label>
            <input type="email" name="email" class="form-control" placeholder="Insira seu e-mail">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Insira a sua senha">
        </div>
        <button type="submit" class="btn btn-warning btn-block">Entrar</button>
        <?php echo form_close() ?>
    </div>
</div>