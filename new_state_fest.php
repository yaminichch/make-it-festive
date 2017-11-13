<?php 
include_once('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Products </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->  
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 
<!-- scroll to fixed--> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
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
<!-- //scroll to fixed--> 
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
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin --> 
</head>
<body>
	<!-- header -->
	 <?php include("head.php"); ?>
	<!-- //header --> 	
	<!-- products -->
	<div class="products" style="">	 
		<div class="container">
			<div class="col-md-9">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.php">Home</a></li>
					<li class="active">Festival Information</li>
				</ol> 
			    <!-- //breadcrumbs -->
                <?php 
							if(isset($_REQUEST['ftid'])&&($_REQUEST['st']))
							{
								 $festid=$_REQUEST['ftid'];
								
								 $stid=$_REQUEST['st'];
								//exit;
								$festi="select * from master_product join fest_detail on master_product.fam_id = fest_detail.fest_id where fam_id ='$festid'";
								$festi_query=$con->query($festi) or die (mysqli_error());
								$festi_fetch1=$festi_query->fetch_array();?>
                    <div class="product-top">
					<h4><?php echo $festi_fetch1['fest_name']." Festival Products";?></h4>
					
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
				  <?php 
				//$q="select * from master_product where fam_id='$festid'";
				//$q1=$con->query($q) or die(mysql_error());
				while($festi_fetch=$festi_query->fetch_array())
				{
				?> 
					<div class="col-md-3 product-grids">
						<div class="agile-products" style="height:350px; width:200px;">
							<div class="new-tag"><h6>New</h6></div>
						<?php 
//PHP CODE START...............................................................................................................................................................//
						$temp=explode('/',$festi_fetch['p_images']);
						foreach($temp as $images)
						?>
							<a href="product_view.php?productid=<?php echo $festi_fetch['p_id'];?>"><img src="<?php print "admin/img/".$images;?>" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="product_view.php?productid=<?php echo $festi_fetch['p_id'];?>"><?php echo $festi_fetch['p_name'];?></a></h5> 
								<h6>Rs . <?php echo $festi_fetch['p_sprice'];?></h6>
                                        <h6 style="text-decoration:line-through">Rs . <?php echo $festi_fetch['p_pcprice'];?></h6> 
<a href="product_view.php?productid=<?php echo $festi_fetch['p_id'];?>" class="w3ls-cart pw3ls-cart" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Quick View </a>
                   	</div>
						</div>
					</div>
                    <?php } ?>
					 
				
                                        <?php
							}
				?>
                <!-- recommendations -->
			
               
			<!-- //recommendations -->
					 
				 <div class="clearfix"> </div>
				</div>
				<!-- add-products --> 
				 
				<!-- //add-products -->
			
			<!-- recommendations -->
			
			<!-- //recommendations -->
		</div>
	</div>
     </div>
	<!--//products-->  
	<!-- footer-top -->
	
	<!-- //footer --> 		
	<?php include("foot_top.php");?>
	<!-- //footer-top --> 
	<!-- subscribe -->
	<?php //include("subscribe.php");?>
	<!-- //subscribe --> 
	<!-- footer -->
	<?php include("foot.php");?>
	
 
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