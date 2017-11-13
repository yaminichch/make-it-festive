<?php 
include_once("../../conn.php");
?>
<nav class="main-menu">
		<ul>
			<li>
				<a href="home.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Add & View
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					
                    
                     <li>
					<a class="subnav-text" href="add_famous_festival.php">
					Festival Details
					</a>
					</li>
                    
                    <li>
					<a class="subnav-text" href="add_product.php">
					Product
					</a>
					</li>
				</ul>
			</li>
            
            <li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Edit
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					
                    
                    <li>
					<a class="subnav-text" href="edit_famous_festival.php">
					Edit Festival Details
					</a>
					</li>
                   
                    <li>
					<a class="subnav-text" href="edit_product.php">
					Edit product 
					</a>
					</li>
				</ul>
			</li>
            
            <li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Gallery
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="view_festival_gallery.php">
					Festival Gallery
					</a>
					</li>
                    
                    <li>
					<a class="subnav-text" href="view_product_gallery.php">
					Product Gallery
					</a>
					</li>
				</ul>
			</li>
               
               <li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Orders
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					
                    
                    <li>
					<a class="subnav-text" href="view-shipping_details.php">
					Shipping Details
					</a>
					</li>
                   
                    <li>
					<a class="subnav-text" href="view-order.php">
					Product Order 
					</a>
					</li>
				</ul>
			</li>
				</ul>
			</li>
			<li>
				<a href="Userview.php">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					View - Users
					</span>
				</a>
			</li>
			
               <li>
				<a href="view-feedbacks.php">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					View - Feedbacks
					</span>
				</a>
			</li>
			
			
			
		</ul>
		<ul class="logout">
			<li>
			<a href="logout.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>