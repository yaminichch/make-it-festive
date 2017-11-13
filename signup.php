<?php
include_once("conn.php");

?>
<?php
//PHP CODE START....................................................................................................................................................................//
//Registration... 
if(isset($_REQUEST['sub']))
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
	  
	  $files="admin/img/".$_FILES['files']['name']; 
	  move_uploaded_file($_FILES['files']['tmp_name'],$files);

 $regi_query="insert into registration (r_name,r_email,r_password,r_gender,r_address,r_pno,cid,sid,ctid,r_dp) values ('$name','$email','$pass','$gen','$add',$pno,'$coun','$state','$city','$files')";
//echo $regi_query;
//exit;
$insert_user=$con->query($regi_query) or die(mysql_error());

if($insert_user > 0)
	  {?>
      <div class="agileits-modal modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog">		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-registered" aria-hidden="true"></i>Your registered</h4>   
				</div>
                
				<div class="modal-body modal-body-sub"> 
       					<a href="login.php" class="close2" >Oky</a>
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
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-registered" aria-hidden="true"></i>Please Try Again...</h4>   
				</div>
                
				<div class="modal-body modal-body-sub"> 
       					<a href="signup.php" class="close2" >Sorry</a>
	  			</div>
			</div>
		</div>
	</div>
    <script>
		$('#myModal88').modal('show');
    </script>
  <?php
  }
}//End Registration... 
//PHP CODE END.........................................................................................................................................................................//
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Making Life an E-commerce Online Shopping Website | Sign Up</title>
<link href="images/xp015.jpg" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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

<script>
function fetst(val)
{
	$.ajax({
		type:"POST",
		url:"getdata.php",
		data:"cid="+val,
		success: function(data)
		{
			$("#sid").html(data);
		}
	});
	
}
</script>
<script>
function fetct(val)
{
	$.ajax({
		type:"POST",
		url:"getdata.php",
		data:"sid="+val,
		success: function(data)
		{
			$("#ctid").html(data);
		}
	});
	
}
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
	<?php include("head.php");?>
    </div>
	<!-- //header --> 	
	<!-- sign up-page return validate()-->
	<div class="login-page">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Create your account</h3>  
			<div class="login-body">
				<form method="post" onSubmit="" enctype="multipart/form-data">
				<strong><input type="text" id="fn" class="user" name="name" onBlur="return bfn(this.value )" placeholder="Enter your First Name" required></strong><div class="label-primary" id="d1"></div>
				<strong><input type="text" class="email" id="em" name="email" onBlur="return bem(this.value )" placeholder="Enter your Email" required></strong><div class="label-primary" id="d2"></div>
				<strong><input type="password" id="ps" name="password" onBlur="return bps(this.value )" class="lock" placeholder="Enter your Password" required></strong><div class="label-primary" id="d3">
</div><strong><input type="password" id="ps1" name="password" onBlur="return bps(this.value )" class="form-control" placeholder="Enter your Confirm Password" required></strong><div class="label-primary" id="d6"></div>
				<strong><input type="text" name="address" id="add" onBlur="return badd(this.value )" class="address-left" placeholder="Enter your Aaddress" required></strong><div class="label-primary" id="d4"></div>
                <strong><input type="radio" name="gender" class="radio-inline" value="male">Male</strong>
                <strong><input type="radio" name="gender" class="radio-inline" value="female">Female</strong><br><br>
			    <strong><input type="text" name="phone" id="pn" class="user" onBlur="return bpn(this.value )" placeholder="Enter your Phone Number" required></strong><div class="label-primary" id="d5"></div>
          <select name="country" class="form-control" id="cid"  onChange="fetst(this.value);">
                            <option value="">Select Country</option>
                           
                           <?php
$sel="select * from country";

$ex=$con->query($sel);
while($fet=$ex->fetch_array())
{
?>
<option value="<?php echo $fet['cid'];?>"><?php echo $fet[1];?></option>
<?php
}
?>
                            </select>
          <br>
           <select name="state" class="form-control" id="sid" onChange="fetct(this.value)">
                <option id="0">---Select State---</option>

           </select><br>
           <select name="city" class="form-control" id="ctid">
                <option id="0">---Select City---</option>
			   
           </select><br>	
           <input type="file" name="files" required><br>
           
                    <input type="submit" name="sub" value="Sign Up ">
					
				</form>
			</div>  
			<h6>Already have an account? <a href="login.php">Login Now »</a> </h6>  
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

