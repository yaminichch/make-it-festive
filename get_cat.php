<?php 

include('conn.php');
		

if(isset($_REQUEST['Qty']))
{
		
	$code = filter_var($_REQUEST["code"], FILTER_SANITIZE_STRING); //product code
	$qty = filter_var($_REQUEST["Qty"], FILTER_SANITIZE_NUMBER_INT); 
	$qnt1 = $con->query("select * from master_product where p_quantity > 0 ");
		
	if(mysqli_num_rows($qnt1) > 0)
	{
		$qnt = $con->query("select * from master_product where p_quantity > '$qty' and p_id = '$code'");
		
		if(mysqli_num_rows($qnt) > 0)
		{
						
				$qty = $qty + 1;	
				
				$ndata = $con ->query("select * from master_product where p_id = '$code' ");
			
				$r = $ndata->fetch_array();
				if(mysqli_num_rows($ndata)>0)
				{	
					$newdata = array(array('name'=>$r['p_name'],'p_code'=>$code,'Qty'=>$qty,'price'=>$r['p_sprice']));
					echo "You added ". $qty ." Quantity !";
			
					if(isset($_SESSION['prod']))
					{
						$found = false;
						foreach($_SESSION['prod'] as $c_item)
						{
							if($c_item['p_code'] == $code)
							{	
				
								$product_data[] = array('name'=>$c_item['name'], 'p_code'=>$c_item['p_code'], 'Qty'=>$qty, 'price'=>$c_item['price']);
								$found = true;					
							}
							else
							{
								$product_data[] = array('name'=>$c_item['name'], 'p_code'=>$c_item['p_code'], 'Qty'=>$c_item['Qty'], 'price'=>$c_item['price']);
							}
						}
						if($found == false)
						{
							$_SESSION["prod"] = array_merge($product_data,$newdata); 
						}
						else
						{
							$_SESSION["prod"] = $product_data;
						}
					}
					else
					{
						$_SESSION["prod"] = $newdata;
					}
				}
			}
			else
			{
				echo "sorry ! In this product quantity is out of stock"; 
			}
		}
		else
		{
			 echo "Quantity must be grater than 0";
		}
		
}
	
if(isset($_REQUEST['Q']))
{
		
	$code = filter_var($_REQUEST["code"], FILTER_SANITIZE_STRING); //product code
	$qty = filter_var($_REQUEST["Q"], FILTER_SANITIZE_NUMBER_INT); 
	$qnt1 = $con->query("select * from master_product where p_quantity > 0 ");
		
	if(mysqli_num_rows($qnt1) > 0)
	{
		$qnt = $con->query("select * from master_product where p_quantity > '$qty' and p_id = '$code'");
		
		if(mysqli_num_rows($qnt) > 0)
		{
						
				$qty = $qty - 1;	
				
				$ndata =$con->query("select * from master_product where p_id = '$code' ");
			
				$r = $ndata->fetch_array();
				if(mysqli_num_rows($ndata)>0)
				{	
					$newdata = array(array('name'=>$r['p_name'],'p_code'=>$code,'Qty'=>$qty,'price'=>$r['p_sprice']));
					echo "You decreased ". $qty ." Quantity !";
			
					if(isset($_SESSION['prod']))
					{
						$found = false;
						foreach($_SESSION['prod'] as $c_item)
						{
							if($c_item['p_code'] == $code)
							{	
				
								$product_data[] = array('name'=>$c_item['name'], 'p_code'=>$c_item['p_code'], 'Qty'=>$qty, 'price'=>$c_item['price']);
								$found = true;					
							}
							else
							{
								$product_data[] = array('name'=>$c_item['name'], 'p_code'=>$c_item['p_code'], 'Qty'=>$c_item['Qty'], 'price'=>$c_item['price']);
							}
						}
						if($found == false)
						{
							$_SESSION["prod"] = array_merge($product_data,$newdata); 
						}
						else
						{
							$_SESSION["prod"] = $product_data;
						}
					}
					else
					{
						$_SESSION["prod"] = $newdata;
					}
				}
			}
			else
			{
				echo "sorry ! In this product quantity is out of stock"; 
			}
		}
		else
		{
			 echo "Quantity must be grater than 0";
		}
		
}
	

?>



