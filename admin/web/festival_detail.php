<?php
include_once("../../conn.php");
?>
<!DOCTYPE html>
<head>
<title>Festival-Details</title>
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
						<h2>Add Festival Detail</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class=" form-grids form-grids-right">
								<div class="widget-shadow " data-example-id="basic-forms"> 
									<div class="form-title">
										<h4>Festival Details</h4>
									</div>
									<div class="form-body">
										<form class="form-horizontal" enctype="multipart/form-data" method="post"> 
											<div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Festival Name</label> 
												<div class="col-sm-9"> 
													<b><strong><input type="text" name="festi_name" class="form-control" id="inputEmail3" placeholder="Festival Name"></strong></b>
												</div> 
											</div> 
                                            
                                            <div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Festival Description</label> 
												<div class="col-sm-9"> 
													<b><strong><input type="text" name="festi_desc" class="form-control" id="inputEmail3" placeholder="Description"></strong></b>
												</div> 
											</div> 
                                            
                                            <div class="form-group"> 
											<label for="exampleInputFile" class="col-sm-2 control-label">Image</label> 
                                            <div class="col-sm-9"> 
											<input type="file" multiple name="fi[]" id="exampleInputFile"> 
											</div> 
                                           </div>
                                           
                                           <div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Select Category</label>
											<div class="col-sm-8"><select name="cat_id" id="selector1" class="form-control1">
												<option value="0">----------Select State----------</option>
												<?php
															$cat=$con->query("select * from category");
															while($cat1=$cat->fetch_array())
																{
													?>
												<option value="<?php echo $cat1['cat_id'];?>">
													<?php echo $cat1['cat_name'];?>
												</option>
													<?php } ?>
											</select></div>
										</div>
                                           
											<div class="col-sm-offset-2" align="center"> 
												<input type="submit" name="festi" value="Add Festi Detail" class="btn-success"> 
											</div> 
										</form> 
									</div>
								</div>
							</div>
						</div>	
					</div>
			
				</div>
<?php
if(isset($_REQUEST["festi"]))
	{
		$festiname=$_REQUEST["festi_name"];
		$festi_desc=$_REQUEST["festi_desc"];
		$cat_id=$_REQUEST['cat_id'];
		$festiimg=$_FILES["fi"]["name"];
		
		$im=implode('/',$festiimg);
		//echo ($im);
		//exit;
		for($i=0;$i<count($festiimg);$i++)
		{ 
			move_uploaded_file($_FILES["fi"]["tmp_name"][$i],"../img/".$_FILES["fi"]["name"][$i]);
		}
		$fest_query="insert into fest_detail(cat_id,fest_name,fest_descript,fest_img) values ($cat_id,'$festiname','$festi_desc','$im')";
	$fest=$con->query($fest_query) or die (mysql_error());
	}
?>   
                <div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>View Festival Information</h2>
					</div>
						<div class="panel panel-widget forms-panel">
						<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
<tr>
<th>Id</th>
<th>Category Name</th>
<th>Festival Name</th>
<th>Festival Description</th>
</tr>
<?php
$cv=$con->query("select * from fest_detail join category on fest_detail.cat_id=category.cat_id");
while($r1=$cv->fetch_array())
{?>
<tr>
<td align="center"><?php echo $r1['fest_id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['cat_name'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['fest_name'];?></strong></td>
<td style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['fest_descript'];?></strong></td>
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
