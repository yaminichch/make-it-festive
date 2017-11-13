<?php 
include_once('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Festival By State</title>
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
<script >
function getst()
{
	a = document.getElementById('state').value;
	//alert(a);
	var abc;
	if(window.XMLHttpRequest)
	{
		abc = new XMLHttpRequest();
		
	}
	else
	{
		abc = new ActiveXObject();	
	}
	abc.onreadystatechange = function()
	{
		if(abc.readyState == 4)
		{
			document.getElementById('vstate').innerHTML = abc.responseText;
		}
	}
	abc.open('POST','get_state_fest.php?id='+a,true);
	abc.send();
}
</script>
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
					<li class="active">Festivals </li>
				</ol>
                    
                    <div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Search By State</h3>  
			<div class="login-body">
				<form method="post">
					<select name="id" id="state"  style=" font-size: 1em;
    padding: 0.9em 1em;
    width: 100%;
    color: #999;
    outline: none;
    border: 1px solid #E2DCDC;
    background: #FFFFFF;
    margin: 0 0 1em 0;
	-webkit-transition:.5s all;
	-moz-transition:.5s all;
	-o-transition:.5s all;
	-ms-transition:.5s all;
	transition:.5s all;
	-webkit-appearance:none;
     margin-bottom:30px;">
     					<option>---SelectState---</option>
                         	<?php 
						$state = $con->query("select * from state");
						while($f = $state->fetch_array())
						{?>
                              <option value="<?php echo $f['sid'];?>"><?php echo $f['sname'];?></option>
                              
                              <?php }?>
                         </select>
                        <a href="#" style="border: none;outline: none;
    cursor: pointer;  color: #fff;  background: #0280e1; width: 100%;padding: .8em 1em;
    font-size: 1em;margin: 0.5em 0 0; -webkit-transition: .5s all; -moz-transition: .5s all;
    -o-transition: .5s all; -ms-transition: .5s all; transition: .5s all;
    text-transform: uppercase;-webkit-appearance: none;"
     onClick="getst(this.value)">Search</a>
					
				</form>
			</div>  
			
		</div>
	</div>
               
                       
	</div>
                         
                          
    
                     
			    <!-- //breadcrumbs -->
               
                <!-- recommendations -->
			
               <div class="collpse tabs" class="" id="vstate">
			<h3 class="w3ls-title"> Information</h3> 
				
                   
                           
			</div>
			<!-- //recommendations -->
				
				
				<!-- add-products --> 
				 
				<!-- //add-products -->
			
			<!-- recommendations -->
			
			<!-- //recommendations -->
		</div>
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
	

     	<!-- //footer-top -->  
	<!-- subscribe -->
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