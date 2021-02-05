<?php
//delete data
$sql = $db->query("delete from alternatif where id_alternatif='".$_GET['id']."'");
redirect("prodi");
?>
