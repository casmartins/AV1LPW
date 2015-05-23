<h1>Agenda de Contatos</h1>
<br />
<input type="button" value="Novo Contato" onclick="criarNovo()">
<table border="1" bordercolor="black" bgcolor="lightgray">
	<thead>
		<tr>
			<td></td>
			<td>NOME</td>
			<td>SOBRENOME</td>
			<td>TELEFONE</td>
			<td>EMAIL</td>
		</tr>
	</thead>
	<tbody>
	<?php
		include "conn.php";
		$sql = "select * from contatos";
		$result = mysql_query($sql);
		while ( $linha = mysql_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td> <input type='button' value='Alterar' onclick='editar(".$linha["id"].")'></td>";
			echo "<td>".$linha["nome"]."</td>";
			echo "<td>".$linha["sobrenome"]."</td>";
			echo "<td>".$linha["telefone"]."</td>";
			echo "<td>".$linha["email"]."</td>";
			echo "</tr>";
		}
	?>
	</tbody>






</table>

