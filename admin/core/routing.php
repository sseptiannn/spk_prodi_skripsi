<?php if (!defined('BASEPATH')) exit('Nothing found here');
/*
 File berisi setting routing url yang digunakan untuk navigasi page di website 	
	contoh
	ex: if(isset($_GET['page'])&& $_GET['page']=='about'){require_once "application/front/about.php";}else
*/
/* Awal */

//MENU ADMIN  

if(isset($_GET['val'])&& $_GET['val']=='dashboard'){require_once "application/front/modules/dashboard/index.php";}else


if(isset($_GET['val'])&& $_GET['val']=='mapel'){require_once "application/front/modules/mapel/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='mapel-form'){require_once "application/front/modules/mapel/form.php";}else
if(isset($_GET['val'])&& $_GET['val']=='mapel-edit'){require_once "application/front/modules/mapel/edit.php";}else
if(isset($_GET['val'])&& $_GET['val']=='mapel-delete'){require_once "application/front/modules/mapel/delete.php";}else


if(isset($_GET['val'])&& $_GET['val']=='prodi'){require_once "application/front/modules/prodi/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='prodi-form'){require_once "application/front/modules/prodi/form.php";}else
if(isset($_GET['val'])&& $_GET['val']=='prodi-edit'){require_once "application/front/modules/prodi/edit.php";}else
if(isset($_GET['val'])&& $_GET['val']=='prodi-delete'){require_once "application/front/modules/prodi/delete.php";}else


if(isset($_GET['val'])&& $_GET['val']=='relasi'){require_once "application/front/modules/relasi/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='relasi-form'){require_once "application/front/modules/relasi/form.php";}else
if(isset($_GET['val'])&& $_GET['val']=='relasi-edit'){require_once "application/front/modules/relasi/edit.php";}else
if(isset($_GET['val'])&& $_GET['val']=='relasi-save'){require_once "application/front/modules/relasi/save.php";}else
if(isset($_GET['val'])&& $_GET['val']=='relasi-delete'){require_once "application/front/modules/relasi/delete.php";}else



if(isset($_GET['val'])&& $_GET['val']=='pengunjung'){require_once "application/front/modules/pengunjung/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='pengunjung-detail'){require_once "application/front/modules/pengunjung/detail.php";}else


if(isset($_GET['val'])&& $_GET['val']=='kelolaadmin'){require_once "application/front/modules/kelolaadmin/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='admin-form'){require_once "application/front/modules/kelolaadmin/form.php";}else
if(isset($_GET['val'])&& $_GET['val']=='admin-edit'){require_once "application/front/modules/kelolaadmin/edit.php";}else
if(isset($_GET['val'])&& $_GET['val']=='admin-password'){require_once "application/front/modules/kelolaadmin/password.php";}else
if(isset($_GET['val'])&& $_GET['val']=='admin-delete'){require_once "application/front/modules/kelolaadmin/delete.php";}else



/* Akhir */

?>
