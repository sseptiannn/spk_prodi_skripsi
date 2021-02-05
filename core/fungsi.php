<?php

// mencari ID kriteria
// berdasarkan urutan ke berapa (C1, C2, C3)
function getUserID($no_urut) {
	include('db.config.php');
	$query  = "SELECT id_pengguna FROM pengguna ORDER BY id_pengguna";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$listID[] = $row['id_pengguna'];
	}

	return $listID[($no_urut)];
}


function getKriteriaID($no_urut) {
	include('db.config.php');
	$query  = "SELECT id_kriteria FROM kriteria ORDER BY id_kriteria";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$listID[] = $row['id_kriteria'];
	}

	return $listID[($no_urut)];
}

// mencari ID alternatif
// berdasarkan urutan ke berapa (A1, A2, A3)
function getAlternatifID($no_urut) {
	include('db.config.php');
	$query  = "SELECT id_alternatif FROM alternatif ORDER BY id_alternatif";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$listID[] = $row['id_alternatif'];
	}

	return $listID[($no_urut)];
}

function getRelasiID($no_urut) {
	include('db.config.php');
	$query  = "SELECT id_relasi FROM relasi ORDER BY id_relasi";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$listID[] = $row['id_relasi'];
	}

	return $listID[($no_urut)];
}


function cekRelasi($id_alternatif) {
	include('db.config.php');
	$query  = "SELECT id_kriteria FROM relasi WHERE id_alternatif=$id_alternatif";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$listID[] = $row['id_kriteria'];
	}

	return $listID[($id_alternatif)];
}

// mencari nama kriteria
function getKriteriaNama($no_urut) {
	include('db.config.php');
	$query  = "SELECT nama FROM kriteria ORDER BY id_kriteria";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$nama[] = $row['nama'];
	}

	return $nama[($no_urut)];
}

// mencari nama alternatif
function getAlternatifNama($no_urut) {
	include('db.config.php');
	$query  = "SELECT nama_alternatif FROM alternatif ORDER BY id_alternatif";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$nama[] = $row['nama_alternatif'];
	}

	return $nama[($no_urut)];
}

// mencari priority vector kriteria
function getKriteriaPV($id_kriteria) {
	include('db.config.php');
	$query = "SELECT nilai FROM pv_kriteria WHERE id_kriteria=$id_kriteria";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		$pv = $row['nilai'];
	}

	return $pv;
}

// mencari nilai kriteria PV
function getKriteriaPVnilai($id_kriteria,$id_pengguna) {
	include('db.config.php');
	$query  = "SELECT nilai FROM pv_kriteria WHERE id_kriteria=$id_kriteria AND id_pengguna=$id_pengguna";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$pv = $row['nilai'];
	}

	return $pv;
}

function getHasil($id_alternatif,$id_pengguna) {
	include('db.config.php');
	$query  = "SELECT nilai FROM hasil WHERE id_alternatif=$id_alternatif AND id_pengguna=$id_pengguna";
	$result = mysqli_query($db, $query);

	while ($row = mysqli_fetch_array($result)) {
		$pv = $row['nilai'];
	}

	return $pv;
}


// mencari jumlah alternatif
function getJumlahAlternatif() {
	include('db.config.php');
	$query  = "SELECT count(*) FROM alternatif";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		$jmlData = $row[0];
	}

	return $jmlData;
}

// mencari jumlah kriteria
function getJumlahKriteria() {
	include('db.config.php');
	$query  = "SELECT count(*) FROM kriteria";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		$jmlData = $row[0];
	}

	return $jmlData;
}

function getJumlahRelasi() {
	include('db.config.php');
	$query  = "SELECT count(*) FROM relasi";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		$jmlData = $row[0];
	}
	return $jmlData;
}

// menambah data kriteria / alternatif
function tambahData($tabel,$nama) {
	include('db.config.php');

	$query 	= "INSERT INTO $tabel (nama) VALUES ('$nama')";
	$tambah	= mysqli_query($db, $query);

	if (!$tambah) {
		echo "Gagal mmenambah data".$tabel;
		exit();
	}
}

