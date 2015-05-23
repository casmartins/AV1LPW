<form>
	Nome: <input type="text" id="nome"><br />
	Sobrenome: <input type="text" id="sobrenome"><br />
	Telefone: <input type="text" id="telefone"><br />
	Email: <input type="text" id="email"><br />
	<input type="button" value="Salvar" onclick="enviarNovo()">
</form>
<?php
	include "conn.php";


// editar vai ser igual com uma diferença, fazer parecido com o que tem no lista.php