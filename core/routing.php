<?php if (!defined('BASEPATH')) exit('Nothing found here');
/*
 File berisi setting routing url yang digunakan untuk navigasi page di website 	
	contoh
	ex: if(isset($_GET['page'])&& $_GET['page']=='about'){require_once "application/front/about.php";}else
*/
/* Awal */

//MENU ADMIN  

if(isset($_GET['val'])&& $_GET['val']=='dashboard'){require_once "application/front/modules/dashboard/index.php";}else


if(isset($_GET['val'])&& $_GET['val']=='pilihprodi'){require_once "application/front/modules/pilihprodi/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='pilihprodi-kategori'){require_once "application/front/modules/pilihprodi/kategori.php";}else


if(isset($_GET['val'])&& $_GET['val']=='m_ahp'){require_once "application/front/modules/m_ahp/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='m_ahp_proses'){require_once "application/front/modules/m_ahp/proses.php";}else
if(isset($_GET['val'])&& $_GET['val']=='m_ahp_output'){require_once "application/front/modules/m_ahp/output.php";}else


if(isset($_GET['val'])&& $_GET['val']=='m_wp'){require_once "application/front/modules/m_wp/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='m_wp_proses'){require_once "application/front/modules/m_wp/proses.php";}else


if(isset($_GET['val'])&& $_GET['val']=='petunjuk'){require_once "application/front/modules/petunjuk/index.php";}else
if(isset($_GET['val'])&& $_GET['val']=='tentang'){require_once "application/front/modules/tentang/index.php";}else

if(isset($_GET['val'])&& $_GET['val']=='janabadra'){ header('Location: https://janabadra.ac.id/') ;}else


/* Akhir */

?>
