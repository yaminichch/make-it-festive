<?php
include_once("conn.php");
if(isset($_REQUEST['productid']))
{
	$p=$_REQUEST['productid'];
	$v = $con->query("select * from master_product where p_id ='$p'")or die(mysql_error());
	$vf=$v->fetch_array();
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->   
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<script src="js/bootstrap.js"></script>
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
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
</head>
<body>
	<!-- header -->
	 <?php include("head.php"); ?>
	<!-- //header --> 
	<!-- breadcrumbs --> 
    <?php 
	if(isset($_REQUEST['productid']))
	{
		$proid=$_REQUEST['productid'];
		$product="select * from master_product where p_id='$proid'";
		$product_query=$con->query($product) or die(mysql_error());
		$product_fetch=$product_query->fetch_array();
	}
	?>
	<div class="container"> 
		<ol class="breadcrumb breadcrumb1">
			<li><a href="index.php">Home</a></li>
			<li class="active">View Product</li>
		</ol> 
		<div class="clearfix"> </div>
	</div>
	<!-- //breadcrumbs -->
	<!-- products -->
	<div class="products">	 
		<div class="container">  
			<div class="single-page">
				 <?php 
						
						$chkqnt = $con->query("select * from master_product where p_quantity > 0 and p_id = '$p'");
						
						if(mysqli_num_rows($chkqnt) > 0)
						{
						
					?>
                    <div class="single-page-row" id="detail-21">
                    
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
                            <?php 
//PHP CODE START...............................................................................................................................................................//
						$temp=explode('/',$product_fetch['p_images']);
						
						foreach($temp as $images)
						{//print_r($temp);
       				    ?>
                             
								<li data-thumb="<?php echo "admin/img/".$images;?>">
									<div class="thumb-image detail_images"> <img src="<?php echo "admin/img/".$images;?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
             <?php } ?>
								</li>
							</ul>
						</div>
					</div>
                         <form action="cart_code.php" method="post">
							
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $product_fetch['p_name']; ?></h3>
						
						<div class="single-rating">
							<ul>
								
								
							</ul> 
						</div>
						
                              <div class="single-price">
							
                                   <ul>
								<li>Rs . <?php echo $product_fetch['p_sprice']; ?></li> 
                                        
								<li style="text-decoration:line-through;">Rs . <?php echo $product_fetch['p_pcprice']; ?></li>  <br><br>
                                        
                                        <li><b>Availability : </b> <font size="+3" color="#00CC99">In Stock</font></li>
                                        <br><br>
								<li><span class="w3off">Quantity :<input  type="text" id="quantity" name="qty" value="1" class="form-control input-small" <?php echo $product_fetch['p_quantity']; ?> >  </span></li> 
							</ul>	
						</div> 
						<input type="hidden" name="code" value="<?php echo $product_fetch['p_id'];?>" />
                                <input type="hidden" name="typeadd" value="add" />
   <button type="submit" onClick="" class="w3ls-cart pw3ls-cart">
   <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart 
   </button>
</form>

						
					</div>
                         
				  
                       <?php 
				   }
				   else
				   {
				   ?>
                       
                         <div class="single-page-row" id="detail-21">
                    
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
                            <?php 
//PHP CODE START...............................................................................................................................................................//
						$temp=explode('/',$product_fetch['p_images']);
						foreach($temp as $images)
						{
       				    ?>
								<li data-thumb="<?php print "admin/img/".$images;?>">
									<div class="thumb-image detail_images"> <img src="<?php print "admin/img/".$images;?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
             <?php } ?>
								</li>
							</ul>
						</div>
					</div>
                         <form action="cart_code.php" method="post">
							
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $product_fetch['p_name']; ?></h3>
						
						<div class="single-rating">
							<ul>
								
								
							</ul> 
						</div>
						
                              <div class="single-price">
							
                                   <ul>
								<li>Rs . <?php echo $product_fetch['p_sprice']; ?></li> 
                                        
								<li style="text-decoration:line-through;">Rs . <?php echo $product_fetch['p_pcprice']; ?></li>  <br><br>
                                        
                                        <li><b>Availability : </b> <font size="+3" color="#00CC99">Out Of Stock</font></li>
                                        <br><br>
								<li><span class="w3off">Quantity :<input  type="text" id="quantity" name="qty" value="0" class="form-control input-small" <?php echo $product_fetch['p_quantity']; ?> >  </span></li> 
							</ul>	
						</div> 
						<input type="hidden" name="code" value="<?php echo $product_fetch['p_id'];?>" />
                                <input type="hidden" name="typeadd" value="add" />
   <button type="submit" onClick="" class="w3ls-cart pw3ls-cart">
   <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart 
   </button>
</form>

						
					</div>
                         
				  
                       <?php 
				   }?>
                        <div class="clearfix"> </div>
				</div>
				
			</div> 
			<!-- recommendations -->
			 <br><br><br><br>
			<!-- //recommendations --> 
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">About this item</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body"><ul class="is-hidden"> 
                             <?php 
							//$e=explode('.',$product_fetch['p_descript']);
							//foreach($e as $e1)
							//{
								?><br>
									<h4><b style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><li  class="fa fa-angle-double-right"><?php echo $product_fetch['p_descript'];?></li></b></h4>
                  <?php  //} ?></ul>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			<!-- //collapse --> 
			<!-- offers-cards --> 
			<div class="w3single-offers offer-bottom"> 
								<div class="clearfix"> </div>
			</div>
			<!-- //offers-cards -->
		</div>
	</div>
	<!--//products-->  
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
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
</body>
</html>