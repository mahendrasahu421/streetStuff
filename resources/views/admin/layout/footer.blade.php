
</div>

</div>
<!-- core js file -->
<script src="{{ asset('admin-asset/bundles/libscripts.bundle.js') }}"></script>

<script src="{{ asset('admin-asset/bundles/dataTables.bundle.js') }}"></script>

<!-- page js file -->
<script src="{{ asset('admin-asset/bundles/mainscripts.bundle.js') }}"></script>
{{-- <script>
    $(document).ready( function () {
        $('#myTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    });
</script> --}}
<script src="{{ asset('admin-asset/js/pages/index.js') }}"></script>
</body>

</html>