// hapus kriteria
function deleteKriteria($id) {
	include('db.config.php');

	// hapus record dari tabel kriteria
	$query 	= "DELETE FROM kriteria WHERE id_kriteria=$id";
	mysqli_query($db, $query);

	// hapus record dari tabel pv_kriteria
	$query 	= "DELETE FROM pv_kriteria WHERE id_kriteria=$id";
	mysqli_query($db, $query);

	// hapus record dari tabel pv_alternatif
	$query 	= "DELETE FROM pv_alternatif WHERE id_kriteria=$id";
	mysqli_query($db, $query);

	$query 	= "DELETE FROM perbandingan_kriteria WHERE kriteria1=$id OR kriteria2=$id";
	mysqli_query($db, $query);

	$query 	= "DELETE FROM perbandingan_alternatif WHERE pembanding=$id";
	mysqli_query($db, $query);
}

// hapus alternatif
function deleteAlternatif($id) {
	include('db.config.php');

	// hapus record dari tabel alternatif
	$query 	= "DELETE FROM alternatif WHERE id_alternatif=$id";
	mysqli_query($db, $query);

	// hapus record dari tabel pv_alternatif
	$query 	= "DELETE FROM pv_alternatif WHERE id_alternatif=$id";
	mysqli_query($db, $query);

	// hapus record dari tabel ranking
	$query 	= "DELETE FROM ranking WHERE id_alternatif=$id";
	mysqli_query($db, $query);

	$query 	= "DELETE FROM perbandingan_alternatif WHERE alternatif1=$id OR alternatif2=$id";
	mysqli_query($db, $query);
}

// memasukkan nilai priority vektor kriteria
function inputKriteriaPV ($id_kriteria,$pv,$id) {
	include ('db.config.php');

	//ambil ID pengguna
	$id_pengguna = $id;

	$query = "SELECT * FROM pv_kriteria WHERE id_kriteria=$id_kriteria AND id_pengguna=$id_pengguna";
	$result = mysqli_query($db, $query);

	if (!$result) {
		echo "Error !!!";
		exit();
	}

	// jika result kosong maka masukkan data baru
	// jika telah ada maka diupdate
	if (mysqli_num_rows($result)==0) {
		$query = "INSERT INTO pv_kriteria (id_kriteria,id_pengguna,nilai) VALUES ($id_kriteria,$id_pengguna,$pv)";
	} else {
		$query = "UPDATE pv_kriteria SET nilai=$pv WHERE id_kriteria=$id_kriteria AND id_pengguna=$id_pengguna";
	}

	$result = mysqli_query($db, $query);
	if(!$result) {
		echo "Gagal memasukkan / update nilai priority vector kriteria";
		exit();
	}
}

// memasukkan Hasil Analisa ke tabel hasil
function inputHasilAnalisa ($id_alternatif,$id_pengguna,$nilai) {
	include ('db.config.php');

	$query = "SELECT * FROM hasil WHERE id_alternatif=$id_alternatif AND id_pengguna=$id_pengguna";
	$result = mysqli_query($db, $query);

	if (!$result) {
		echo "Error !!!";
		exit();
	}
	// jika result kosong maka masukkan data baru
	// jika telah ada maka diupdate
	if (mysqli_num_rows($result)==0) {
		$query = "INSERT INTO hasil (id_alternatif,id_pengguna,nilai) VALUES ($id_alternatif,$id_pengguna,$nilai)";
	} else {
		$query = "UPDATE hasil SET nilai=$nilai WHERE id_alternatif=$id_alternatif AND id_pengguna=$id_pengguna";
	}
	$result = mysqli_query($db, $query);
	if(!$result) {
		echo "Gagal memasukkan / update Hasil Perhitungan";
		exit();
	}
}

