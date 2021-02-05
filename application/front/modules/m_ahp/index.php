<?php
	$sql = $db->query("select * from pengguna where id_pengguna='" . $_GET['id'] . "'");
	$sql->data_seek(0);
	$default = $sql->fetch_assoc();

?>

<div class="white-bg">
	<div class="container">
		<div class="section-top-border">
		<h2 class="ui header">Analisa Minat Terhadap Mata Pelajaran</h3>

		<blockquote class="generic-blockquote">
			<ul class="unordered-list">
				<li><h5>Pilih salah satu mata pelajaran yang lebih kamu sukai / minati</li>
				<li><h5>Masukan penilaianmu terhadap mata pelajaran tersebut dengan angka 1 - 3</li>
				<li><h5>1 = Biasa saja  <br>  2 = Cukup menyukai  <br>  3 = Sangat menyukai</h5></li>	
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

		<form action="m_ahp_proses" method="post">

			<div class="table-responsive">
			  <table class="table table-hover">
			    <thead class="table-head">
					<tr>
						<th class="serial">Pilih mapel yang lebih diminati</th>
						<th class="country"> </th>
						<th class="country">Penilaian (1 - 3)</th>
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


						<?php
							$nilai = getNilaiPerbandinganKriteria($x,$y);

						?>

							<div class="field">
								<input type="number" class="single-input-primary"
								 max="3" min="1" name="bobot<?php echo $urut?>" 
								 placeholder="masukan nilai 1/2/3" 
								 value="1" required >
								  <!-- <?php echo $nilai?> -->
							</div>
						</td>
					</tr>
					<?php
						}
					}

					?>
					<input type="hidden" name="id_pengguna" value="<?php echo $default['id_pengguna'];?>">

				</tbody>

			</table>
			</div>
			<input class="genric-btn primary circle" type="submit" name="submit" value="SUBMIT">

		</form>
		
		</div>
	</div>
</div>
<!-- End Align Area -->