$(document).ready(function(){
	 var example = $('table.display').DataTable({
	 	language: { 
	 		search: "",
	 		searchPlaceholder: "Search" 
	 	},
	 	columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
	        style: 'multi',
	        selector: 'td:first-child'
	    },
	    dom: 'Bfrtip',
	    buttons: [
	        'selectAll',
	        'selectNone'
	    ],
	    "order": [[0, 'desc']]
	 });

	 example.on("click", ".checkbox-all input", function() {
	    if ($("th.select-checkbox").hasClass("selected")) {
	        example.rows().deselect();
	        $("th.select-checkbox").removeClass("selected");
	    } else {
	        example.rows().select();
	        $("th.select-checkbox").addClass("selected");
	    }
	}).on("select deselect", function() {
	    ("Some selection or deselection going on")
	    if (example.rows({
	            selected: true
	        }).count() !== example.rows().count()) {
	        $("th.select-checkbox").removeClass("selected");
	    } else {
	        $("th.select-checkbox").addClass("selected");
	    }
	});
});