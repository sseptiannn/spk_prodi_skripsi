<?php
//delete data
$sql = $db->query("delete from kriteria where id_kriteria='".$_GET['id']."'");
redirect("mapel");
?>
