<div class="white-bg">
	<div class="container">
		<div class="section-top-border">
		<h2 class="ui header">Matriks Perbandingan Berpasangan </h2>

		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
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

		<h2 class="ui header">Matriks Nilai Kriteria</h2>
		<table class="ui celled red table">
			<thead>
				<tr>
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
					<th colspan="<?php echo ($n+2)?>">Principe Eigen Vector (λ maks)</th>
					<th><?php echo (round($eigenvektor,5))?></th>
				</tr>
				<tr>
					<th colspan="<?php echo ($n+2)?>">Consistency Index</th>
					<th><?php echo (round($consIndex,5))?></th>
				</tr>
				<tr>
					<th colspan="<?php echo ($n+2)?>">Consistency Ratio</th>
					<th><?php echo (round(($consRatio * 100),2))?> %</th>
				</tr>
			</tfoot>
		</table>

	<?php
		if ($consRatio > 0.1) {
	?>
		<div class="ui icon red message">
			<i class="close icon"></i>
			<i class="warning circle icon"></i>
			<div class="content">
				<div class="header">
					Nilai Consistency Ratio melebihi 10% !!!
				</div>
				<p>Mohon ulangi kembali penilaian perbandingan mata pelajaran</p>
			</div>
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
		<br>

	<a href="m_wp">
	<button class="genric-btn primary circle" style="float: right;">
		Lanjut <span class="lnr lnr-arrow-right">
	</button>
	</a>

<?php 
	}
?>

</div>
</div>
</div>
</div>