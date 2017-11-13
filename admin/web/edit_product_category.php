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
						<h2>Edit Product Category</h2>
					</div>
<?php
if(isset($_REQUEST['edit_pcat']))
{
	 $edcat=$_REQUEST['edit_pcat'];
	 $q=mysql_query("select * from product_category where pcat_id='$edcat'");
	 $fetchcat=mysql_fetch_array($q);
}

if(isset($_REQUEST['editpcat']))
{
	$editpcat=$_REQUEST['pcat_name'];
	$editcat=mysql_query("update product_category SET pcat_name='$editpcat' where pcat_id='$edcat'") or die(mysql_error());
}

if(isset($_REQUEST['del']))
{
	$d = $_REQUEST['del'];
	$d1=mysql_query("delete from product_category where pcat_id='$d'") or die(mysql_error());
		
}
?>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class=" form-grids form-grids-right">
								<div class="widget-shadow " data-example-id="basic-forms"> 
									<div class="form-title">
										<h4>Product Category</h4>
									</div>
									<div class="form-body">
										<form class="form-horizontal" action="" method="post"> 
											<div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Product Category</label> 
												<div class="col-sm-9"> 
													<b><input type="text" name="pcat_name" value="<?php echo $fetchcat['pcat_name']; ?>" class="form-control" id="inputEmail3" placeholder="First Click Any Edit Button"></b> 
												</div> 
											</div> 
											<div class="col-sm-offset-2" align="center"> 
												<input type="submit" name="editpcat" value="Edit Product Category" class="btn-success"> 
											</div> 
										</form> 
									</div>
								</div>
							</div>
						</div>	
					</div>
			
				</div>
                
                <div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>View Product Category</h2>
					</div>
						<div class="panel panel-widget forms-panel">
						<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
<tr>
<th>Id</th>
<th>Product Category Name</th>
<th>Action</th>
</tr>
<?php
$cv=mysql_query("select * from product_category");
while($r1=mysql_fetch_array($cv))
{?>
<tr>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><?php echo $r1['pcat_id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['pcat_name'];?></strong></td>
<td align="center">
<a class="btn btn-dark fa fa-edit" href="edit_product_category.php?edit_pcat=<?php echo $r1['pcat_id'];?>">Edit</a>
<a class="btn btn-dark fa fa-remove" href="edit_product_category.php?del=<?php echo $r1['pcat_id'];?>">Delete</a>
</td>
</tr>
<?php }?>
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
