<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="dashboard">Home</a>
				</li>

				<li>
					<a href="mapel">Manajemen Admin</a>
				</li>
			</ul><!-- /.breadcrumb -->
		</div>

		<div class="page-content">

			<div class="page-header">
				<h1 class="pink">
					Manajemen Administrator
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Tambah, Edit &amp; Hapus
					</small>
					<a href="admin-form" title="Tambah Data Mapel" class="btn btn-white btn-danger btn-bold btn-lg pull-right"><i class="ce-icon fa fa-plus-square bigger-120 pink"></i> Tambah Admin</a>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- <?php
					if(isset($_GET['id']) && $_GET['id']=="add"){
						echo '<div class="alert alert-warning">Data berhasil ditambahkan.</div>';
					}else
					if(isset($_GET['id']) && $_GET['id']=="edit"){
						echo '<div class="alert alert-warning">Data berhasil diupdate.</div>';
					}else
					if(isset($_GET['id']) && $_GET['id']=="fail"){
						echo '<div class="alert alert-danger">Gagal melakukan proses.</div>';
					}else
					if(isset($_GET['id']) && $_GET['id']=="del"){
						echo '<div class="alert alert-warning">Data telah berhasil dihapus.</div>';
					}
					?> -->
					<!-- PAGE CONTENT BEGINS -->
					<div class="clearfix">
						<div class="pull-right tableTools-container"></div>
					</div>
					<div class="table-header">
						Daftar Administrator
					</div>
					<div>
						<table id="dt_a" class="table table-striped table-bordered table-hover">
		                  <thead>
		                    <tr>
		                      <th width="95" class="center">#</th>
		                      <th>Username</th>
		                      <th>Nama Admin</th>
		                      <th width="200">Aksi</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                  <?php
		                  $sql = $db->query("select * from admin order by id_admin asc");
		                  $sql->data_seek(0);
		                  $no = 1;
		                  while ($row = $sql->fetch_assoc()) {
		                    ?>
		                    
		                    <tr>
		                      <td class="center"><?php echo $no++ ?></td>
		                      <td><?php echo $row['username'] ?></td>
		                      <td><?php echo $row['nama'] ?></td>
		                      <td class="center">
		                        <div class="action-buttons">
		                          <a class="green" title="Ubah Nama Admin" href="admin-edit/<?php echo $row['id_admin']?>" role="button">
		                            <i class="ace-icon fa fa-pencil bigger-200"></i>
		                          </a>

		                          <a class="blue" title="Ubah Password" href="admin-password/<?php echo $row['id_admin']?>" role="button">
		                            <i class="ace-icon fa fa-lock bigger-200"></i>
		                          </a>

		                         <a class="red" title="Hapus Admin"  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="admin-delete/<?php echo $row['id_admin']?>">
		                            <i class="ace-icon fa fa-trash-o bigger-200"></i>
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
	</div><!-- /.row -->
</div><!-- /.page-content -->

