<?php
include '../../../../core/db.config.php';
//processing submit data
$sql = $db->query("update admin set
					nama = '" . $_POST['nama'] . "'
					where id_admin='" . $_POST['id'] . "'
				");
if ($sql) {
	echo 'true';
}

?>
