<?php
	$sql = $db->query("select * from pengguna where id_pengguna='" . $_GET['id'] . "'");
	$sql->data_seek(0);
	$default = $sql->fetch_assoc();
?>
<div class="white-bg">
	<div class="container">
		<div class="section-top-border">
		<h2 class="ui header">Silahkan Masukan Nilai Rapor <br><b>Kelas XI</b> Semester 1 & 2, <br><b>Kelas XII</b> Semester 1</h3>
		<blockquote class="generic-blockquote">
			<ul class="unordered-list">				
				<li><h5>Masukan nilai sesuai kolom mata pelajaran dan sesuai semester</li>
				<li><h5>Pengisian Kolom Harus Berurutan Sesuai Semester</li>
				<li><h5><b>Jika dirapot tidak terdapat mata pelajaran tersebut, diisi dengan angka 1</b></li>
				
			</ul>
		</blockquote>
		<?php 
		$n = getJumlahKriteria();
		$query = "SELECT nama FROM kriteria ORDER BY id_kriteria";
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
		<form action="m_wp_proses" method="post">
			<div class="table-responsive">
			  <table class="table table-hover">
			    <thead class="table-head">
					<tr>
						<th class="serial"><h5>MATA PELAJARAN</th>
						<th class="visit"><h5>Masukan Nilai Rapor Kelas XI/1</th>
					</tr>
				</thead>
				<tbody>
					<?php
					//inisialisasi
					$urut = 0;

					for ($x=0; $x <= ($n - 1); $x++) {

							$urut++;
					?>
					<tr>
						<td>
							<div class="field">
								<label><h6><?php echo $pilihan[$x]; ?></label>
							</div>
						</td>
						<td>
							<div class="field">
								<input type="number" class="single-input-primary"
								 max="100" min="1" name="smstrtiga<?php echo $urut?>" placeholder="Kls XI Smstr 1" required >
							</div>
						</td>
					</tr>
					<?php
					}

					?>
				</tbody>
			  </table>
			</div>
			<br>

			<div class="table-responsive">
			  <table class="table table-hover">
			    <thead class="table-head">
					<tr>
						<th class="serial"><h5>MATA PELAJARAN</th>
						<th class="visit"><h5>Masukan Nilai Rapor Kelas XI/2</th>
					</tr>
				</thead>

				<tbody>
					<?php
					//inisialisasi
					$urut = 0;

					for ($y=0; $y <= ($n - 1); $y++) {

							$urut++;
					?>
					<tr>
						<td>
							<div class="field">
								<label><h6><?php echo $pilihan[$y]; ?></label>
							</div>
						</td>
						<td>
							<div class="field">
								<input type="text" class="single-input-primary"
								 max="100" min="0" name="smstrempat<?php echo $urut?>" placeholder="Kls XI Smstr 2" required >
							</div>
					</tr>
					<?php
					}

					?>
				</tbody>
			</table>
			</div>
			<br>

			<div class="table-responsive">
			  <table class="table table-hover">
			    <thead class="table-head">
					<tr>
						<th class="serial"><h5>MATA PELAJARAN</th>
						<th class="visit"><h5>Masukan Nilai Rapor Kelas XII/1</th>
					</tr>
				</thead>

				<tbody>
					<?php
					//inisialisasi
					$urut = 0;

					for ($z=0; $z <= ($n - 1); $z++) {

						$urut++;
					?>
					<tr>
						<td>
							<div class="field">
								<label><h6><?php echo $pilihan[$z]; ?></label>
							</div>
						</td>
						<td>
							<div class="field">
								<input type="text" class="single-input-primary"
								 max="100" min="0" name="smstrlima<?php echo $urut?>" placeholder="Kls XII Smstr 1" required >
							</div>
						</td>
					</tr>
					<?php
					}

					?>
				</tbody>
			</table>
			</div>
			<br>
			<input type="hidden" name="id_pengguna" value="<?php echo $default['id_pengguna'];?>">
			<input class="genric-btn primary circle" type="submit" name="submit" value="SUBMIT">
		</form>
		</div>
	</div>
</div>
<!-- End Align Area -->