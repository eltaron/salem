<script src="{{asset('admin')}}/vendors/jquery/dist/jquery.min.js"></script>
<script src="{{asset('admin')}}/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('admin')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('admin')}}/assets/js/main.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#datatableid').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
            }
        });
    });
</script>
@stack('script')
</body>
</html>
