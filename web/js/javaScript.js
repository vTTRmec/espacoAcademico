
// function funcao(){
	
// 	$.ajax({
// 		url: '../template/modalDisciplina.php',
// 		success: function(data){
// 			$('#div_conteudo').html(data);
// 		}
// 	});
// }



function goToHome(){
	window.location.href = "../index.php";
}

function portugues(){
	window.location.href = "../disciplinas/port.php";
}

function matematica(){
	window.location.href = "../disciplinas/mat.php";
}

function historia(){
	window.location.href = "../disciplinas/hist.php";
}

function geografia(){
	window.location.href = "../disciplinas/geo.php";
}


function chamada(status) {

	var element = document.getElementById("iconChamada");
	var elementFalta = document.getElementById("iconChamadaFalta");

	if(status == 'presente'){
		element.classList.add("w3-text-teal");
		element.classList.remove("w3-text-grey");

		elementFalta.classList.add("w3-text-grey");
		elementFalta.classList.remove("w3-text-red");
	} 
	if(status == 'ausente'){
		elementFalta.classList.add("w3-text-red");
		elementFalta.classList.remove("w3-text-grey");

		element.classList.add("w3-text-grey");
		element.classList.remove("w3-text-teal");
	}

}

function chamada1(status) {
	var element1 = document.getElementById("iconChamada1");
	var elementFalta1 = document.getElementById("iconChamadaFalta1");

	if(status == 'presente'){
		element1.classList.add("w3-text-teal");
		element1.classList.remove("w3-text-grey");

		elementFalta1.classList.add("w3-text-grey");
		elementFalta1.classList.remove("w3-text-red");
	} 
	if(status == 'ausente'){
		elementFalta1.classList.add("w3-text-red");
		elementFalta1.classList.remove("w3-text-grey");

		element1.classList.add("w3-text-grey");
		element1.classList.remove("w3-text-teal");
	}
}

function chamada2(status) {
	var element2 = document.getElementById("iconChamada2");
	var elementFalta2 = document.getElementById("iconChamadaFalta2");

	if(status == 'presente'){
		element2.classList.add("w3-text-teal");
		element2.classList.remove("w3-text-grey");

		elementFalta2.classList.add("w3-text-grey");
		elementFalta2.classList.remove("w3-text-red");
	} 
	if(status == 'ausente'){
		elementFalta2.classList.add("w3-text-red");
		elementFalta2.classList.remove("w3-text-grey");

		element2.classList.add("w3-text-grey");
		element2.classList.remove("w3-text-teal");
	}
}

function botaoConfirmar(){
	$('#textoChamada').html('Chamada realizada com sucesso! <i class="fa fa-check-circle fa-fw w3-xxlarge w3-text-green"> </i>');	
	setTimeout(function(){
  		//$('#textoChamada').hide();
  		location.reload();
	}, 1500);
}

function botaoCancelar(){
	$('#textoChamada').html('Chamada cancelada com sucesso! <i class="fa fa-times fa-fw w3-xxlarge w3-text-red"> </i>');
	setTimeout(function(){
  		//$('#textoChamada').hide();
  		location.reload();
	}, 1500);	
}