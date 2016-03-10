<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <?= form_open("index/enviarContato") ?>
            <label for="nome">Seu nome:</label>
            <input class="form-control" type="text" name="nome" placeholder="Qual o seu nome completo?">

            <label for="email">Seu email:</label>
            <input class="form-control" type="email" name="email" placeholder="Qual o seu email?">

            <label for="email">Assunto:</label>
            <input class="form-control" type="text" name="assunto" placeholder="Qual o assunto da mensagem?">

            <label for="texto">Texto</label>
            <textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
            <br/>
            <button type="submit" class="btn btn-warning btn-block">Enviar</button>
            <?= form_close() ?>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7047619411205!2d-46.93298084975858!3d-23.54311896672808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf069ae70b74c7%3A0x98ab56281aefcb5c!2sIMOBILI%C3%81RIA+PN+IM%C3%93VEIS+-+ITAPEVI!5e0!3m2!1spt-BR!2sbr!4v1456527816136" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>