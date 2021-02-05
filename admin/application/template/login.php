<!DOCTYPE html>
<html lang="en">
    <head>
    	<base href="http://localhost/spk_prodi/admin/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Page</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="media/css/bootstrap.min.css" />
		<link rel="stylesheet" href="media/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<!--<link rel="stylesheet" href="media/css/fonts.googleapis.com.css" />-->

		<link rel="stylesheet" href="media/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="media/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="media/css/ace-rtl.min.css" />

		<!--[if lte IE 9]-->
		  <link rel="stylesheet" href="media/css/ace-ie.min.css" />
		<!--[endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]-->
		<script src="media/js/html5shiv.min.js"></script>
		<script src="media/js/respond.min.js"></script>
		<!--[endif]-->
    </head>
    <body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="white">Aplikasi</span><br>
									<span class="white" id="id-text2">Penentuan Prodi</span><br>
									<span class="white"><small>Universitas Janabadra</small></span><br>
								</h1>
								
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-user green"></i>
												Silahkan Masuk
											</h4>

											<div class="space-6"></div>
		
											<?php
											    if(isset($_POST['submit'])){

											    $username = $_POST['username'];
												$password = md5($_POST['password']);

												$sql = $db->query("select * from admin where 
													username='$username' and 
													password='$password' ");

												$num = $sql->num_rows; //1
												
												if($num>0){ //jika ditemukan ada user yang cocok
												$row = $sql->fetch_assoc();	
												  $_SESSION['auth']="ok"; //menyimpan session
												  $_SESSION['username'] = $username;
												  $_SESSION['nama'] = $row['nama'];
												  redirect("home");
												    //echo "success";
												}else{
												  echo '<script language="javascript">';
												  echo 'alert("Maaf Login gagal")';
												  echo '</script>';
												}
											    }
											 
											  ?>
												
												<form action="" method="POST" id="login_form">
													<fieldset>
														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<input type="text" name="username" id="username" class="form-control" placeholder="Username" required="true" />
																<i class="ace-icon fa fa-user"></i>
															</span>
														</label>

														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<input type="password" name="password" id="password" class="form-control" placeholder="Password" required="true"/>
																<i class="ace-icon fa fa-lock"></i>
															</span>
														</label>

														<div class="space"></div>

														<div class="clearfix">
															<button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary">
																<i class="ace-icon fa fa-key"></i>
																<span class="bigger-110">Masuk</span>
															</button>
														</div>

														<div class="space-4"></div>
													</fieldset>
												</form>


										</div><!-- /.position-relative -->
									</div>
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.main-content -->
					</div><!-- /.main-container -->
				</div>
			</div>
		</div>
		<!-- basic scripts -->
		<script src="media/media/assets/js/jquery-2.1.4.min.js"></script>
		<script type="media/assets/text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<!-- inline scripts related to this page -->
		
	</body>
</html>
