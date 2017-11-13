<?php
include_once("../../conn.php");
error_reporting(0);
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
						<h2>Edit Product</h2>
					</div>
<?php
if(isset($_REQUEST['edit_pro']))
{
	 $edpro=$_REQUEST['edit_pro'];
	 $q="select * from master_product where p_id='$edpro'";
	 $fetchpro=$con->query($q)or die(mysql_error());
	 $fetchpro=$fetchpro->fetch_array();
	 
	 
}

if(isset($_REQUEST['editpro']))
{
	$edpro = $_REQUEST['edit_pro'];
	
	$festival_id=$_REQUEST['fam_id'];
	$pname=$_REQUEST['product_name'];
	$pdesc=$_REQUEST['p_desc'];
	$psprice=$_REQUEST['p_psprice'];
	$pcprice=$_REQUEST['p_pcprice'];
	$quan=$_REQUEST['p_quantity'];
	$prodimg=$_FILES["pimg"]["name"];
	//	echo $prodimg;
		
		$im=implode('/',$prodimg);
		//echo $im;
		//exit;
		for($i=0;$i<count($prodimg);$i++)
		{ 
			move_uploaded_file($_FILES["pimg"]["tmp_name"][$i],"../img/".$_FILES["pimg"]["name"][$i]);
		}
	
	$editpro="update master_product SET fam_id='$festival_id',p_name='$pname',p_images = '$im',p_descript='$pdesc',p_sprice='$psprice',p_pcprice='$pcprice',p_quantity='$quan' where p_id='$edpro'";
	//echo $editpro;
    //exit;
	$exce=$con->query($editpro) or die(mysql_error());
}

if(isset($_REQUEST['del']))
{
	$d = $_REQUEST['del'];
	$d1=$con->query("delete from master_product where p_id='$d'") or die(mysql_error());
		
}
?>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class=" form-grids form-grids-right">
								<div class="widget-shadow " data-example-id="basic-forms"> 
									<div class="form-title">
										<h4>Product</h4>
									</div>
									<div class="form-body">
										<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"> 
                                            
											<div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Product Name</label> 
												<div class="col-sm-9"> 
													<b><strong><input type="text" value="<?php echo $fetchpro['p_name']; ?>" name="product_name" class="form-control" id="inputEmail3" placeholder="First Click Any Edit Button"></strong></b>
												</div> 
											</div>
                                                       <div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Product Images</label> 
												<div class="col-sm-9"> 
													<b><strong><input type="file" multiple name="pimg[]" class="form-control1" id="inputEmail3" placeholder="Product Image"></strong></b>
												</div> 
											</div>
                                                       
                                            <div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Product Description</label> 
												<div class="col-sm-9"> 
													<b><strong><textarea name="p_desc" rows="5" class="form-control" id="inputEmail3" placeholder="First Click Any Edit Button"><?php echo $fetchpro['p_descript']; ?></textarea></strong></b>
												</div> 
											</div>
                                            <div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Product SellPrice</label> 
												<div class="col-sm-9"> 
													<b><strong><input type="number" value="<?php echo $fetchpro['p_sprice']; ?>" name="p_psprice" class="form-control" id="inputEmail3" placeholder="Product Price"></strong></b>
												</div> 
											</div>
                                                       <div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Product PurchasePrice</label> 
												<div class="col-sm-9"> 
													<b><strong><input type="number" value="<?php echo $fetchpro['p_pcprice']; ?>" name="p_pcprice" class="form-control" id="inputEmail3" placeholder="Product Price"></strong></b>
												</div> 
											</div>
                                            <div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label> 
												<div class="col-sm-9"> 
													<b><strong><input type="number" value="<?php echo $fetchpro['p_quantity']; ?>" name="p_quantity" class="form-control" id="inputEmail3" placeholder="First Click Any Edit Button"></strong></b>
												</div> 
											</div>
                                                       <div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Festival Name</label>
											<div class="col-sm-8">
                                            <select name="fam_id" id="selector1" class="form-control1">
												<option value="0">-----select festival-----</option>
												   <?php
			   $f=$con->query("select * from fest_detail");
			   while($c1=$f->fetch_array())
			   {
				   ?>
				   <option value="<?php echo $c1['fest_id'];?>"

					   <?php if($c1['fest_id'] == $fetchpro['fam_id'])
					   {
						   ?>
						   selected
					   <?php
					   }
					   ?>>
					   <?php echo $c1['fest_name'];?>
				   </option>
			   <?php
			   }
			   ?>
											</select>
                                            </div>
										</div>
                                            <div class="col-sm-offset-2" align="center"> 
												<input type="submit" name="editpro" value="Edit Product" class="btn-success"> 
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
						<h2>View Products</h2>
					</div>
						<div class="panel panel-widget forms-panel">
						<div class="box-content" style="width:1160px; height:700px; overflow:scroll;">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
<tr>
<th>Id</th>
<th>Festival Name</th>
<th>Product Name</th>
<th>Product Description</th>
<th>Product Image</th>

<th>Product SellPrice</th>
<th>Product PurchasePrice</th>

<th>Product Quantity</th>
</tr>
<?php
$cv=$con->query("select * from master_product join fest_detail on master_product.fam_id=fest_detail.fest_id order by p_id asc");
while($r1=$cv->fetch_array())
{?>
<tr>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><?php echo $r1['p_id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['fest_name'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['p_name'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['p_descript'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong>
<img src="../img/<?php echo $r1['p_images'];?>" width="100" height="100"></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['p_sprice'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['p_pcprice'];?></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['p_quantity'];?></strong></td>
<td align="center">
<a class="btn btn-dark fa fa-edit" href="edit_product.php?edit_pro=<?php echo $r1['p_id'];?>">Edit</a><br><br>
<a class="btn btn-dark fa fa-remove" href="edit_product.php?del=<?php echo $r1['p_id'];?>">Delete</a>
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
