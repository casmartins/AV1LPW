<?php

$nome = htmlspecialchars($_REQUEST['nome']);
$sobrenome = htmlspecialchars($_REQUEST['sobrenome']);
$telefone = htmlspecialchars($_REQUEST['telefone']);
$email = htmlspecialchars($_REQUEST['email']);

include 'conn.php';

$sql = "insert into contatos(nome,sobrenome,telefone,email) values('$nome','$sobrenome','$telefone','$email')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
		'nome' => $nome,
		'sobrenome' => $sobrenome,
		'telefone' => $telefone,
		'email' => $email
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>