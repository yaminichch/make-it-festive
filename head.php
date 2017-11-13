<?php
include_once("conn.php")
//include("database.php");?>
<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#"> </a></p>
			</div>
            <div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                        <?php
					    if(isset($_SESSION["r_email"]))
						{
						?>
						<ul class="dropdown-menu">
							
                                   <li><a href="logout.php">Logout</a></li> 
							<li><a href="profile.php">Profile</a></li>
                                    
						</ul> 
                        <?php 
						}
						else
						{?>
                        <ul class="dropdown-menu">
							<li><a href="login.php">Login</a></li> 
							<li><a href="signup.php">Sign up</a></li> 
							 
						</ul> 
                        <?php } ?>
					</li> 
                         <?php 
					if(isset($_SESSION['r_email']))
					{
					?>
					 <li class="dropdown head-dpdn">
						<a href="view-cart.php" class="dropdown-toggle" data-toggle=""><i class="fa fa-shopping-cart"></i> Cart<span class=""></span></a>
						
                              
					</li> 
					
                         <li class="dropdown head-dpdn">
						<a href="user-checkout.php" class="dropdown-toggle" data-toggle=""><i class="fa fa-crosshairs"></i> Check Out<span class=""></span></a>
						
                              
					</li>
					
					<?php }?>
					
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
        <?php 
					if(isset($_SESSION['r_email']))
					{?>
          <strong style="color:#0366EC"><marquee behavior="scroll" direction="left"><h4 class="modal-title" id="myModalLabel"><i class="" aria-hidden="true"></i><?php echo 'Welcome : '.$_SESSION['r_name'];?></h4></marquee></strong>
			<?php }
					?>
		        
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.php"><img src="images/website_logo.png" height="100" width="200"> <h1>
                    
                     <!--<span>M</span>king <i>Life</i></a></h1>
					<h5><strong>Celebration</strong></h5>  -->
                    
				</div>	
				<div class="header-search">
					<form action="search_prod.php" method="post">
						<input type="search" name="search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="my-account">
						<a href="contact.php"><i class="fa fa-map-marker" aria-hidden="true"></i> REACH US AT</a>						
					</div>
                   
                    <div class="cart" >
        	 				<a href=""><span class="fa fa-shopping-cart my-cart-icon"><b></b>
                          </span></a>
		 			</div>
					<!--<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>-->
        
         
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#">Go To FASTIVALS</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								
								<li class="has-children">
									 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="has-children">
											<a href="#">Festival</a>  
											<ul class="is-hidden"> 
												
												<?php 
												$f="select * from fest_detail";
												$f1=$con->query($f)
												or die(mysql_error());
												while($f2=$f1->fetch_array())
												{?>
													<li><a href="festivals.php?festdet=<?php echo $f2['fest_id'];?>"><?php echo $f2['fest_name']; ?></a></li>
									<?php }
												?>
											</ul>
										</li> 
										
										
									</ul> <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">FESTIVAL STORE</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="">All Festivals</a></li>
										<li class="has-children">
											 
											<ul class="is-hidden">  
												<li class="go-back"><a href="#">All Festivals</a></li>
                                                            <?php 
												$f="select * from fest_detail";
												$f1=$con->query($f)
												or die(mysql_error());
												while($f2=$f1->fetch_array())
												{?>
												                                                          <li><a style="color: #3f8654;
    font-size: 1.6rem;text-transform: uppercase;" href="festivals.php?festdet=<?php echo $f2['fest_id'];?>"><?php echo $f2['fest_name']; ?></a></li>
												<?php }?>
											</ul>
										</li> 
										
										<a href="state_festival.php" class="" style="font-size:24px;">Go To State Festivals</a>	 
									
										
									</ul> <!-- .cd-secondary-dropdown --> 
                                             	 
									
								</li> <!-- .has-children -->
								
								
								  
								  
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
				<div class="move-text">
					<div class="marquee"><a href="festival.php"> New collections are available here...... <span> Get Special 10 % Flat  Discount on all range of Products</span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
      <script type='text/javascript' src="js/jquery.mycart.js"></script>
     <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 1500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
                                    
                    </div>
			</div>
</div>