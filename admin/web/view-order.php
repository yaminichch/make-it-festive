<?php
include_once("../../conn.php");

if(isset($_REQUEST['delorder']))
{
	$id1 =$_REQUEST['delorder'];
	
	$con->query("delete from product_order where order_id=$id1") or die(mysqli_error());
	
		header('location:view-order.php');	
	
}

?>
<!DOCTYPE html>
<head>
<title>View-Orders</title>
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
						<h2>View Shipping Details</h2>
					</div>
						<div class="panel panel-widget forms-panel">
						<div class="box-content" style="width:1170px; height:500px; overflow:scroll;">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
<tr>
<th>OrderId</th>
<th>User-Name</th>
<th>Product-Id</th>
<th>Shipping-Address</th>
<th>Quantity</th>
<th>Price</th>
<th>Item-Total</th>
<th>Grand-Total</th>
<th>Date</th>
<th>Action</th>
</tr>
<?php



//echo $c = "select * from product_order join registration on product_order.order_id =  registration.r_id join master_product on product_order.order_id = master_product.p_id join shipping_order on product_order.order_id = shipping_order.so_id";
//join master_product on product_order.order_id = master_product.p_id
//exit;

 
$cv=$con->query("select * from product_order join registration on product_order.user_id =  registration.r_id join master_product on product_order.prod_id = master_product.p_id order by order_id");
while($r1=$cv->fetch_array())
{?>
<tr>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><?php echo $r1['order_id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['r_name'];?></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong>
<?php echo $r1['p_name'];	?>
</strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['r_address'];?></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['order_quantity'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['order_price'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['item_total'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['total_amount'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['order_date'];?></strong></td>

<td  ><a  class="btn btn-dark fa fa-remove" href="view-order.php?delorder=<?php echo $r1['order_id']?>" >
<?php  $r1['order_id']?>Delete</a>

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
