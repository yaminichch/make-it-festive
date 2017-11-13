<?php
include_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
		function get_state(str)
		{

			var abc;
			if(window.XMLHttpRequest)
			{
				abc=new XMLHttpRequest();
			}
			else
			{
				abc=new ActiveXobject('Microsoft.XMLHttp');
			}
			abc.onreadystatechange=function()
			{
				if(abc.readyState==4)
				{
					document.getElementById('state').innerHTML=abc.responseText;
				}
			}
			abc.open("POST","get_s1.php?id="+str,true);
			abc.send();
		}
	</script>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign Up :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="js/validate.js" type="text/javascript"></script>
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
	<?php include("head.php"); 
//PHP CODE START.....................................................................................................................................................................//
//update profile...
if(isset($_REQUEST['updu']))
 {
	  $upd=$_REQUEST['updu'];
	  $get_id="select * from registration where r_id='$upd'";
	  //echo $get_id;
	  //exit;
	   $get_query=$con->query($get_id);
	   $get_fetch=$get_query->fetch_array();
	   
		   if(isset($_REQUEST['update']))
		 {
					 $name=$_REQUEST['name'];	  
	  				 $email=$_REQUEST['email'];
					 $pass=$_REQUEST['password'];
					 $gen=$_REQUEST['gender'];
					 $add=$_REQUEST['address'];
					 $pno=$_REQUEST['phone'];
					 $coun=$_REQUEST['country'];
					 $state=$_REQUEST['state'];
					 $city=$_REQUEST['city'];
					 $files="admin/img/".$_FILES['file']['name'];  
					 
						 if($_FILES['file']['name'] != "" )
		 				 {
					  			move_uploaded_file($_FILES['file']['tmp_name'],$files);
					  $uins="update registration SET r_name='$name',r_email='$email',r_password='$pass',r_gender='$gen',r_address='$add',r_pno=$pno,country_id='$coun',state_id='$state',city_id='$city',r_dp='$files' where r_id='$upd'";
				     //echo $uins;
					 //exit;
					$updu=$con->query($uins) or die(mysql_error());
					
												 if($updu>0)
											  {?>
											  <div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">		
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit" aria-hidden="true"></i>Your data are updated...</h4>   				</div>
                
				<div class="modal-body modal-body-sub"> 
       					<a href="profile.php" class="close2" >Oky</a>
	  			</div>
			</div>
		</div>
	</div>
    <script>
		$('#myModal88').modal('show');
    </script>
										  <?php
										  }
										  else
										  {?>
										  <div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">		
			<div class="modal-content">
				<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit" aria-hidden="true"></i>Your data are not updated...</h4>   
				</div>
                
				<div class="modal-body modal-body-sub"> 
       					<a href="edit_profile.php" class="close2" >Sorry</a>
	  			</div>
			</div>
		</div>
	</div>
    <script>
		$('#myModal88').modal('show');
    </script>
										  <?php
										  
										}
									
						 }
						 else
						 {
							$uins="update registration SET r_name='$name',r_email='$email',r_password='$pass',r_gender='$gen',r_address='$add',r_pno=$pno,country_id='$coun',state_id='$state',city_id='$city' where r_id='$upd'";
				     //echo $uins;
					 //exit;
					$updu=$con->query($uins) or die(mysql_error());
					
												 if($updu>0)
											  {?>
											  <div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">		
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit" aria-hidden="true"></i>Your data are updated...</h4>   
				</div>
                
				<div class="modal-body modal-body-sub"> 
       					<a href="profile.php" class="close2" >Oky</a>
	  			</div>
			</div>
		</div>
	</div>
    <script>
		$('#myModal88').modal('show');
    </script>
										  <?php
										  }
										  else
										  {?>
										  <div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">		
			<div class="modal-content">
				<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit" aria-hidden="true"></i>Your data are not updated...</h4>   
				</div>
                
				<div class="modal-body modal-body-sub"> 
       					<a href="edit_profile.php" class="close2" >Sorry</a>
	  			</div>
			</div>
		</div>
	</div>
    <script>
		$('#myModal88').modal('show');
    </script>
										  <?php
										  
							
										}
							 
						 }
	
		 }
}
//End update Profile...
//PHP CODE END.........................................................................................................................................................................//
?>
    </div>
	<!-- //header --> 	
	<!-- sign up-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Update your account</h3>  
			<div class="login-body">
				<form action="" method="post" onSubmit="return validate()" enctype="multipart/form-data">
				<strong><input type="text" id="fn" value="<?php echo $get_fetch['r_name'];?>" class="user" name="name" onBlur="return bfn(this.value )" placeholder="Enter your First Name" required></strong><div class="label-primary" id="d1"></div>
				<strong><input type="text" class="email" value="<?php echo $get_fetch['r_email'];?>" id="em" name="email" onBlur="return bem(this.value )" placeholder="Enter your Email" required></strong><div class="label-primary" id="d2"></div>
				<strong><input type="password" id="ps" value="<?php echo $get_fetch['r_password'];?>" name="password" onBlur="return bps(this.value )" class="lock" placeholder="Enter your Password" required></strong><div class="label-primary" id="d3"></div>
				<strong><input type="text" name="address" value="<?php echo $get_fetch['r_address'];?>" id="add" onBlur="return badd(this.value )" class="address-left" placeholder="Enter your Aaddress" required></strong><div class="label-primary" id="d4"></div>
                <strong><input type="radio" name="gender" class="radio-inline"  value="male"