function UpdateHasilPengguna($id_pengguna,$hasil){
	include ('db.config.php');

	$sql = $db->query("update pengguna set
					hasil = '" .$hasil. "'
					where id_pengguna='" .$id_pengguna. "'
				");
	if (!$sql) {
		echo "Gagal update Hasil di Tabel Pengguna";
	}else{
		// echo "Berhasil Update";
	}
}

// memasukkan bobot nilai perbandingan kriteria
function inputDataPerbandinganKriteria($kriteria1,$kriteria2,$nilai,$id) {
	include('db.config.php');

	$id_pengguna = $id;
	$id_kriteria1 = getKriteriaID($kriteria1);
	$id_kriteria2 = getKriteriaID($kriteria2);

	$query  = "SELECT * FROM perbandingan_kriteria WHERE kriteria1 = $id_kriteria1 AND kriteria2 = $id_kriteria2 AND id_pengguna = $id_pengguna";
	$result = mysqli_query($db, $query);

	if (!$result) {
		echo "Error !!!";
		exit();
	}

	// jika result kosong maka masukkan data baru
	// jika telah ada maka diupdate
	if (mysqli_num_rows($result)==0) {
		$query = "INSERT INTO perbandingan_kriteria (id_pengguna,kriteria1,kriteria2,nilai) VALUES ($id_pengguna,$id_kriteria1,$id_kriteria2,$nilai)";
	} else {
		$query = "UPDATE perbandingan_kriteria SET nilai=$nilai WHERE kriteria1=$id_kriteria1 AND kriteria2=$id_kriteria2 AND id_pengguna=$id_pengguna";
	}

	$result = mysqli_query($db, $query);
	if (!$result) {
		echo "Gagal memasukkan data perbandingan";
		exit();
	}

}

// memasukkan NILAI RAPOR PENGGUNA
function inputDataNilaiRapor($id_pengguna,$idkriteria,$smstrtiga,$smstrempat,$smstrlima) {
	include('db.config.php');

	$query = "SELECT * FROM nilai_rapor WHERE id_pengguna = $id_pengguna AND id_kriteria = $idkriteria";
	$result = mysqli_query($db, $query);

	if (!$result) {
		echo "Error !!!";
		exit();
	}

	// jika result kosong maka masukkan data baru
	// jika telah ada maka diupdate
	if (mysqli_num_rows($result)==0) {
		$query = "INSERT INTO nilai_rapor (id_pengguna,id_kriteria,n_smstrtiga,n_smstrempat,n_smstrlima) VALUES ($id_pengguna,$idkriteria,$smstrtiga,$smstrempat,$smstrlima)";
	} else {
		$query = "UPDATE nilai_rapor SET n_smstrtiga='$smstrtiga',n_smstrempat='$smstrempat',n_smstrlima='$smstrlima' WHERE id_pengguna=$id_pengguna AND id_kriteria=$idkriteria";
	}

	$result = mysqli_query($db, $query);
	if (!$result) {
		echo "Gagal memasukkan data perbandingan";
		exit();
	}

}

// memasukkan bobot nilai perbandingan alternatif
function inputDataPerbandinganAlternatif($alternatif1,$alternatif2,$pembanding,$nilai) {
	include('db.config.php');


	$id_alternatif1 = getAlternatifID($alternatif1);
	$id_alternatif2 = getAlternatifID($alternatif2);
	$id_pembanding  = getKriteriaID($pembanding);

	$query  = "SELECT * FROM perbandingan_alternatif WHERE alternatif1 = $id_alternatif1 AND alternatif2 = $id_alternatif2 AND pembanding = $id_pembanding";
	$result = mysqli_query($db, $query);

	if (!$result) {
		echo "Error !!!";
		exit();
	}

	// jika result kosong maka masukkan data baru
	// jika telah ada maka diupdate
	if (mysqli_num_rows($result)==0) {
		$query = "INSERT INTO perbandingan_alternatif (alternatif1,alternatif2,pembanding,nilai) VALUES ($id_alternatif1,$id_alternatif2,$id_pembanding,$nilai)";
	} else {
		$query = "UPDATE perbandingan_alternatif SET nilai=$nilai WHERE alternatif1=$id_alternatif1 AND alternatif2=$id_alternatif2 AND pembanding=$id_pembanding";
	}

	$result = mysqli_query($db, $query);
	if (!$result) {
		echo "Gagal memasukkan data perbandingan";
		exit();
	}

}

// mencari nilai bobot perbandingan kriteria
function getNilaiPerbandinganKriteria($kriteria1,$kriteria2) {
	include('db.config.php');

	$id_kriteria1 = getKriteriaID($kriteria1);
	$id_kriteria2 = getKriteriaID($kriteria2);

	$query  = "SELECT nilai FROM perbandingan_kriteria WHERE kriteria1 = $id_kriteria1 AND kriteria2 = $id_kriteria2";
	$result = mysqli_query($db, $query);

	if (!$result) {
		echo "Error !!!";
		exit();
	}

	if (mysqli_num_rows($result)==0) {
		$nilai = 1;
	} else {
		while ($row = mysqli_fetch_array($result)) {
			$nilai = $row['nilai'];
		}
	}

	return $nilai;
}

// mencari nilai bobot perbandingan alternatif
function getNilaiPerbandinganAlternatif($alternatif1,$alternatif2,$pembanding) {
	include('db.config.php');

	$id_alternatif1 = getAlternatifID($alternatif1);
	$id_alternatif2 = getAlternatifID($alternatif2);
	$id_pembanding  = getKriteriaID($pembanding);

	$query  = "SELECT nilai FROM perbandingan_alternatif WHERE alternatif1 = $id_alternatif1 AND alternatif2 = $id_alternatif2 AND pembanding = $id_pembanding";
	$result = mysqli_query($db, $query);

	if (!$result) {
		echo "Error !!!";
		exit();
	}
	if (mysqli_num_rows($result)==0) {
		$nilai = 1;
	} else {
		while ($row = mysqli_fetch_array($result)) {
			$nilai = $row['nilai'];
		}
	}

	return $nilai;
}

// menampilkan nilai IR
function getNilaiIR($jmlKriteria) {
	include('db.config.php');
	$query  = "SELECT nilai FROM ir WHERE jumlah=$jmlKriteria";
	$result = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($result)) {
		$nilaiIR = $row['nilai'];
	}

	return $nilaiIR;
}

