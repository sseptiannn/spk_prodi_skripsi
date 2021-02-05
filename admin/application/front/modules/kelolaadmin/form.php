<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Beranda</a>
		</li>
		<li class="active">Tambah User</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
	<div class="row">
		<div class="page-header">
			<h1>
				Tambah Admin Baru
				<a href="user" title="Kembali" class="btn btn-info pull-right"><i class="splashy-document_letter_add"></i> Kembali</a>
			</h1>
		</div><!-- /.page-header -->
		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<form action="application/front/modules/kelolaadmin/save.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form" id="form">	
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="username"> Username</label>
						<div class="col-sm-9">
							<input type="text" name="xusername" id="username" placeholder="Username" class="col-xs-10 col-sm-5" required="true">
						</div>
					</div>         
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="password"> Password</label>
						<div class="col-sm-9">
							<input type="password" name="xpassword" id="password" placeholder="Password" class="col-xs-10 col-sm-5" required="true">
						</div>
					</div>        
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="nama"> Nama Lengkap</label>
						<div class="col-sm-9">
							<input type="text" name="nama" id="nama" placeholder="Nama lengkap" class="col-xs-10 col-sm-5" required="true">
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
					window.location.href = "kelolaadmin/add";
				}else{
					window.location.href = "kelolaadmin/fail";
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

