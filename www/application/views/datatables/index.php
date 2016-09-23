<table id="table_id" class="display dataTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Добавлен</th>
            <th>Вопрос</th>
            <th>Коммент</th>
            <th>Ответ</th>
            <th>След.повтор</th>
            <th>Баллов</th>
            <th>Посл.рез.</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Добавлен</th>
            <th>Вопрос</th>
            <th>Коммент</th>
            <th>Ответ</th>
            <th>След.повтор</th>
            <th>Баллов</th>
            <th>Посл.рез.</th>
        </tr>
    </tfoot>
    <tbody>
    </tbody>
</table>

<script>
    var data = [
        [
            "Tiger Nixon",
            "System Architect"
        ],
        [
            "Garrett Winters",
            "Director"
        ]
    ];

//    $(document).ready( function () {
//        $('#table_id').DataTable( {
//            data: data
//        } );
//    } );

    $(document).ready( function () {
//        $('#table_id tfoot th').each( function () {
//            var title = $(this).text();
//            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
//        } );

        var table = $('#table_id').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "/datatables/browse",
            "columns": [
                { "searchable": true,
                    "width": "2%"
                },
                null,
                null,
                null,
                null,
                null,
                { "width": "2%" },
                { "width": "2%" }
            ],
            "order": [[ 0, "desc" ]]
        } );

//        table.columns().every( function () {
//            var that = this;
//
//            $( 'input', this.footer() ).on( 'keyup change', function () {
//                if ( that.search() !== this.value ) {
//                    that
//                        .search( this.value )
//                        .draw();
//                }
//            } );
//        } );
    } );
</script>