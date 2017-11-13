<?php 
include_once("../../conn.php");

?>

<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Inputs :: w3layouts</title>
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
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Upload Product Gallery</h2>
					</div>
						<div class="panel panel-widget forms-panel">
						<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
<tr>
<th>Id</th>
<th>Product Name</th>
<th>Upload Images</th>
<th>Action</th>
</tr>
<?php 
if(isset($_REQUEST['edit_gallery']))
{
	$upd=$_REQUEST['edit_gallery'];
	$g="select * from master_product where p_id='$upd'";
	$q1=$con->query($g) or die (mysqli_error());
	$g1=$q1->fetch_array();
}

	if(isset($_REQUEST["upload"]))
	{
		$pi=$_FILES["pi"]["name"];
		//print_r($fg);
		//exit;
		$im=implode('/',$pi);
		//echo ($im);
		
		for($i=0;$i<count($pi);$i++)
		{
			move_uploaded_file($_FILES["pi"]["tmp_name"][$i],"../img/".$_FILES["pi"]["name"][$i]);
		}
		 if($_FILES['pi']['name'] != "" )
		{
	$f=$con->query("update master_product SET p_images = '$im' where p_id='$upd'") or die (mysqli_error());
	
	
		}
	}
	
	if(isset($_REQUEST['del']))
{
	$d = $_REQUEST['del'];
	$d1=$con->query("delete p_images from master_product where p_id='$d'") or die(mysqli_error());
		
}
	?>
<form method="post" action="" enctype="multipart/form-data">
<tr>
<td align="center"><?php echo $g1['p_id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $g1['p_name'];?></strong></td>
<?php
			$temp=explode('/',$g1['p_images']);
						
			foreach($temp as $image)
		 {?>
<td><img src="<?php print "../img/".$image;?>" height="50px" width="50px"></td>
<?php } ?>
<td><input type="file" name="pi[]" value="<?php echo "../img/".$g1['p_images'];?>" multiple/></td>
<td align="center">
 <a class="btn btn-dark fa fa-remove" href="edit_product_gallery.php?del=<?php echo $g1['p_id'];?>">Delete</a><br><br>
<input type="submit" value="Upload" name="upload" class="btn btn-dark fa fa-edit">
  </td>
</form>
</tr>
        	  <!--/row-->
 	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		
					</div>
			
				</div>
				<!-- //input-forms -->
                
			</div>
           </div>
     </section>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>