<?php
//PHP CODE START.....................................................................................................................................................................//
			if($get_fetch['r_gender']=='male')
			{?>
			checked
            <?php
			}?>>Male</strong>
                <strong><input type="radio" name="gender" class="radio-inline" value="female" 
<?php
//PHP CODE START.....................................................................................................................................................................//
			if($get_fetch['r_gender']=='female')
			{?>
			checked
            <?php
			}?>>Female</strong><br><br>
			    <strong><input type="text" name="phone" id="pn" value="<?php echo $get_fetch['r_pno'];?>" class="user" onBlur="return bpn(this.value )" placeholder="Enter your Phone Number" required></strong><div class="label-primary" id="d5"></div>
           <select name="country" class="form-control" id="country" onChange="get_state(this.value)">
			   <option id="0">---------select-country---------</option>
			   <?php
//PHP CODE START.....................................................................................................................................................................//
			   $cou=$con->query("select * from country");
			   while($c1=$cou->fetch_array())
			   {
				   ?>
				   <option value="<?php echo $c1['cid'];?>"

					   <?php if($c1['cid'] == $get_fetch['cid'])
					   {
						   ?>
						   selected
					   <?php
					   }
					   ?>>
					   <?php echo $c1['cname'];?>
				   </option>
			   <?php
			   }
//PHP CODE END.........................................................................................................................................................................//
			   ?>
           </select><br>
           <select name="state" class="form-control" id="state">
                <option>---Select State---</option>
			  <?php
//PHP CODE START.....................................................................................................................................................................//
			   $sta=$con->query("select * from state");
			   while($s2=$sta->fetch_array())
			   {
				   ?>
				   <option value="<?php echo $s2['sid'];?>"

					   <?php if($s2['sid'] == $get_fetch['sid'])
					   {
						   ?>
						   selected
					   <?php
					   }
					   ?>>
					   <?php echo $s2['sname'];?>
				   </option>
			   <?php
			   }
//PHP CODE END.........................................................................................................................................................................//
			   ?>
           </select>
           </select><br>
           <select name="city" class="form-control">
                <option>---Select City---</option>
			   <?php
//PHP CODE START.....................................................................................................................................................................//
			   $cit=$con->query("select * from city");
			   while($c2=$cit->fetch_array())
			   {
				   ?>
				   <option value="<?php echo $c2['ctid'];?>"

					   <?php if($c2['ctid'] == $get_fetch['ctid'])
					   {
						   ?>
						   selected
					   <?php
					   }
					   ?>>
					   <?php echo $c2['ctname'];?>
				   </option>
			   <?php
			   }
//PHP CODE END.........................................................................................................................................................................//
			   ?>
           </select>
           </select><br>	
           <input type="file" value="<?php echo $get_fetch['r_dp'];?>" name="file"><br>
           <strong><input type="password" id="ps1" name="password" value="<?php echo $get_fetch['r_password'];?>" onBlur="return bcp(this.value )" class="lock" placeholder="Enter your Confirm Password" required></strong><div class="label-primary" id="d6"></div>
                    <input type="submit" name="update" value="UPDATE ">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			
		</div>
	</div>
	<!-- //sign up-page --> 
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
