<?php
$id_pengguna = $_POST['id_pengguna'];

if (isset($_POST['submit'])) {

	// jumlah kriteria    jenis
	$n		= getJumlahKriteria();
	
	//ambil ID PENGGUNA
		

	// memetakan nilai ke dalam bentuk matrik
	// x = baris
	// y = kolom
	$matrik = array();
	$urut 	= 0;

	for ($x=0; $x <= ($n-2) ; $x++) {
		for ($y=($x+1); $y <= ($n-1) ; $y++) {
			$urut++;
			$pilih	= "pilih".$urut;
			$bobot 	= "bobot".$urut;
			if ($_POST[$pilih] == 1) {
				$matrik[$x][$y] = $_POST[$bobot];
				$matrik[$y][$x] = 1 / $_POST[$bobot];
			} else {
				$matrik[$x][$y] = 1 / $_POST[$bobot];
				$matrik[$y][$x] = $_POST[$bobot];
			}
			inputDataPerbandinganKriteria($x,$y,$matrik[$x][$y],$id_pengguna);
		}
	}

	// diagonal --> bernilai 1
	for ($i = 0; $i <= ($n-1); $i++) {
		$matrik[$i][$i] = 1;
	}

	// inisialisasi jumlah tiap kolom dan baris kriteria
	$jmlmpb = array();
	$jmlmnk = array();
	for ($i=0; $i <= ($n-1); $i++) {
		$jmlmpb[$i] = 0;
		$jmlmnk[$i] = 0;
	}

	// menghitung jumlah pada kolom kriteria tabel perbandingan berpasangan
	for ($x=0; $x <= ($n-1) ; $x++) {
		for ($y=0; $y <= ($n-1) ; $y++) {
			$value		= $matrik[$x][$y];
			$jmlmpb[$y] += $value;
		}
	}


	// menghitung jumlah pada baris kriteria tabel nilai kriteria
	// matrikb merupakan matrik yang telah dinormalisasi
	for ($x=0; $x <= ($n-1) ; $x++) {
		for ($y=0; $y <= ($n-1) ; $y++) {
			$matrikb[$x][$y] = $matrik[$x][$y] / $jmlmpb[$y];
			$value	= $matrikb[$x][$y];
			$jmlmnk[$x] += $value;
		}

		// nilai priority vektor
		$pv[$x]	 = $jmlmnk[$x] / $n;

		// memasukkan nilai priority vektor ke dalam tabel pv_kriteria
		$id_kriteria = getKriteriaID($x);
		inputKriteriaPV($id_kriteria,$pv[$x],$id_pengguna);

	}

	// cek konsistensi
	$eigenvektor = getEigenVector($jmlmpb,$jmlmnk,$n);
	$consIndex   = getConsIndex($jmlmpb,$jmlmnk,$n);
	$consRatio   = getConsRatio($jmlmpb,$jmlmnk,$n);
?>
	<div class="white-bg">
	<div class="container">
		<div class="section-top-border">
		<h3 class="ui header">Matriks Perbandingan Mapel </h3>
		<blockquote class="generic-blockquote">
			<p>Penilaian kamu terhadap mata pelajaran yg diminati ditampilkan dalam matrik dibawah ini.</p>
		</blockquote>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr class="table-active">
						<th>Kriteria</th>
						<?php
							for ($i=0; $i <= ($n-1); $i++) { 
								echo "<th>".getKriteriaNama($i)."</th>";
							}
						?>
					</tr>
				</thead>

				<tbody>
					<?php
						for ($x=0; $x <= ($n-1); $x++) { 
							echo "<tr>";
							echo "<td>".getKriteriaNama($x)."</td>";
								for ($y=0; $y <= ($n-1); $y++) { 
									echo "<td>".round($matrik[$x][$y],5)."</td>";
								}

							echo "</tr>";
						}
					?>
				</tbody>

				<tfoot>
					<tr>
						<th>Jumlah</th>
						<?php
								for ($i=0; $i <= ($n-1); $i++) { 
									echo "<th>".round($jmlmpb[$i],5)."</th>";
								}
						?>
					</tr>
				</tfoot>
			</table><br>
			<h3 class="ui header">Hasil Normalisasi Matriks Perbandingan Mapel</h3>
			<blockquote class="generic-blockquote">
				<p>Berikut ini adalah hasil perhitungan dari penilaian kamu.
				Penilaian yang dicari adalah Rasio Konsistensi.
				Apa itu..?  Rasio Konsistensi (RK) adalah tingkat kekonsistenan dari penilaian matrik perbandingan mata pelajaran.
				Dimana RK yang konsisten adalah < 10%.</p>
			</blockquote>
			<table class="table table-bordered">
				<thead>
					<tr class="table-active">
						<th>Kriteria</th>
						<?php
							for ($i=0; $i <= ($n-1); $i++) { 
								echo "<th>".getKriteriaNama($i)."</th>";
							}
						?>
						<th>Jumlah</th>
						<th>Priority Vector</th>
					</tr>
				</thead>
				<tbody>
					<?php
						for ($x=0; $x <= ($n-1); $x++) { 
							echo "<tr>";
							echo "<td>".getKriteriaNama($x)."</td>";
								for ($y=0; $y <= ($n-1); $y++) { 
									echo "<td>".round($matrikb[$x][$y],5)."</td>";
								}

							echo "<td>".round($jmlmnk[$x],5)."</td>";
							echo "<td>".round($pv[$x],5)."</td>";

							echo "</tr>";
						}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="<?php echo ($n+2)?>">Eigen Vector (λ maks)</th>
						<th><?php echo (round($eigenvektor,5))?></th>
					</tr>
					<tr>
						<th colspan="<?php echo ($n+2)?>">Indeks Konsistensi</th>
						<th><?php echo (round($consIndex,5))?></th>
					</tr>
					<tr>
						<th colspan="<?php echo ($n+2)?>">Rasio Konsistensi</th>
						<th><?php echo (round(($consRatio * 100),2))?> %</th>
					</tr>
				</tfoot>
			</table>
			<?php
				if ($consRatio > 0.1) {
			?>
			<p>
			<h3>Sayang sekali, <b> Penilaianmu Belum Konsisten :( :( </h3></b>
				Karena Hasil Rasio konsistensi kamu belum dibawah 10%<br>
				Kamu perlu mengulangi penilaian dengan Klik tombol Kembali !
			</p>
		</div>
		<br>
		<a href='javascript:history.back()'>
			<button class="genric-btn primary circle">
				Kembali <span class="lnr lnr-arrow-left">
			</button>
		</a>
		<?php
			} else {
		?>
		<p>
			<h3>Oke, <b> Penilaianmu Sudah Konsisten :)</h3></b>
			Karena Hasil Rasio konsistensi kamu sudah dibawah 10%<br>
			Klik tombol lanjut untuk melanjutkan analisa !
		</p>
		
		<br>
		<a href="m_wp/<?php echo $id_pengguna;?>">
		<button class="genric-btn primary circle" style="float: right;">
			Lanjut <span class="lnr lnr-arrow-right">
		</button>
		</a>

<?php 
	}
}
?>

</div>
</div>
</div>
</div>


