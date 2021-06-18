$(document).ready(function() {
    var table = $('table.display').DataTable({
        language: {
            search: "",
            searchPlaceholder: "Search"
        },
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'multi',
            selector: 'td:first-child'
        },
        dom: 'Bfrtip',
        buttons: [
            'selectAll',
            'selectNone'
        ],
        "order": [
            [0, 'desc']
        ]
    });
    minDate = new DateTime($('#min'), {
        format: 'DD/MM/YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'DD/MM/YYYY'
    });
    $('#min, #max').on('change', function() {
        table.draw();
    });
    table.on("click", ".checkbox-all input", function() {
        if ($("th.select-checkbox").hasClass("selected")) {
            table.rows().deselect();
            $("th.select-checkbox").removeClass("selected");
        } else {
            table.rows().select();
            $("th.select-checkbox").addClass("selected");
        }
    }).on("select deselect", function() {
        ("Some selection or deselection going on")
        if (table.rows({
                selected: true
            }).count() !== table.rows().count()) {
            $("th.select-checkbox").removeClass("selected");
        } else {
            $("th.select-checkbox").addClass("selected");
        }
    });
});