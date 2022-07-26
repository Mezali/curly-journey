$(document).ready(function() {
    $('#table-comprador').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "src/comprador/model/list-comprador.php",
            "type": "POST"
        },
        "language": {
            "url": "libs/DataTables/pt_br.json"
        },
        "columns": [{
                "data": 'ID',
                "className": 'text-center'
            },
            {
                "data": 'NOME',
                "className": 'text-center'
            },
            {
                "data": 'CELULAR',
                "className": 'text-center'
            },
            {
                "data": 'ID',
                "orderable": false,
                "searchable": false,
                "className": 'text-center',
                "render": function(data, type, row, meta) {
                    return `
                    <button id="${data}" class="btn btn-info btn-sm btn-view"><i class="fa fa-eye" aria-hidden="true"></i></i></button>
                    <button id="${data}" class="btn btn-primary btn-sm btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></i></button>
                    <button id="${data}" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash" aria-hidden="true"></i></i></button>
                    `
                }
            }
        ]
    })
})