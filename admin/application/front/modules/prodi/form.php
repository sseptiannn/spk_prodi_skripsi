<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="dashboard">Beranda</a>
		</li>
		<li class="active">Tambah Prodi</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
	<div class="row">
		<div class="page-header">
			<h1>
				Tambah Prodi Baru
				<a href="prodi" title="Kembali" class="btn btn-white btn-info btn-bold btn-lg pull-right"><i class="ace-icon fa fa-arrow-left"></i> Kembali</a>
			</h1>
		</div><!-- /.page-header -->
		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<form action="application/front/modules/prodi/save.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form" id="form">	
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right"> Nama Prodi</label>
						<div class="col-sm-9">
							<input type="text" name="nama_prodi" id="username" placeholder="Program Studi Baru" class="col-xs-10 col-sm-5" required="true">
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
					window.location.href = "prodi";
				}else{
					window.location.href = "prodi";
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

