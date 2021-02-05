<div class="white-bg">
	<div class="container">
		<div class="section-top-border">
		<h2 class="ui header">Nilai Siswa</h2>

		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Mata Pelajaran</th>
					<th>Smstr 3</th>
					<th>Smstr 4</th>
					<th>Smstr 5</th>
					
				</tr>
			</thead>

			<tbody>
				<?php
					for ($x=0; $x <= ($n-1); $x++) { 
						echo "<tr>";
						echo "<td>".getKriteriaNama($x)."</td>";
							
								echo "<td>".($smstrx[$x])."</td>";
								echo "<td>".($smstry[$x])."</td>";
								echo "<td>".($smstrz[$x])."</td>";
							

						echo "</tr>";
					}
				?>
			</tbody>

			<tfoot>
				<tr>
					<th>Jumlah Prodi : <?php echo $prodi; ?></th>
					<th>Jumlah Mapel : <?php echo $n; ?></th>
					
				</tr>
			</tfoot>
		</table><br>


</div>
</div>
</div>
</div>