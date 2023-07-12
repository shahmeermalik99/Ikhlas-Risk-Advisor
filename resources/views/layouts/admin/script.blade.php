<script src="{{ asset('admin/js/jquery.js')}}"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>-->
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.js"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>

     <script>
        let windowSize = window.matchMedia("(max-width: 576px)")
        let windowSize2 = window.matchMedia("(min-width: 577px)")

         
        $(document).ready(function () {
            if (windowSize2.matches) {
                $('#web_app').DataTable({
                    dom:"Bfrtip",
                    language: { search: "", searchPlaceholder: "Search" },
                    buttons: [
                        {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                        }
                    ]
                });
            }

            $("#web_app_filter label").prepend('<i class="bi bi-search"></i>')
            if (windowSize.matches) {
                $('#web_app').DataTable({
                    dom:"Bfrtip",
                    language: { search: "", searchPlaceholder: "Search" },
                    scrollX: true,
                    buttons: [
                        {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                        }
                ]
                });
            }
        });

    </script>