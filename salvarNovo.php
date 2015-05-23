<?php
	include "conn.php";
	$nome = $_GET["nome"];
	$sobrenome = $_GET["sobrenome"];
	$telefone = $_GET["telefone"];
	$email = $_GET["email"];

	$sql = "insert into contatos (nome, sobrenome, telefone, email) values ('$nome','$sobrenome','$telefone','$email')";
	mysql_query($sql);
	