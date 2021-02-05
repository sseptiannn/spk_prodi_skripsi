<?php 
include 'core/db.config.php';
	
# Baca variabel Form 
$TxtKodeH    = $_POST['TxtKodeH'];
$CekMapel 	 = $_POST['CekMapel'];

# Validasi Form
if (trim($TxtKodeH)=="") {
	
	echo '<div class="container"><div class="isi alert alert-danger role=alert">
	<b>Program Studi belum dipilih, ulangi kembali</b>
	</div></div>';
	echo 'true';
	// include "index.php";
}
else {
   $jum  = count($CekMapel);
	// $jum =10;
   if ($jum==0) {
	 echo '<div class="container"><div class="isi alert alert-danger role=alert">
	<b>Belum Ada Mata Pelajaran yang dipilih !</b>
	</div></div>';
   }
   else {
	 #UNTUK MENGHAPUS YANG TIDAK DIPILIH LAGI
     // Kode untuk mendata relasi
   	 $sqlpil = $db->query("select * from relasi where id_alternatif = '" . $TxtKodeH . "' ");
	 while ($datapil=$sqlpil->fetch_assoc()){
	    // Kode untuk mengurai MAPEL yang dipilih
	    for ($i = 0; $i < $jum; $i++) {	
		// Perintah untuk menghapus Relasi
		if ($datapil['id_kriteria'] != $CekMapel[$i]) {

		   $sqldel = $db->query("delete from relasi where id_relasi = '" . $datapil['id_relasi'] . "'");
		  }
		}
	 }
		
	# UNTUK DATA MATA PELAJARAN TAMBAHAN
	for ($i = 0; $i < $jum; $i++) {	
	     // Perintah untuk mendapat relasi		
	     $sqlr  = $db->query("select * from relasi where id_alternatif = '" . $TxtKodeH . "' AND id_kriteria = '". $CekMapel[$i] ."' ");
	     $cocok = mysqli_num_rows($sqlr);
		 
           // MAPEL yang baru akan disimpan
	     if ($cocok < 1) {

	     $sql = $db->query("insert into relasi set
						id_alternatif = '" . $TxtKodeH . "',
						id_kriteria = '" . $CekMapel[$i] . "'
				");
					
	     }
	  }		
       // Pesan sebagai konfirmasi	
       	
	  echo '<div class="container"><div class="isi alert alert-success role=alert">
	<b>SUKSES DISIMPAN</b>
	</div></div>';
	echo 'true';	
	// include "admin/index.php";
	  
	}
}
?>
