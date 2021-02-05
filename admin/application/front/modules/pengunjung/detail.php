<?php
//open data
$sql = $db->query("select * from pengguna where id_pengguna='" . $_GET['id'] . "'");
$sql->data_seek(0);
$default = $sql->fetch_assoc();
?>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="dashboard">Beranda</a>
		</li>
		<li class="active">Ubah Data Mapel</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
	<div class="row">
		<div class="page-header">
			<h1>
				Ubah Data Mapel
				<a href="prodi" title="Kembali" class="btn btn-white btn-success btn-bold btn-lg pull-right"><i class="ace-icon fa fa-arrow-left"></i> Kembali</a>
			</h1>
		</div><!-- /.page-header -->
		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<form action="application/front/modules/mapel/update.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form" id="form">	
					<input type="hidden" name="id" value="<?php echo $default['id_kriteria'];?>">
					        
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="nama"> Nama Mata Pelajaran</label>
						<div class="col-sm-9">
							<input type="text" name="nama_mapel" id="nama" class="col-xs-10 col-sm-5" required="true" value="<?php echo $default['nama'];?>">
						</div>
					</div>         
					   	  
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit" name="submit">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Simpan
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								Reset
							</button>
							<span id="menunggu"></span>
						</div>
					</div>
				</form>
				<div class="hr hr32 hr-dotted"></div>
				
				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->


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


	</div><!-- /.row -->
</div><!-- /.page-content -->

 <script type="text/javascript">
	var frm = $('#form');
	$("#menunggu").css('display', 'none', 'important');
	frm.submit(function (ev) {
		$.ajax({
			type: frm.attr('method'),
			url: frm.attr('action'),
			data: frm.serialize(),
			success: function (output) {
				if(output=="true"){
					window.location.href = "mapel";
				}else{
					window.location.href = "mapel";
				}
			},
		   beforeSend:function()
		   {
			$("#menunggu").css('display', 'inline', 'important');
			$("#menunggu").html("<img src='media/img/loading.gif' /> Menunggu...")
		   }
		});
		ev.preventDefault();
	});
</script>
