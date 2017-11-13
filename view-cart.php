<?php
include_once("conn.php");
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>View-Cart</title>
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
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
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
<script type="text/javascript">
   	function getincr(str)
	{
		var abc;
		var qty = document.getElementById(str).value;
		
		if(window.XMLHttpRequest)
		{
			abc = new XMLHttpRequest(); 
		}
		else
		{
			abc = new ActiveXObject("Microsoft.XMLHTTP");
		}
		abc.open("POST","get_cat.php?Qty="+qty+"&code="+str,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
			if(abc.readyState == 4)
			{
				document.getElementById(str).value = alert(abc.responseText);
			}
		}
		return false;
		
	}
   function getdcr(str)
	{
		var abc;
		var dq = document.getElementById(str).value;
		
		if(window.XMLHttpRequest)
		{
			abc = new XMLHttpRequest(); 
		}
		else
		{
			abc = new ActiveXObject("Microsoft.XMLHTTP");
		}
		abc.open("POST","get_cat.php?Q="+dq+"&code="+str,true);
		abc.send();
		
		abc.onreadystatechange = function()
		{
			if(abc.readyState == 4)
			{
				document.getElementById(str).value = alert(abc.responseText);
			}
		}
		return false;
	}
   </script>

<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/component.css" />

<link href="" rel="stylesheet" type="text/css" media="all" /> 
<style>
.cart-item-info{
	width:77%;
	float:left;
	  border-bottom: 1px solid;
  padding-bottom: 5px;
}
.cart-item-info h3{
	font-size:1em;
	font-weight:600;
	margin-top: 1em;
}
.cart-item-info h3 span{
	display:block;
	font-weight:400;
	font-size:0.75em;
	margin-top:3px;
}
.cart-item-info h4{
	color:#000;
	font-size:1.8em;
	margin:2em 0 0.5em;
	font-weight:500;
	display:inline-block;
	margin-right:3em;
}
.cart-item-info h4 span{
	font-size:0.65em;
	font-weight:400;
} 
.cart-item-info p{
	font-size:1em;
	font-weight:400;
	line-height:1.3em;
}
.close1,.close2{
  background: url('../images/close.png') no-repeat 0px 0px;
  cursor: pointer;
  width: 28px;
  height: 28px;
  position: absolute;
  right: 0px;
  top: 0px;
  -webkit-transition: color 0.2s ease-in-out;
  -moz-transition: color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
}

</style>
</head>
<body>
	<!-- header -->
	<?php
	include_once("head.php");
	?>
	<!-- //header --> 	
	<!-- contact-page -->
	<div class="contact">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">View Cart </h3>  
			  <div class="col-md-9 cart-items">
			 <h2>My Shopping Bag</h2>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
                  <?php
					$total = 0;
		if(isset($_SESSION['prod']))
		{
	
			foreach($_SESSION['prod'] as $c_item)
			{
				$cod = $c_item['p_code'];
				//echo $cod;
				
				$data = $con->query("select * from master_product where p_id = '$cod' ")or die(mysqli_error());
				$r = $data->fetch_array();
				?>
                     <?php /*?>
				 
				 <a class="cart_quantity_delete close1" href="cart_code.php?cid=<?php echo $c_item['p_code']?>"><img  src="images/close.png"></a>
				 
				 <?php */?>
			 <div class="cart-header">
				 
				 <div class="cart-sec">
						<?php 
						$temp=explode('/',$r['p_images']);
						?>
						
                              <div class="cart-item cyc">
							 <img src="admin/img/<?php echo $temp[0];?>" width="100" height="100" style="border:2px #333333 solid;padding:5px;margin-top:20px;" />
						</div>
                            
					   <div class="cart-item-info">
							 <h4><span style="color:#F60;text-decoration:underline;"><?php echo $r['p_name'];?></span></h4><br>
							 <h5><span style="text-decoration:line-through;">Rs.<?php echo $r['p_pcprice'];?></span></h5><br>
                                     <h5><span style="color:#F30;font-size:25px;">Rs.<?php echo $r['p_sprice'];?></span></h5><br>
                                    <div class="cart_quantity_button">
							
							 <p class="qty">Qty ::</p><br>
                                   		<a class="cart_quantity_up"  href="" onClick="getincr('<?php echo $c_item['p_code'];?>');">  + </a>
									<input class="form-control input-small" type="text" name="qty"
                                     value="<?php echo $c_item['Qty'];?>" autocomplete="off" size="2" id="<?php echo $c_item['p_code'];?>">
									<a class="cart_quantity_down" href="" onClick="getdcr('<?php echo $c_item['p_code'];?>');">  - </a>
                                             <br><br><br>
                                             <p style="font-size:24px;color:#F60;"> Total : <?php 
				   			$pric = $c_item['price'] * $c_item['Qty'];
							echo $pric;
				   		   $total = $total + $pric;
						  
				   ?>
                                </p> 
								</div>
							                       
					   </div>
					   <div class="clearfix"></div>
												
				  </div>

			 </div>
                </div>
                <div class="col-md-3 cart-total">
			 <a class="continue" href="index.php" style="color:#FFF;font-size:24px;border:2px;background-color:#03F;padding:8px;">Continue to Shopping</a>
                <br><br><br><br>
			 <div class="price-details">
				 
                      
				   <h4 class="last-price" style="color:#F60;">Grand TOTAL : 
                       <span class="total" style="font-size:22px;"><?php echo $total;?></span></h4>
				  
				 <div class="clearfix"></div>				 
			 </div>	
			 			 
			 <div class="clearfix"></div>
			 <a class="order" href="shipping_details.php" style="color:#000;font-size:18px;border:2px;background-color:#F93;padding:7px;">Place Order</a>
			 
			</div>
                <?php }
			 
		}
		else
		{?>
          <div style="width:70%;margin-left:140px;margin-top:20px;  height:60px;float:left;background-color:#FC6;border:1px solid #F90;border-radius:70px;">
                              <div style="color:black;font-size:18px; margin-top:10px;">
                              <img style="height:20px;width:20px;margin:10px;"
                               src="images/warning.png">Your Cart is Empty ! 
                              </div>
                         </div> 
          
          <?php }?>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 		
		 </div>
			
               
		</div>
	</div>
	<!-- //contact-page --> 
	<!-- footer-top -->
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