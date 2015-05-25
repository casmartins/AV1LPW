<?php

$id = intval($_REQUEST['id']);
$nome = htmlspecialchars($_REQUEST['nome']);
$sobrenome = htmlspecialchars($_REQUEST['sobrenome']);
$telefone = htmlspecialchars($_REQUEST['telefone']);
$email = htmlspecialchars($_REQUEST['email']);

include 'conn.php';

$sql = "update contatos set nome='$nome',sobrenome='$sobrenome',telefone='$telefone',email='$email' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'nome' => $nome,
		'sobrenome' => $sobrenome,
		'telefone' => $telefone,
		'email' => $email
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>