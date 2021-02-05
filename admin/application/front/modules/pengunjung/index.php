
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="dashboard">Home</a>
			</li>
			<li>
				<a href="mapel">Pengunjung</a>
			</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 class="orange">
				Pengunjung
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Lihat Data Pengunjung & Hasil Analisa
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
				<div>
					<table id="dt_a" class="table table-striped table-bordered table-hover">
	                  <thead>
	                    <tr>
	                      <th width="95" class="center">#</th>
	                      <th>Nama Pengunjung</th>
	                      <th>Asal Sekolah</th>
	                      <th width="200">Hasil Rekomendasi</th>
	                      <th>Aksi</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                  <?php
	                  $sql = $db->query("select * from pengguna order by id_pengguna asc");
	                  $sql->data_seek(0);
	                  $no = 1;
	                  while ($row = $sql->fetch_assoc()) {
	                    ?>
	                    
	                    <tr>
	                      <td class="center"><?php echo $no++ ?></td>
	                      <td><?php echo $row['nama'] ?></td>
	                      <td><?php echo $row['asal_sklh'] ?></td>
	                      <td><?php echo $row['hasil'] ?></td>
	                      <td class="center">
	                        <div class="action-buttons">
	                          <a class="blue" title="Lihat Detail" href="pengunjung-detail/<?php echo $row['id_pengguna']?>" role="button">
	                            <i class="ace-icon fa fa-eye bigger-200"></i>
	                          </a>
	                        </div>
	                      </td>
	                    </tr>
	                  <?php
	                   }
	                  ?>
	                  </tbody>
	                </table>
				</div>
			</div>
		</div>

		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->

