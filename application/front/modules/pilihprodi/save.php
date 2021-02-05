<?php
include '../../../../core/db.config.php';
//processing submit data

$sql = $db->query("insert into pengguna set
						nama = '" . $_POST['nama_siswa'] . "',
						asal_sklh = '" . $_POST['asal'] . "',
						hasil = 'Kosong'
				");
if ($sql) {
	$sql = $db->query("select MAX(id_pengguna) as id_pengguna from pengguna ");
    $row=mysqli_fetch_assoc($sql);

	// redirect('m_ahp');
	// echo 'true';
	 echo '<script>window.location.replace("../../../../m_ahp/'.$row['id_pengguna'].'");</script>';
}

?>
