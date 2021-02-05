<?php
include '../../../../core/db.config.php';
//processing submit data

$sql = $db->query("insert into kriteria set
						nama = '" . $_POST['nama_mapel'] . "'
				");
if ($sql) {
	echo 'true';
}

?>
