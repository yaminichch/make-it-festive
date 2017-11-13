<?php

include_once('conn.php');
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Order-Report</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</style>
</head>

<body>

<br>  
<h4 align="center" style="color:#039;padding-bottom:20px; font-family:Georgia, 'Times New Roman', Times, serif;">Thank you for your interest in our Festivals Store . Your order has been placed successfully.</h4>
<?php

if(isset($_SESSION['r_id']))
{
	$uid = $_SESSION['r_id'];
	
	$dat = date('Y/m/d');	
				
				//echo $data = "select * from registration join product_order on registration.r_id = product_order.user_id join shipping_order on registration.r_id = shipping_order.user_id join master_product on master_product.p_id = product_order.prod_id where registration.r_id = '$uid' and order_date = '$dat' order by order_id desc limit 1";
				 
				 //exit;
				 $data =$con->query("select * from registration join product_order on registration.r_id = product_order.user_id join shipping_order
				 on registration.r_id = shipping_order.user_id join master_product on master_product.p_id = product_order.prod_id where registration.r_id = '$uid' and order_date = '$dat' order by order_id desc limit 1")or die(mysqli_error());
				 //$data = mysql_query("select * from userlogin join prod_order on userlogin.uid = prod_order.user_id join shipping_order on userlogin.uid = shipping_order.user_id join payment on userlogin.uid = payment.uid join master_product on master_product.pid = prod_order.prod_id where userlogin.uid = '$uid' and order_date = '$dat' order by order_id desc limit 1")or die(mysql_error());
				$r =$data->fetch_array();
				
 ?>
            
<div class="omain">
        <div style="width:980px;height:700px;float:left;" >                
    <div class="oheader">Order Details</div>
       <div class="pdiv">
       		<p style="font-family:Georgia, 'Times New Roman', Times, serifpa; font-size:16px; padding:3px;text-align:left;">
			 Order-Placesd :  <?php echo $r['order_date']; ?><br>Order-Total : Rs . <?php echo $r['total_amount']; ?> <br>Order - Number :<?php echo $r['order_id'];?>
            </p> 
       

		</div>

<div class="oheader">Item Details</div>
<div class="pdiv" style="height:210px;">
          
 <table width="990px">
       <tr style="font-family:Georgia, 'Times New Roman', Times, serifpa; font-size:20px; padding-top:7px;padding-left:5px; color:#6F3737;" style="" >
         <th >Product-Id </th>
       <th>Product-Ordered</th> 
       <th> Quantity </th>
       <th> Price </th>
        <th> Item(Sub-Total)</th> 
       
       </tr>
       <?php  $oid = explode(',',$r['prod_id']);
		// print_r($oid);
		 //exit;
			 $qt = explode(',',$r['order_quantity']);
			 
			$op = explode(',',$r['order_price']);
			$itotal = explode(',',$r['item_total']);
			?>
			 <tr>
			<?php 
			for($i = 0;$i<count($oid);$i++)
			{
				
			
				$mm =$con->query("select * from master_product where p_id = ".$oid[$i])or die(mysqli_error());
				$rr=$mm->fetch_array();
			
				
			?>  
        
     
         	<td><?php echo $oid[$i]; ?></td>
             <td><?php echo $rr['p_name'];?></td> 
            <td> <?php echo $qt[$i]; ?></td>
              <td><?php echo $op[$i]; ?></td>
            <td> Rs. <?php echo $itotal[$i];?></td>
	
         </tr> 
     
      	 <?php }
		 
		  
		 ?> 
       
              </table> 		 
     <br><br><br><br> <div style="width:300px;height:20px;float:right;">
        <p style="color:#6F3737;font-size:18px;margin-left:80px;">   Grand-Total :
     Rs. <?php echo $r['total_amount']; ?>
          </p> </div>
</div>
		
        
        <div class="oheader">Delivery Address</div>
       <div class="pdiv">
       		<p style="float:left; font-family:Georgia, 'Times New Roman', Times, serifpa; font-size:16px; padding:3px;">
			<?php echo $r['address'];?>
            
            </p>
            <p style="float:right; font-family:Georgia, 'Times New Roman', Times, serifpa; font-size:16px; padding:3px;">
            Item(Sub-Total) : Rs. <?php echo $r['total_amount'];?><br>
           
           
            Total for this Delivery : Rs. <?php echo $r['total_amount'];?>
            </p> 
       

		</div>
        
        <div class="oheader">Payment Information</div>
       <div class="pdivlast">
       		<p style="float:left; font-family:Georgia, 'Times New Roman', Times, serifpa; font-size:16px; padding:3px;">
			Payment Method : <br>
           <?php echo $r['pay_mode'];?>
            </p>
            <p style="float:right; font-family:Georgia, 'Times New Roman', Times, serifpa; font-size:16px; padding:3px;">
            Item(Sub-Total) : Rs. <?php echo $r['total_amount'];?><br>
            
            Total : Rs. <?php echo $r['total_amount'];?><br>
            Grand Total : Rs . <?php echo $r['total_amount'];?>
            </p> 
       

		</div>

<?php }?>

<div style="width:1200px;height:100px;margin-top:30px; float:left;">
<div style="width:33%;height:20px;float:left;margin-left:120px;">
<a href="" onClick="window.print() ;" style="font-size:20px;color:#03F;font-weight:600;font-family:Georgia, 'Times New Roman', Times, serif;"><img src="images/down.png"style="width:35px;height:35px;margin-right:10px;" />Download</a> 
</div>
<div style="width:33%;height:20px;float:left;margin-left:120px;" >
<a href="index.php" style="font-size:20px;color:#03F;font-weight:600;font-family:Georgia, 'Times New Roman', Times, serif;">&laquo; Go Back</a>
</div>

              
</div>
<div style="width:33%;height:20px;float:left; margin-left:450px;">
<a href="logout.php" style="font-size:20px;color:#03F;font-weight:600; font-family:Georgia, 'Times New Roman', Times, serif;"><img src="images/gnome_panel_force_quit.png" style="width:25px;height:25px;margin-right:10px;"/>Log out</a> 
</div>
</div>
</div><!--Main div--->
 <div class="cl">&nbsp;</div>
						
</body>
</html>