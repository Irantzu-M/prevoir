<!-- LIBRERÍAS -->
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Datatables (tablas ordenables) -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<!-- Daterangepicker Calendario (rango de fechas) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<!-- Autocompleter JqueryUI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


<script>
    $(document).ready(function () {
        $('.data-table').DataTable({
            "bLengthChange": false,
            searching: false
        });
        $('.datepicker-field').daterangepicker({
        }, function (start, end, label) {
            //console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });

        $('.select2-selector').select2();
    });
</script>