
<?php 
include_once("conn.php");
$coun =$con->query("select * from country");
		$state =$con->query("select * from state");
		$city = $con->query("select * from city");
		$eid = $_SESSION['r_email'];
		
		$da =$con->query("select * from registration where r_email = '$eid' ")or die(mysql_error());
		
$uid = $_SESSION['r_id'];

if(isset($_REQUEST['shipping']))
{
	
			$dnm = $_REQUEST['dispnm'];
			$a1=$_REQUEST['add'];
			$ph=$_REQUEST['phno'];
			$zip=$_REQUEST['zip'];
			$cpull=$_REQUEST['countrypull'];
			$spull=$_REQUEST['statepull'];
			$ci=$_REQUEST['citypull'];
								
		
		$vs =$con->query("select * from shipping_order where user_id = '$uid'")or die(mysql_error());
		
		if(mysqli_num_rows($vs) > 0)
		{
			
			$updd =$con->query("update shipping_order set user_id = '$uid' ,address = '$a1',pno ='$ph',zcode = '$zip',country = '$cpull',state = '$spull',
		city = '$ci' where user_id = '$uid' "); 
		  ?>
		  <script  type="text/javascript">
			alert("Updated Shipping Details ....");
		  window.location = "user-checkout.php";
 			
		
 			</script>
            <?php 
		  
			
			
		}
		else
		{
			//echo $i = "insert into shipping_order(user_id,address,pno,zcode,country,state,city)values('$uid','$a1','$ph','$zip','$cpull' ,'$spull','$ci')";
			//exit;
			$ins =$con->query("insert into shipping_order(user_id,address,pno,zcode,country,state,city)values('$uid','$a1','$ph','$zip','$cpull' ,'$spull','$ci')")or die(mysqli_error());
			
           	
		 ?>
			  <script  type="text/javascript">
			alert("Inserted Shipping Details ....");
			window.location = "user-checkout.php";
 			</script>
            <?php 
			
			
		}
}?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Shipping Details</title>
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
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
<link href="css-2/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css-2/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
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
<?php include("head.php"); 


			
							?>

	</div>
	<!-- //header --> 	
	<!-- login-page -->
	<div class="login-page">
		<div class="container" style="width:600px;"> 
			 
			<div class="col-md-12" >
			<h1 class="margin-bottom-15">Shipping Form</h1>
		
          	<?php 
          	//echo $vs = "select * from shipping_order join registration on shipping_order.user_id = registration.r_id join country on shipping_order.country = country.cid join state on shipping_order.state = state.sid join city on shipping_order.city = city.ctid where shipping_order.user_id = '$uid'";
			//exit;
							$vs = $con->query("select * from shipping_order join registration on shipping_order.user_id = registration.r_id join country on shipping_order.country = country.cid join state on shipping_order.state = state.sid join city on shipping_order.city = city.ctid where shipping_order.user_id = '$uid'")or die(mysqli_error());
		
							
                            	$q = $vs->fetch_array();
						?>
               <form class="form-horizontal templatemo-payment-form templatemo-container" role="form" action="" method="post">	
				
                <br><br>Please Fillup The Shipping Details...</p>
				<hr>
						
		        <div class="form-group">
		        	
		          	<div class="col-sm-9 templatemo-card-details">
		          		<div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">Email : </label>
			            	<font size="+1" color="#FF9900"><?php echo $_SESSION['r_email'];?>
                             </font>
                             
                              </div>
                              <div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">Username</label>
			            	<input type="text" class="form-control" id="card_name" name="dispnm" value="<?php echo $q['r_name']?>" placeholder="">
		          		</div>
                              <div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">Country</label>
			            	<select class="form-control" name="countrypull">
                              	<option value="0">---SelectCountry---</option>
                                       <?php while ($c =$coun->fetch_array())
										{?>
										<option value="<?php echo $c['cid'];?>"
										<?php if($q['country']== $c['cid'])
                                                {?>
                                                 selected="selected";
                                         <?php } ?>>
                                        
                                        <?php echo $c['cname'];?></option>
	                                    <?php } ?>
                              </select>
		          		</div>
                              <div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">State</label>
			            	<select class="form-control" name="statepull">
                              	<option value="0">---SelectState---</option>
                                        <?php while($cs =$state->fetch_array())
                                        {?>
                                        <option value="<?php echo $cs['sid'];?>"
                                        <?php if($q['state']== $cs['sid'])
                                                {?>
                                         selected="selected";
                                         <?php } ?>>
                                        
                                        <?php echo $cs['sname'];?></option>
                                        <?php } ?>
                              </select>
		          		</div>
		          		
                              <div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">City</label>
			            	<select class="form-control" name="citypull">
                              	<option value="0">---SelectCity---</option>
                                        <?php 
								
								while($c1 =$city->fetch_array())
								{
								?>
                                        <option  value="<?php echo $c1['ctid'];?>"
                                       <?php if($q['city'] == $c1['ctid']){?> 
                                        selected
                                       
                                        <?php }?>
                                       
                                        ><?php echo $c1['ctname'];?></option>
                                        
							<?php }?>
                              </select>
		          		</div>
				         	<div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">Zipcode</label>
			            	<input type="text" class="form-control" id="card_name" name="zip" value="<?php echo $q['zcode']?>" placeholder="">
		          		</div>
                              	<div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">Address</label>
			            	<textarea class="form-control" name="add"><?php echo $q['address']?></textarea>
                              </div>
                              	<div class="col-md-12 form-group">
		          			<label for="card_name" class="control-label">Phone No</label>
			            	<input type="text" class="form-control" id="card_name" name="phno" value="<?php echo $q['pno']?>" placeholder="">
		          		</div>
                              <div style="width:200px;height:50px;float:left;">
                        <input type="submit" name="shipping"  value="Submit" class="btn btn-success btn-round">
			         		</div>			         
			         </div>
                        	                        
		        </div>
                  
		                 
		      </form>
		</div>  
		</div>
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
		