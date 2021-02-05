<?php
include '../../../../core/db.config.php';
//processing submit data

$sql = $db->query("update kriteria set
					nama = '" . $_POST['nama_mapel'] . "'
					where id_kriteria='" . $_POST['id'] . "'
				");
if ($sql) {
	echo 'true';
}

?>