// mencari Principe Eigen Vector (λ maks)
function getEigenVector($matrik_a,$matrik_b,$n) {
	$eigenvektor = 0;
	for ($i=0; $i <= ($n-1) ; $i++) {
		$eigenvektor += ($matrik_a[$i] * (($matrik_b[$i]) / $n));
	}

	return $eigenvektor;
}

// mencari Cons Index
function getConsIndex($matrik_a,$matrik_b,$n) {
	$eigenvektor = getEigenVector($matrik_a,$matrik_b,$n);
	$consindex = ($eigenvektor - $n)/($n-1);

	return $consindex;
}

// Mencari Consistency Ratio
function getConsRatio($matrik_a,$matrik_b,$n) {
	$consindex = getConsIndex($matrik_a,$matrik_b,$n);
	$consratio = $consindex / getNilaiIR($n);

	return $consratio;
}

// menampilkan tabel perbandingan bobot
function showTabelPerbandingan($jenis,$kriteria) {
	include('db.config.php');

	if ($kriteria == 'kriteria') {
		$n = getJumlahKriteria();
	} else {
		$n = getJumlahAlternatif();
	}

	$query = "SELECT nama FROM $kriteria ORDER BY id_kriteria";
	$result	= mysqli_query($db, $query);
	if (!$result) {
		echo "Error koneksi database!!!";
		exit();
	}

	// buat list nama pilihan
	while ($row = mysqli_fetch_array($result)) {
		$pilihan[] = $row['nama'];
	}

	// tampilkan tabel
	?>

	<form action="application/front/modules/m_ahp/proses.php" method="post">

		<div class="table-responsive">
		  <table class="table table-hover">
		    <thead class="table-head">
				<tr>
					<th class="serial">Pilih yang lebih diminati</th>
					<th class="country"> </th>
					<th class="country"> Nilai (1 - 9)</th>
				</tr>
			</thead>

			<tbody>
				<?php
				//inisialisasi
				$urut = 0;

				for ($x=0; $x <= ($n - 2); $x++) {
					for ($y=($x+1); $y <= ($n - 1) ; $y++) {

						$urut++;
				?>
				<tr>
					<td>
						<div class="field">
							<div class="radio">
								<input name="pilih<?php echo $urut?>" value="1" checked="" class="hidden" type="radio">
								<label><?php echo $pilihan[$x]; ?></label>
							</div>
						</div>
					</td>
					<td>
						<div class="field">
							<div class="ui radio checkbox">
								<input name="pilih<?php echo $urut?>" value="2" class="hidden" type="radio">
								<label><?php echo $pilihan[$y]; ?></label>
							</div>
						</div>
					</td>
					<td>
						<div class="field">
							<?php
							if ($kriteria == 'kriteria') {
								$nilai = getNilaiPerbandinganKriteria($x,$y);
							} else {
								$nilai = getNilaiPerbandinganAlternatif($x,$y,($jenis-1));
							}

							?>
							<input type="text" class="single-input-primary" max="9" min="0" name="bobot<?php echo $urut?>" value="<?php echo $nilai?>" required >
						</div>
					</td>
				</tr>
				<?php
					}
				}

				?>
			</tbody>

		</table>
		</div>
		<input type="text" name="jenis" value="<?php echo $jenis; ?>" hidden>
		<br><br>
		<input class="genric-btn primary circle" type="submit" name="submit" value="SUBMIT">
	</form>

	<?php
}

?>
