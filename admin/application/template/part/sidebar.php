<div class="sidebar-shortcuts" id="sidebar-shortcuts">
	<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
		<a class="btn btn-success" href="dashboard" title="Home">
			<i class="ace-icon fa fa-home"></i>
		</a>

		<a class="btn btn-info" href="mapel" title="Mata Pelajaran">
			<i class="ace-icon glyphicon glyphicon-list-alt"></i>
		</a>

		<a class="btn btn-warning" href="prodi" title="Program Studi">
			<i class="ace-icon fa fa-graduation-cap"></i>
		</a>

		<a class="btn btn-danger" href="relasi" title="Relasi">
			<i class="ace-icon fa fa-link"></i>
		</a>
	</div>

	<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
		<span class="btn btn-success"></span>

		<span class="btn btn-info"></span>

		<span class="btn btn-warning"></span>

		<span class="btn btn-danger"></span>
	</div>
</div>

<ul class="nav nav-list">
	<li class="">
		<a href="dashboard">
			<i class="menu-icon fa fa-home"></i>
			<span class="menu-text">Beranda</span>
		</a>
		<b class="arrow"></b>
	</li>
	<li class="">
		<a href="pengunjung">
			<i class="menu-icon fa fa-users"></i>
			<span class="menu-text">Pengunjung
				<!-- <span class="badge badge-default"><?php echo getJumlahPengunjung()?></span> -->
			</span>
		</a>
		<b class="arrow"></b>
	</li>
	<li class="">
		<a href="mapel">
			<i class="menu-icon glyphicon glyphicon-list-alt"></i>
			<span class="menu-text">Mata Pelajaran 
				<!-- <span class="badge badge-default"><?php echo getJumlahKriteria(); ?></span> -->
			</span>
		</a>
		<b class="arrow"></b>
	</li>
	<li class="">
		<a href="prodi">
			<i class="menu-icon fa fa-graduation-cap"></i>
			<span class="menu-text">Program Studi
				<!-- <span class="badge badge-default"><?php echo getJumlahAlternatif()?></span> -->
			</span>
		</a>
		<b class="arrow"></b>
	</li>
	<li class="">
		<a href="relasi">
			<i class="menu-icon fa fa-link"></i>
			<span class="menu-text">Relasi</span>
		</a>
		<b class="arrow"></b>
	</li>

	<li class="">
		<a href="kelolaadmin">
			<i class="menu-icon fa fa-cogs"></i>
			<span class="menu-text">Administrator
				<!-- <span class="badge badge-default"><?php echo getJumlahAdmin()?></span> -->
			</span>
		</a>
		<b class="arrow"></b>
	</li>

</ul><!-- /.nav-list -->
