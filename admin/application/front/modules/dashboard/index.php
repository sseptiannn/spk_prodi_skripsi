<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Beranda</a>
		</li>
		<li class="active">Halaman Utama</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="row">
		<div class="page-header">
			<h1>
				Menu Administrator
			</h1>
		</div><!-- /.page-header -->
		<div class="col-xs-12">
			<div class="alert alert-block alert-info">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-check blue"></i>
				Selamat Datang Admin
				<strong class="red">
					<?php echo $_SESSION['nama'];?></strong>, <!-- anda login dengan username : <?php echo $_SESSION['username'];?> -->
					<strong class="blue"><br>
						Selamat Berkerja ! 
					</strong>
					Silahkan pilih menu sesuai dengan kebutuhan anda
			</div>
			<div class="col-sm-12 infobox-container">

				<div class="infobox infobox-red">
					<div class="infobox-icon">
						<i class="ace-icon fa fa-users" href="pengunjung"></i>
					</div>

					<div class="infobox-data">
						<span class="infobox-data-number"><?php echo getJumlahPengunjung()?></span>
						<div class="infobox-content">Pengunjung</div>
					</div>
				</div>

				<div class="infobox infobox-orange">
					<div class="infobox-icon">
						<i class="ace-icon glyphicon glyphicon-list-alt"></i>
					</div>

					<div class="infobox-data">
						<span class="infobox-data-number"><?php echo getJumlahKriteria(); ?></span>
						<div class="infobox-content">Mata Pelajaran</div>
					</div>
				</div>

				<div class="infobox infobox-blue">
					<div class="infobox-icon">
						<i class="ace-icon fa fa-graduation-cap"></i>
					</div>

					<div class="infobox-data">
						<span class="infobox-data-number"><?php echo getJumlahAlternatif()?></span>
						<div class="infobox-content">Program Studi</div>
					</div>
				</div>

				<div class="infobox infobox-green">
					<div class="infobox-icon">
						<i class="ace-icon fa fa-cogs"></i>
					</div>

					<div class="infobox-data">
						<span class="infobox-data-number"><?php echo getJumlahAdmin()?></span>
						<div class="infobox-content">Administrator</div>
					</div>
				</div>

			</div>
		</div>
	

		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
