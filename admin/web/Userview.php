<?php 
include_once("../../conn.php");

?>
<?php 
if(isset($_REQUEST['del']))
{
	$d = $_REQUEST['del'];
	$d1=$con->query("delete from registration where r_id='$d'") or die(mysqli_error());
	header('location:Userview.php');
		
}

			 
	?>
<!DOCTYPE html>
<head>
<title>Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome1.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script src="js/jquery1.min.js"> </script>
<script src="js/bootstrap1.min.js"> </script>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu1.js"></script>
<script src="js/jquery.slimscroll.min1.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom1.css" rel="stylesheet">
<script src="js/custom1.js"></script>
<script src="js/screenfull1.js"></script>
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
			
             <div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>View Users</h2>
					</div>
						<div class="panel panel-widget forms-panel">
						<div class="box-content" style="width:1170px; height:700px; overflow:scroll;">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
<tr>
<th>User-Id</th>
<th>Profile</th>
<th>UserName</th>
<th>Email-Id</th>
<th>Gender</th>
<th>Address</th>

<th>Contact-No</th>
<th>Country</th>
<th>State</th>
<th>City</th>
<th>Action</th>
</tr>
<?php
			
$cv=$con->query("select * from registration join country on registration.cid=country.cid join state on registration.sid=state.sid join city on registration.ctid=city.ctid");
while($r1=$cv->fetch_array())
{?>
<tr>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><?php echo $r1['r_id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong>
<img src="../../<?php echo $r1['r_dp'];?>" width="80" height="80"></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['r_name'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['r_email'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['r_gender'];?></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['r_address'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['r_pno'];?></strong></td>

<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['cname'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['sname'];?></strong></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['ctname'];?></strong></td>

<td align="center">
<a class="btn btn-dark fa fa-remove" href="Userview.php?del=<?php echo $r1['r_id'];?>">Delete</a>
</td>
</tr>
<?php }?>
					<!--/row-->
 	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		
					
			
				</div>
				<!-- input-forms -->
				
               
				<!-- //input-forms -->
    
			</div>
           </div>
        
     </section>
     <?php include('admin_footer.php');?>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>
