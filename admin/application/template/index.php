<!DOCTYPE html>
<html lang="en">
	<head>		
		<base href="http://localhost/spk_prodi/admin/">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin Sistem Penentuan Prodi</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="media/css/bootstrap.min.css" />

		<link rel="stylesheet" href="media/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<!-- bootstrap datepicker -->
  		<link rel="stylesheet" href="media/datepicker/datepicker3.css">
		<!-- text fonts -->
		<link rel="stylesheet" href="media/css/fonts.googleapis.com.css" />
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="media/css/colorbox.min.css" />
		<!-- styles -->
		<link rel="stylesheet" href="media/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="media/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="media/css/ace-skins.min.css" />
		<link rel="stylesheet" href="media/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="media/css/nano.css">
		<link rel="stylesheet" href="media/css/style.css">
		<!--[if lte IE 9] -->
		<link rel="stylesheet" href="media/css/ace-ie.min.css" />
		<link rel="stylesheet" href="media/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="media/css/chosen.min.css" />
		<link rel="stylesheet" href="media/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="media/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="media/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="media/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="media/css/bootstrap-colorpicker.min.css" />

		<script src="media/js/ace-extra.min.js"></script>
		<!-- [endif]-->

		
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8] -->
		<script src="media/js/html5shiv.min.js"></script>
		<script src="media/js/respond.min.js"></script>
		<!--[endif]-->
		<!--[if !IE]> -->
		<script src="media/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]-->
		<script src="media/js/jquery-1.11.3.min.js"></script>
		<!--[endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='media/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="media/js/bootstrap.min.js"></script>
		
		
		<link rel="stylesheet" href="media/editor/css/samples.css">
		<link rel="stylesheet" href="media/editor/toolbarconfigurator/lib/codemirror/neo.css">
		
	</head>

	<body class="no-skin">
		<?php 
			//get navbar content
			include "application/template/part/navbar.php";
		?>	
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<?php 
				//get navigation content
				include "application/template/part/sidebar.php";
				?>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
			<div class="main-content">
				<div class="main-content-inner">
					 <?php 
					//routing content dinamic
					if (isset($_GET['val']) && $_GET['val'] != "") {
						include "core/routing.php";
					} else {
						include "application/front/modules/dashboard/index.php";
					}
					?>
					<div class="row">
						<div class="col-md-6">
							<div id="debug"></div>
						</div>
					</div>
				</div>
			</div>			

			<?php 
			//get footer content
			include "application/template/part/footer.php";
			?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->


		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="media/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="media/js/jquery-ui.custom.min.js"></script>
		<script src="media/js/jquery.ui.touch-punch.min.js"></script>
		<script src="media/js/jquery.easypiechart.min.js"></script>
		<script src="media/js/jquery.sparkline.index.min.js"></script>
		<script src="media/js/jquery.flot.min.js"></script>
		<script src="media/js/jquery.flot.pie.min.js"></script>
		<script src="media/js/jquery.flot.resize.min.js"></script>

		
        
        <!-- page specific plugin scripts -->
		<script src="media/js/jquery.dataTables.min.js"></script>
		<script src="media/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="media/js/dataTables.buttons.min.js"></script>
		<script src="media/js/buttons.flash.min.js"></script>
		<script src="media/js/buttons.html5.min.js"></script>
		<script src="media/js/buttons.print.min.js"></script>
		<script src="media/js/buttons.colVis.min.js"></script>
		<script src="media/js/dataTables.select.min.js"></script>
		
		<script src="media/js/jquery-ui.custom.min.js"></script>
		<script src="media/js/jquery.ui.touch-punch.min.js"></script>
		<script src="media/js/markdown.min.js"></script>
		<script src="media/js/bootstrap-markdown.min.js"></script>
		<script src="media/js/jquery.hotkeys.index.min.js"></script>
		<script src="media/js/bootstrap-wysiwyg.min.js"></script>
		<script src="media/js/bootbox.js"></script>
		
		<script src="media/js/jquery.colorbox.min.js"></script>
		<!-- ace scripts -->
		<script src="media/js/ace-elements.min.js"></script>
		<script src="media/js/ace.min.js"></script>
		<script src="media/js/nano.js"></script>
        <script src="media/js/over.js"></script>
		<!-- bootstrap datepicker -->
		<script src="media/datepicker/bootstrap-datepicker.js"></script>
		
		<script src="media/editor/ckeditor.js"></script>
		<script src="media/editor/js/sample.js"></script>
		
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dt_a').DataTable( {
					bAutoWidth: true
			    });

			    //Date picker
			    $('#datepicker').datepicker({
			      autoclose: true
			    });
			})
		</script>
		<!--<script src="media/js/loadingoverlay.min.js"></script>-->
        <script>
		/*
			$(document).ajaxSend(function (event, jqxhr, settings) {
				$.LoadingOverlay("show");
			});
			$(document).ajaxComplete(function (event, jqxhr, settings) {
				$.LoadingOverlay("hide");
			});
		*/
		</script>
         <script type="text/javascript">

        $('a[data-confirm]').click(function (ev) {
            var href = $(this).attr('href');
            if (!$('#dataConfirmModal').length) {
                $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Konfirmasi</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Batalkan</button><a class="btn btn-danger" id="dataConfirmOK">OK Lanjut</a></div></div>');
            }
            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
            $('#dataConfirmOK').attr('href', href);
            $('#dataConfirmModal').modal({show: true});
            return false;
        });
		
		//alert modal
		window.alert = function(message, title) {
			if($("#bootstrap-alert-box-modal").length == 0) {
				$("body").append('<div id="bootstrap-alert-box-modal" class="modal fade">\
					<div class="modal-dialog">\
						<div class="modal-content">\
							<div class="modal-header" style="min-height:40px;">\
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
								<h4 class="modal-title"></h4>\
							</div>\
							<div class="modal-body"><p></p></div>\
							<div class="modal-footer">\
								<a href="#" data-dismiss="modal" class="btn btn-default">Close</a>\
							</div>\
						</div>\
					</div>\
				</div>');
			}
			$("#bootstrap-alert-box-modal .modal-header h4").text(title || "");
			$("#bootstrap-alert-box-modal .modal-body p").text(message || "");
			$("#bootstrap-alert-box-modal").modal('show');
		};
		$('[data-rel=tooltip]').tooltip({container:'body'});
    </script>   

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			$('.dialogs,.comments').ace_scroll({
				size: 300
		    });

			var $overflow = '';
			var colorbox_params = {
				rel: 'colorbox',
				reposition:true,
				scalePhotos:true,
				scrolling:false,
				close:'&times;',
				maxWidth:'100%',
				maxHeight:'100%',
				onOpen:function(){
					$overflow = document.body.style.overflow;
					document.body.style.overflow = 'hidden';
				},
				onClosed:function(){
					document.body.style.overflow = $overflow;
				},
				onComplete:function(){
					$.colorbox.resize();
					$('.cboxPhoto').unbind('click'); 
				}
			};

			$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
			$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
			
			
			$(document).one('ajaxloadstart.page', function(e) {
				$('#colorbox, #cboxOverlay').remove();
		   });
		})
		</script>
		<script>
			initSample();
		</script>
	</body>
</html>
