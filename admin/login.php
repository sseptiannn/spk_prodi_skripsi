<?php
session_start();
/**
	auth created by eri
**/
error_reporting(E_ALL);

	define('BASEPATH','true');

include("core/config.php");
include("core/function.global.php");
include("core/function.db.php");
include("core/db.config.php");
include("core/description.php");
include("core/class_paging.php");
include("application/template/login.php");
?>
