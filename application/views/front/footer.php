<div class="rodape">
    <p>Todos os direitos reservedados a www.professorpaulinho.com</p>
</div>
<?= load_js(array("jquery", "owl.carousel", "bootstrap", "responsiveslides", "app"), "/assets/js") ?>
<script>
    $(document).ready(function () {
        $("#owl-carousel ").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true
        });
    });

    //<![CDATA[
    bkLib.onDomLoaded(function () {
        nicEditors.allTextAreas()
    });
    //]]>
</script>
</div>
</div>
</body>
</html>