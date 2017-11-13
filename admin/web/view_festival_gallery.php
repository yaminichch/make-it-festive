<?php
include_once("../../conn.php");
?>
<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		
</head>
<body class="dashboard-page">
<?php include("slide_menu.php");?>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<?php include("head.php");?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- gallery -->
				<div class="grids-heading gallery-heading">
					<h3>Festival Gallery</h3>
				</div>
				<div class="gallery-grids">
                <?php  $cv=$con->query("select * from fest_detail");
										while($r1=$cv->fetch_array())
									{
											$temp=explode('/',$r1['fest_img']);
						
											foreach($temp as $image)
											{?>
						<div class="show-reel">
                        
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
                                
						<a href="<?php print "../img/".$image;?>" class="lsb-preview" data-lsb-group="header">
                        <img src="<?php print "../img/".$image;?>" height="200px" width="200px">
                        				<div class="agileits-caption">
											<h2><?php echo $r1['fest_name']; ?></h2>
										</div>
                				</a>
								</div>
							</div>
                            <?php } ?>
							<div class="clearfix"> </div>
						</div>
                         <div class="grids-heading gallery-heading">
									<h2 style="color:#4148C5; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;"><?php echo $r1['fest_name']." Images:";?></h2>
                                    <a class="btn btn-dark fa fa-edit" href="edit_festival_gallery.php?edit_gallery=<?php echo $r1['fest_id'];?>">UPDATE</a>
						</div>
                        <?php }?>
						<script>
							$(window).load(function() {
							  $.fn.lightspeedBox();
							});

						</script>
				</div>
			<!-- //gallery -->

			</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
			<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
	<!-- gallery -->
	<link rel="stylesheet" href="css/lsb.css">
	<script src="js/lsb.js"></script>
	<!-- //gallery -->
	
</body>
</html>
