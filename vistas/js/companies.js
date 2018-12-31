var table;

function init(){

    getCompanies();

    $("#companyForm").on("submit", function(e){
        save(e);
    });

    $("#add_buton").click(function(){
        $(".modal-title").text("Agregar Empresa");
    });
}

function clean(){
    $('#name').val("");
    $('#rfc').val("");
    $('#street').val("");
    $('#internal_number').val("");
    $('#external_number').val("");
    $('#colony').val("");
    $('#municipality').val("");
    $('#zip_code').val("");
    $('#state').val("");
    $('#country').val("");
    $('#mail1').val("");
    $('#mail2').val("");
    $('#mail3').val("");
}

function getCompanies(){
	table=$('#company_data').dataTable(
	{
		"aProcessing": true,
	    "aServerSide": true,
	    dom: 'Bfrtip',
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/company.php?op=getCompanies',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"responsive": true,
		"bInfo":true,
		"iDisplayLength": 10,
	    "order": [[ 0, "desc" ]],
	    
	    "language": {
 			    "sProcessing":     "Procesando...",			 
			    "sLengthMenu":     "Mostrar _MENU_ registros",			 
			    "sZeroRecords":    "No se encontraron resultados",			 
			    "sEmptyTable":     "Ningún dato disponible en esta tabla",			 
			    "sInfo":           "Mostrando un total de _TOTAL_ registros",			 
			    "sInfoEmpty":      "Mostrando un total de 0 registros",			 
			    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			    "sInfoPostFix":    "",
			    "sSearch":         "Buscar:",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                
			    "oPaginate": {
			        "sFirst":    "Primero",
			        "sLast":     "Último",
			        "sNext":     "Siguiente",
			        "sPrevious": "Anterior"
                },
                
			    "oAria": {
			        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			    }
			   }
	}).DataTable();
}

function save(e){
	e.preventDefault();
    var formData = new FormData($("#companyForm")[0]);
    
		$.ajax({
			url: "../ajax/company.php?op=save",
		    type: "POST",
		    data: formData,
		    contentType: false,
		    processData: false,
		    success: function(datos){                    
		         console.log(datos);

	            $('#companyForm')[0].reset();
				$('#companyModal').modal('hide');
				$('#resultados_ajax').html(datos);
				$('#company_data').DataTable().ajax.reload();
		    }
		});    
}

init();