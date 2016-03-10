<?php
$biografia = $this->painel->getBiografia();
?>
<div class="container">
    <h3>Insira a Biografia</h3>
    <?=form_open("painel/editarBiografia")?>
        <label for="texto">Texto</label>
        <textarea class="form-control" name="texto" id="texto" rows="3"><?=$biografia->texto?></textarea>
        <br/>
        <button type="submit" class="btn btn-success btn-block">Alterar</button>
    <?=form_close()?>
</div>
<br/>