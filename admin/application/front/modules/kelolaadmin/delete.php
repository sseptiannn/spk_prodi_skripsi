<?php
//delete data
$sql = $db->query("delete from admin where id_admin='".$_GET['id']."'");
redirect("kelolaadmin");
?>
