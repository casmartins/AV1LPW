function criarNovo(){
	$(".container").load("novo.php");
}

function enviarNovo(){
	var nome = $("#nome").val();
	var sobrenome = $("#sobrenome").val();
	var telefone = $("#telefone").val();
	var email = $("#email").val();

	var dados = {nome: nome, sobrenome: sobrenome, telefone: telefone, email: email};

/*
	var params = {data: dados, datatype: "text"};
	$.ajax("salvarNovo.php", params)
	.done(minhafuncao);

*/
	$.ajax("salvarNovo.php",{data: dados, dataType: "text"})
	.done(function(retorno){
		alert("Contato salvo com sucesso!");
		$(".container").load("lista.php");
	});
}

function editar(id){

	// montar objeto 'dados'
	var dados = {id: id};
	// chamar ajax para o arquivo 'editar.php'
	$.ajax("editar.php",{data: dados, dataType: "text"})
	.done(function(retorno){
		alert("Contato alterado com sucesso!");
		$(".container").html(retorno);
	});
	// dentro do 'done'
	// $('.container').html(retorno);
}