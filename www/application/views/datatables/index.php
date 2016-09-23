<table id="table_id" class="display dataTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Дата создания</th>
            <th>Вопрос</th>
            <th>Ответ</th>
            <th>Следующее повторение</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Дата создания</th>
            <th>Вопрос</th>
            <th>Ответ</th>
            <th>Следующее повторение</th>
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
        $('#table_id tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );

        var table = $('#table_id').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "/datatables/browse",
            "columns": [
                { "searchable": true },
                null,
                null,
                null,
                null
            ],
            "order": [[ 0, "desc" ]]
        } );

        table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
</script>