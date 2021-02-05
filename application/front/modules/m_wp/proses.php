<script src="media/js/highcharts.js"></script>
<script src="media/js/modules/data.js"></script>
<script src="media/js/modules/exporting.js"></script>
<script src="media/js/modules/export-data.js"></script>
<?php

$id_pengguna = $_POST['id_pengguna'];

if (isset($_POST['submit'])) {

	// jumlah kriteria    jenis
	$n	= getJumlahKriteria();
	$p  = getJumlahalternatif();
	$r  = getJumlahRelasi();

	$smstrx = array();
	$smstry = array();
	$smstrz = array();

	$urut 	= 0;

	//Tampilin nilai inpputan semua rapor
	for ($x=0; $x <= ($n-1) ; $x++) {

		$urut++;
		$smstrtiga	= "smstrtiga".$urut;
		$smstrempat	= "smstrempat".$urut;
		$smstrlima	= "smstrlima".$urut;

		$smstrx[$x] = $_POST[$smstrtiga];
		$smstry[$x] = $_POST[$smstrempat];
		$smstrz[$x] = $_POST[$smstrlima];
	}
	//AMBIL DATA PENGGUNA
	$sql = $db->query("SELECT * FROM pengguna WHERE id_pengguna=$id_pengguna");
	$sql->data_seek(0);
	$default = $sql->fetch_assoc();

	// PERULANGAN SEBANYAK JUMLAH ALTERNATIF
	$sqlprodi=$db->query("select id_alternatif from alternatif");
	$urut=-1;
	while ($rowprodi=$sqlprodi->fetch_assoc()) {
		$id_alter = $rowprodi['id_alternatif'];

		//PERULANGAN SEBANYAK JUMLAH RELASI (UNTUK MEMILIH RELASI SESUAI ID ALTERNATIF)
		$sqlrelasi=$db->query("select id_kriteria from relasi where id_alternatif = $id_alter");
		$x=0;
		while ($rowrelasi=$sqlrelasi->fetch_assoc()) {
			for ($a=0; $a <= ($n-1); $a++){
				if(getKriteriaID($a)==$rowrelasi['id_kriteria']){
					$min[$x][$a] = getKriteriaID($a);
				}
				else{
					$min[$x][$a] = '';
				}
			}
			$x++;
		}
		$tot_pangkat1 ="1";
		$tot_pangkat2 ="1";
		$tot_pangkat3 ="1";

		for ($a=0; $a <= ($n-1); $a++) {
			$id_kriteria = getKriteriaID($a);
			$nilaipv=getKriteriaPVnilai($id_kriteria,$id_pengguna);

			for($mm=0;$mm<$x;$mm++){
				if(getKriteriaID($a)==$min[$mm][$a]){
					$nilaipv = $nilaipv;
				}
				else{
					$nilaipv = $nilaipv * -1;
				}
			}
			//PROSES PANGKATTTTTTTT
			$hasil_pangkat1 = pow($smstrx[$a], $nilaipv);
			$hasil_pangkat2 = pow($smstry[$a], $nilaipv);
			$hasil_pangkat3 = pow($smstrz[$a], $nilaipv);
			//PENGALIAN HASIL PANGKAT
			$tot_pangkat1 = $tot_pangkat1 * $hasil_pangkat1;
			$tot_pangkat2 = $tot_pangkat2 * $hasil_pangkat2;
			$tot_pangkat3 = $tot_pangkat3 * $hasil_pangkat3;
			// echo $nilaipv;

			//PERHITUNGAN VEKTOR V
			$jmlhvektorS = $tot_pangkat1+$tot_pangkat2+$tot_pangkat3;
			$V1 = $tot_pangkat1/$jmlhvektorS;
			$V2 = $tot_pangkat2/$jmlhvektorS;
			$V3 = $tot_pangkat3/$jmlhvektorS;

			$nilaimax = max($V1,$V2,$V3)*100;
		}
	$urut++;
	// echo "---------------------------------------------------------<br>";
	// echo "$id_alter";
	// echo getAlternatifNama($id_alter-1)."<br>";
	// echo "<b>Nilai maksimumnya = ".$nilaimax."</b><br>";
	inputHasilAnalisa($id_alter,$id_pengguna,$nilaimax);
	}
?>

	<div class="white-bg">
	<div class="container">
	<div class="section-top-border">
		<h2 class="ui header">Hai<b> <?php echo $default['nama'];?>,</b> analisa sudah selesai.</h2>
		<p>Berikut ini adalah rincian hasil analisa oleh sistem untuk kamu</p><br>
		<div class="table-responsive">
			<h4>Tabel penilaian dari yang tertinggi :</h4>
			<table class="table table-bordered">
				<thead>
					<tr class="table-active">
						<th width="10px">No</th>
						<th >Program Studi</th>
						<th>Nilai Preferensi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						for ($x=0; $x <= ($n-1); $x++) { 
							
								$id_kriteria = getKriteriaID($x);
								inputDataNilaiRapor($id_pengguna,$id_kriteria,$smstrx[$x],$smstry[$x],$smstrz[$x]);
							// echo "</tr>";
						}
						$sqlnlai = $db->query("select * from hasil where id_pengguna=$id_pengguna order by nilai desc");
	                  	$urut = 0;
	                 	while ($row = $sqlnlai->fetch_assoc()) {	
	                 		$urut++;
	                 	$nm = $row['id_alternatif'];
	                 		echo "<tr>";
	                 		echo "<td class='center'>".$urut."</td>";
							echo "<td class='center'>".getAlternatifNama($nm-1)."</td>";
							echo "<td class='center'>".$row['nilai']."</td>";	
		                 	echo "</tr>";
	                 	}	
	                 		
					?>
				</tbody>
			</table><br>

			<h3>Grafik Hasil Analisa :</h3>
			<p>Berdasarkan perhitungan menggunakan metode analisa untuk mendapatkan rekomendasi terbaik, maka hasilnya disajikan dalam grafik dibawah ini. Perhitungan diperoleh untuk setiap program studi yang menjadi pilihan.</p>		
			<div class="col-md-12">
		        <p>
		        	<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		        </p>

		        <script type="text/javascript">
		        Highcharts.chart('container', {
		            chart: {
		                type: 'column',
		                alignTicks:true,
		                animation:true
		            },
		            title: {
		                text: '.'
		            },
		            xAxis: {
		                categories: ['Program Studi']
		            },
		            yAxis: {
		                floor: 0,
		                ceiling: 100,
		                title: {
		                    text: 'Nilai',
		                    max:'1'
		                }
		            },
		            tooltip: {
		              backgroundColor: '#FCFFC5',
		              borderRadius: 20,
		              borderWidth: 1              
		            },
		            plotOptions: {
				        series: {
				            dataLabels: {
				                enabled: true
				            }
				        }
				    },
		            series:             
		             [
		                <?php 
		                $sql = $db->query("select * from hasil where id_pengguna=$id_pengguna order by nilai desc ");
		                // $sql->data_seek(0);
		                $no = 1;
		                while ($row = $sql->fetch_assoc()) {
		                  $id_alter=$row['id_alternatif'];
		                  $id_pengguna=$row['id_pengguna'];
		                  $nilai=$row['nilai'];
		                    $sqlprodi = $db->query("select * from alternatif where id_alternatif=$id_alter");
		                    // $sqlprodi->data_seek(0);
		                    while ($rowprodi = $sqlprodi->fetch_assoc()) {
		                      $nama_alter=$rowprodi['nama_alternatif'];
		                ?>             
		                {
		                    name: '<?php echo $nama_alter; ?>',
		                    data: [<?php echo $nilai; ?>]
		                },
		                <?php } } ?>
		             ]
		        });
		        </script>
		        <?php 
		        $sqlmax = $db->query("SELECT id_alternatif FROM hasil WHERE nilai = (SELECT MAX(nilai) as maxNilai FROM hasil WHERE id_pengguna=$id_pengguna)");
				$maxnil = $sqlmax->fetch_assoc();
				$id_altern = $maxnil['id_alternatif'];
					$sqlprodi = $db->query("SELECT * FROM alternatif WHERE id_alternatif=$id_altern");
					$sqlprodi->data_seek(0);
					$prodi = $sqlprodi->fetch_assoc();
					$nm_prodi = $prodi['nama_alternatif'];
					// echo $nm_prodi;
					// echo $id_pengguna;
					// Update Hasil di Tabel Pengguna
					UpdateHasilPengguna($id_pengguna,$nm_prodi);
		        ?>

		        <h3><b>Selamat <?php echo $default['nama'];?> ! </b></h3><br>
		        <h4><p>Berdasarkan perhitungan dan analisa, sistem memberikan rekomendasi 
			        	program studi yang sesuai dengan minat dan kemampuan kamu 
			        	yaitu Program Studi <?php echo "<b>".$prodi['nama_alternatif'];?>.</b></p></h4>
	      	</div>
	      	<a href="dashboard/<?php echo $id_pengguna;?>">
	      	<button class="genric-btn primary circle" style="float: right;">
				Selesai <span class="lnr lnr-arrow-right">
			</button>
	    </div>
	</div>
	</div>
	</div>
<?php } ?>