<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from contatos where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>