const log = console.log

$('#clientName').change(() => {
    getDataTable()
});

$('#previousPage').on('click', () => {
    getDataTable("-")
});

$('#nextPage').on('click', () => {
    getDataTable("+")
});

function getDataTable(action = null) {

    let client = $('#clientName').val()
    let nPage = $('#pageNumber').text()

    if (action == "+") {
        nPage++
    } else if (action == "-") {
        nPage--
    }

    $('#pageNumber').text(nPage)
    nPage = nPage - 1

    $.getJSON('main/getFilteredContractList/' + client + '/' + nPage, (data) => {
        let output = `<table class="table">
        <thead class="thead-dark">
        <tr><th scope="col">#</th><th>SAP id</th><th>Cliente</th><th>Descripción</th><th>Fecha Inicio</th><th>Fecha Fin</th></tr>
        </thead>
        <tbody>`

        $.each(data, function (key, val) {
            output += '<tr>' + '<th scope="row">' + key + '</th>' + '<td>' + val.contract_sap_id + '</td>' + '<td>' + val.client_name + '</td>' + '<td>' + val.contract_description + '</td>' + '<td>' + val.contract_start_date + '</td>' + '<td>' + val.contract_end_date + '</td>' + '</tr>'
        })

        output += '</tbody></table>'

        if (nPage == 0) {
            $('#previousPage').attr('disabled', true)
        } else {
            $('#previousPage').attr('disabled', false)
        }

        if (data.length < 10) {

            $('#nextPage').attr('disabled', true)
        } else {

            $('#nextPage').attr('disabled', false)
        }

        $('#contractList').html(output)

    })
}


