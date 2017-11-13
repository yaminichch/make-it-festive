<?php
include_once("conn.php");
?>
<?php //error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
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
    <!-- recommendations -->
    <?php 
//PHP CODE START...............................................................................................................................................................//
							if(isset($_REQUEST['festdet']))
							{
								$festid=$_REQUEST['festdet'];
								$festi="select * from fest_detail where fest_id ='$festid'";
								$festi_query=$con->query($festi) or die (mysql_error());
								$festi_fetch=$festi_query->fetch_array();
							}
	?>
			<div class="recommend">
				<h3 class="w3ls-title"><?php echo $festi_fetch['fest_name'];?> Images</h3> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
                
				<div id="owl-demo5" class="owl-carousel">
                 <?php 
//PHP CODE START...............................................................................................................................................................//
						$temp=explode('/',$festi_fetch['fest_img']);
						foreach($temp as $image)
						{
       				    ?> <div class="owl-item">
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"></div>
							<a href="#"><img alt="img" src="<?php print "admin/img/".$image;?>" height="300px" width="350px"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="#"><?php echo $festi_fetch['fest_name'];?></a></h4>
                            </div>        
						</div>  
					</div>   </div>  
                    <?php } ?>        
				</div>    
			</div>
			<!-- //recommendations -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.php">Home</a></li>
					<li class="active">Festival Information</li>
				</ol> 
			    <!-- //breadcrumbs -->	
                  <!-- collapse-tabs -->
			<div class="collpse tabs">
			<h3 class="w3ls-title"><?php echo $festi_fetch['fest_name']; ?> Information</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
                          </h4>
                            </div>
                          <div id="collapseOne" role="tabpanel">
							<div class="panel-body"><ul class="is-hidden"> 
                             <?php 
								$a=0;
							$e="select * from fest_detail";
							$ex=$con->query($e);
							while($fet=$ex->fetch_array())
							
							{
								$a++;
								if($a%2==0)
								{
								?><br>
									<h4><b style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
                 
                 					<li  class="fa fa-angle-double-right">
                 					<?php echo $fet['fest_descript']; ?></li></b></h4>
                  
			   			   <?php  }
								else
								{
						?><br>
									<h4><b style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;">
                 
                 					<li  class="fa fa-angle-double-right" style="background-color:slategray; color: #FFF">
                 					<?php echo $fet['fest_descript']; ?></li></b></h4>
                  <?php  			
								}
							} ?>
                  </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
            
				<div class="product-top">
                
					<h4><?php echo $festi_fetch['fest_name']." Product";?></h4>
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
				  <?php 
				$q="select * from master_product where fam_id='$festid'";
				$q1=$con->query($q) or die(mysql_error());
				while($festi_fetch=$q1->fetch_array())
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
					 
					 
				 <div class="clearfix"> </div>
				</div>
				<!-- add-products --> 
				<div class="w3ls-add-grids w3agile-add-products">
					<a href="#"> 
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<!-- //add-products -->
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="sidebar-row">
						<h4>State Of Festival</h4>
                        
						<ul class="faq">
							<li class="item1"><a href="#">Famous Festival<span class="glyphicon glyphicon-menu-down"></span></a>
                            <?php 
//PHP CODE START.....................................................................................................................................................................//
									
												$f="select * from famous_festival";
												$f1=$con->query($f) or die(mysql_error());
								
							?>
								<ul><?php
								while($fetch_fest=$f1->fetch_array())
									   {?>
									<li class="subitem1"><a href="festival.php?festdet=<?php echo $fetch_fest['fam_id'];?>"><?php echo $fetch_fest['fam_name']; ?></a></li>										
										 <?php } ?>
								</ul>
                               
							</li>
						</ul>
                        
                                          
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
	     	</div>
			</div>
			<div class="clearfix"> </div>
			<!-- recommendations -->
			
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products-->  
	<!-- footer-top -->
	<?php include("foot_top.php");?>
	<!-- //footer-top -->  
    <!-- subscribe -->
    <?php include("subscribe.php");?>
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
	<script src="js/main.js"></script>
     <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/bootstrap.js"></script>  
</body>
</html>