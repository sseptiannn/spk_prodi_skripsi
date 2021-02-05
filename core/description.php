<?php
/*
* File untuk menampung deskripsi dan title dinamis
* @ author CiptaHost
* ex:
* 
 if(!isset($_GET['val'])){
	$webtitle	= "judul_index";
	$description	= "deskripsi";
 }else{
 if($_GET['val']=="about")
  {
	$webtitle="judul";
	$description="deskripsi";
  }
 if($_GET['val']=="about")
  {
	$id 	= $_GET['id'];
	$query 	= mysql_query("SELECT * FROM artikel WHERE id='$id'");
	$get	= mysql_fetch_array($sapp);
	$webtitle = $get[2];
	$description=$get[2];
  }
 }	
//  yang diatas harus disesuaikan dengan tabel yang dimaksud
*/
/* ==========Main Page========= */
 if(!isset($_GET['val'])){
	$webtitle	= "judul_index";
	$description	= "deskripsi";
 }else{
/* ============================ */
 if($_GET['val']=="about")
  {
	$webtitle="judul";
	$description="deskripsi";
  }
 if($_GET['val']=="about")
  {
	$webtitle="judul untuk halaman about";
	$description="deskripsi untuk halaman about gituh.";
  }
 }	

?>
