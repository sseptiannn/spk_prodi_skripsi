<?php
include '../../../../core/db.config.php';
//processing submit data
$sql_open = $db->query("select * from admin where id_admin='" . $_POST['id'] . "' limit 1");
$row_open = $sql_open->fetch_assoc();

if(md5($_POST['old'])==md5($row_open['password'])){
	if(md5($_POST['new'])==md5($_POST['renew'])){
		$sql = $db->query("update admin set
					password = '" . md5($_POST['renew']) . "'
					where id_admin='" . $_POST['id'] . "'");
		if ($sql) {
			echo 'true';
		}
		else{
			echo "Gagal update password";
		}
	}
}


?>
