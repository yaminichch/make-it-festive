
<?php 
include_once("conn.php");
$uid = $_SESSION['r_id'];
$d = date('y/m/d');
if(isset($_REQUEST['cash']))
{
	if(isset($_SESSION['prod']))
	{
		$mode = "Cash on Delivery";
		$total = 0;
		foreach($_SESSION['prod'] as $c_item)
		{
				//code array
				$cod_array[] = $c_item['p_code'];
				$cod = $c_item['p_code'];
				$data =$con->query("select * from master_product where p_id = '$cod'")or die(mysqli_error());
				
				//price array
 				$prr[] = $c_item['price'];
				$pr = implode(',',$prr);
				$r =$data->fetch_array();
 
 				//qty  arrar
				$Qty = $c_item['Qty'];
				$qt[] = $c_item['Qty'];
				$qty = implode(',',$qt);
 				
				//price qty multiplication
				$pric = $c_item['price'] * $c_item['Qty'];
				$prict[] = $c_item['price'] * $c_item['Qty'];
				$prrc = implode(',',$prict);
				
				//total
				$total = $total + $pric;
				
			
              	$c = implode(',',$cod_array);
		}
					
		
		$q =$con->query("insert into product_order (pay_mode,prod_id,user_id,order_quantity,order_price,item_total,total_amount,order_date)
values('$mode','$c','$uid','$qty','$pr','$prrc','$total','$d')") or die(mysql_error());
					 
					 for($i= 0;$i<count($cod_array);$i++)
					 {
						 
						 $pd =$con->query("select * from master_product where p_id = ".$cod_array[$i])or die(mysqli_error());
						 $pr =$pd->fetch_array();
						
						 $a = $pr['p_quantity'] - $qt[$i];
						 $upq =$con->query("update master_product set p_quantity = $a where p_id = ".$cod_array[$i]);
						 
						 if($upq->num_rows == 0)
						 {
								header("location:order-report.php");
						 }
					}
					  
				
									
				
		
	}
}


			?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>User Checkout</title>
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
</head>
<body>
	<!-- header -->
<?php include("head.php"); ?>
	</div>
	<!-- //header --> 	
	<!-- login-page -->
	
     <div class="login-page">
		
          <div class="container"> 
          <?php 
		if(isset($_SESSION['prod']))
		{?>
			<h3 class="w3ls-title w3ls-title1">Give Your Order</h3>  
			<div class="login-body" style="margin-bottom:50px;">
				<form method="post">
					
					<input type="submit" name="cash" value="Cash On Delivery">
					
				</form>
			</div> 
		
          <?php }
		
		else
		{?>
          <div style="width:70%;margin-left:140px;margin-top:20px;  height:60px;float:left;background-color:#FC6;border:1px solid #F90;border-radius:70px; margin-bottom:60px;">
                              <div style="color:black;font-size:18px; margin-top:10px;">
                              <img style="height:20px;width:20px;margin:10px;"
                               src="images/warning.png">There are no Items in this cart  !
                              </div>
                         </div> 
          <?php }?>
	</div>
	<!-- //login-page --> 
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
		