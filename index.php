<?php
session_start();
/*
 File induk yang akan dipanggil ketika web diakses
*/
define('BASEPATH','true');
include("core/config.php");
include("core/function.global.php");
include("core/function.db.php");
include("core/fungsi.php");
include("core/db.config.php");
include("core/description.php");
include "application/template/index.php";

?>
