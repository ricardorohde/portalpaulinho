<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    //]]>

    $(document).ready(function () {
        $("#listagem").dataTable({
            "oLanguage": {
                "sSearch": "Pesquisar: ",
                "sProcessing":   "Processando...",
                "sLengthMenu":   "Exibir _MENU_ registros",
                "sZeroRecords":  "Não foram encontrados resultados",
                "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros"
            },
            "oPaginate": {
                "sFirst":    "«« Primeiro",
                "sPrevious": "« Anterior",
                "sNext":     "Seguinte »",
                "sLast":     "Último »»"
            },
            "sScrollY": "400px",
            "sScrollX": "100%",
            "sScrollXInner": "100%",
            "bPaginate": false,
            "aaSorting": [[0, "asc"]]
        });
    });
    $(document).ready(function(){
        $('#listagem').DataTable();
    });
</script>
</div>
</body>
</html>