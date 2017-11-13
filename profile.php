<?php
include_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign Up :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="js/validate.js" type="text/javascript"></script>
<!-- Custom Theme files -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu1.js"></script>
<script src="js/jquery.slimscroll.min1.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom1.css" rel="stylesheet">
<script src="js/custom1.js"></script>
<script src="js/screenfull1.js"></script>
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'> 
<!-- web-fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
</head>
<body>
	<!-- header -->
	<?php include("head.php"); ?>
    </div>
	<!-- //header --> 	
	<!-- profile-page -->
<?php 
//PHP CODE START.....................................................................................................................................................................//
//PROFILE VIEW...........................................................................................................................................................................//
	if(isset($_SESSION["r_id"]))
	{
		$regi_id=$_SESSION["r_id"];
		$log_query="select * from registration JOIN country ON registration.cid=country.cid JOIN state ON registration.sid=state.sid JOIN city ON registration.ctid=city.ctid where r_id='$regi_id'";
		$data_view=$con->query($log_query);
		$data_fetch=$data_view->fetch_array();
	}
//END PROFILE VIEW...................................................................................................................................................................//
//PHP CODE END.........................................................................................................................................................................//
?>
    <div class="container">
    <!-- input-forms -->
	<div class=" profile">
    	<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>View Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
            <img src="<?php echo $data_fetch['r_dp'];?>" height="150px" width="150px">
			</div>
			<div class="col-md-8 profile-text" style="">
				<h6><?php echo $data_fetch['r_name'];?></h6>
				<table>
				<tr>
				<th>Email</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['r_email'];?></td>
				</tr>
				<tr>
				<th>Password</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['r_password'];?></td>
				</tr>
                <tr>
				<th>Gender</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['r_gender'];?></td>
				</tr>
                <tr>
				<th>Address</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['r_address'];?></td>
				</tr>
                <tr>
				<th>Phone Number</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['r_pno'];?></td>
				</tr>
				<tr>
				<th>Country</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['cname'];?></td>
				</tr>
                <tr>
				<th>State</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['sname'];?></td>
				</tr>
                <tr>
				<th>City</th>
				<td> :</td>
				<td><strong><?php echo $data_fetch['ctname'];?></td>
				</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
            <div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
			</div>
			<div class="col-md-4 profile-fo">
				<a href="edit_profile.php?updu=<?php echo $data_fetch['r_id'];?>" class="pro1"><i class="fa fa-edit"></i><strong>UPDATE</strong></a>
			</div>
			<div class="col-md-4 profile-fo">
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //input-forms -->
	</div>
	<!-- //profile-page --> 
	<!-- footer-top -->
	<?php include("foot_top.php");?>
	<!-- //footer-top --> 
	<!-- subscribe -->
	<?php //include("subscribe.php");?>
	<!-- //subscribe --> 
	<!-- footer -->
	<?php include("foot.php");?>
	<!-- //footer -->		
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>

