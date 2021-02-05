<?php
include '../../../../core/db.config.php';
//processing submit data

$sql = $db->query("update alternatif set
					nama_alternatif = '" . $_POST['nama_prodi'] . "'
					where id_alternatif='" . $_POST['id'] ."'
				");
if ($sql) {
	echo 'true';
}

?>
