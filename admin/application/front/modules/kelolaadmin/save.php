<?php
include '../../../../core/db.config.php';
//processing submit data
$cek = $db->query("select * from admin where username='" . $_POST['xusername'] . "' limit 1");
$num_cek = $cek->num_rows;
if($num_cek>0){
//fail
}else{
	$sql = $db->query("insert into admin set
						username='" . $_POST['xusername'] . "',
						password = '" . md5($_POST['xpassword']) . "',
						nama = '" . $_POST['nama'] . "'
					");
	if ($sql) {
		echo 'true';
	}
}
?>
