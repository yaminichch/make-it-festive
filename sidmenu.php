<?php
include_once('conn.php');
$sel="select * from product_category";
$ex=$con->query($sel);
?>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="offers.html">Today's Offers</a></li>
							<?php while($fet=$ex->fetch_array())
{
	?>
									<li class="has-children">
									
	<a href="#"><?php echo $fet['pcat_name']; ?></a> 
					<?php
	$cat_id=$fet[0];
	$selsub="select * from sub_cat where cat_id='$cat_id'";
	$exsub=$con->query($selsub);
	?>
					<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li class="has-children">
									
											<ul class="is-hidden"> 
	<?php
								while($fetsub=$exsub->fetch_array())
	{
	?>
												<li> <a href="products.php>typ=<?php echo $fetsub['subcat_name']; ?>"><?php echo $fetsub['subcat_name']; ?></a> </li>
												<?php } ?>
												
											</ul>
										</li> 
									
										
										
										
									</ul>
					
						<?php

}
									?>
				
									 <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								
							
							</ul> <!-- .cd-dropdown-content -->
						</nav>