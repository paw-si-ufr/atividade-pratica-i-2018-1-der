
function buscar(palavra)
{
	var page = "dados-busca.php";
	$.ajax
		({

			type: 'POST', 
			dataType: 'html',
			url: page,
			beforeSend: function(){
				$("#dados").html("Carregando...");
			},
			data: {palavra: palavra},
			success: function (msg)
			{
				$("#dados").html(msg);
			}


		});


}

$('#form-busca').submit(function(e) {
	e.preventDefault();
	
	buscar($("#palavra").val());
	});
	
