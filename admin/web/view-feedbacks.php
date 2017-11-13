<?php
include_once("../../conn.php");

if(isset($_REQUEST['conid']))
{
	$id1 =$_REQUEST['conid'];
	
	$con->query("delete from contact where id=$id1") or die(mysqli_error());
	
		header('location:view-feedbacks.php');	
	
}

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
						<h2>View Shipping Details</h2>
					</div>
						<div class="panel panel-widget forms-panel">
						<div class="box-content" style="width:1160px; height:500px; overflow:scroll;">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
<tr>
<th>Feedback-Id</th>
<th>User-Name</th>
<th>Email-Id</th>
<th>Contact-No</th>
<th>Message</th>
<th>Action</th>
</tr>
<?php


 
$cv=$con->query("select * from contact ");
while($r1=$cv->fetch_array())
{?>
<tr>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><?php echo $r1['id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['name'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['email'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['mno'];?></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['message'];?></strong></td>

<td  ><a  class="btn btn-dark fa fa-remove" href="view-feedbacks.php?conid=<?php echo $r1['id']?>" >
<?php  $r1['id']?>Delete</a>

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
