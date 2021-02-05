<?php
include '../../../../core/db.config.php';
//processing submit data

$sql = $db->query("insert into alternatif set
						nama_alternatif = '" . $_POST['nama_prodi'] . "'
				");
if ($sql) {
	echo 'true';
}

?>
