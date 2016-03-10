<div class="col-md-12" style="text-align: center; background-color: #4D7A36; padding-top: 15px; bottom: 0px; position: absolute">
    <p>
        <span style="color: #EEEEEE">Todos os direitos reservedados a www.professorpaulinho.com</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?= base_url("/") ?>">
            <img style="width: 32px" src="<?= base_url('/assets/img/facebook.png') ?>" alt="Professor Paulinho">
        </a>&nbsp;
        <a href="<?= base_url("/") ?>">
            <img style="width: 32px" src="<?= base_url('/assets/img/gplus.png') ?>" alt="Professor Paulinho">
        </a>
    </p>
</div>
<?= load_js(array("jquery", "owl.carousel", "bootstrap", "responsiveslides.min", "lightbox"), "/assets/js") ?>
<script>
    $(document).ready(function () {
        $("#owl-carousel ").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true
        });

        $("#slider4").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });

    //<![CDATA[
    bkLib.onDomLoaded(function () {
        nicEditors.allTextAreas()
    });
    //]]>
</script>
</div>
</body>
</html>