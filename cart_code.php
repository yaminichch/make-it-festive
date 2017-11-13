<?php 
include_once("conn.php");

if(isset($_REQUEST['typeadd']) && isset($_REQUEST['typeadd']) == 'add')
	{
if(!isset($_SESSION['r_email']))
{
	echo "<script type='text/javascript'>alert('Please Login ...');</script>";
		?>
        <script type="text/javascript"> window.location = "login.php"; </script>
        
<?php 
}
else
{
				
		 $code = filter_var($_POST["code"], FILTER_SANITIZE_STRING); //product code
		
		$qty = filter_var($_POST["qty"], FILTER_SANITIZE_NUMBER_INT); 
			
		$ndata =$con->query("select * from master_product where p_id = '$code' ");
		
		$r =$ndata->fetch_array();
	
		$newdata = array(array('name'=>$r['p_name'],'p_code'=>$code,'Qty'=>$qty,'price'=>$r['p_sprice']));
	//print_r($newdata);
	//exit;
		if(isset($_SESSION['prod']))
		{
			echo $_SESSION['prod'];
			
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
		
		header('location:view-cart.php');		
	}
}

		
	
	// remove sesssion item
	if(isset($_REQUEST['cid']) && isset($_SESSION['prod']))
	{
		$cid = $_REQUEST['cid'];
		foreach($_SESSION['prod'] as $c_item)
		{
				$pcode = $c_item['p_code'];
				if($cid != $pcode)
				{
					$product[] = array('name'=>$c_item['name'],'p_code'=>$c_item['p_code'],'Qty'=>$c_item['Qty'],'price'=>$c_item['price']);
				}
				
				$_SESSION['prod'] = $product;			
				
		}
		header('location:view-cart.php');
	}
	if(isset($_REQUEST['newcid']) && isset($_SESSION['prod']))
	{
		$cid = $_REQUEST['newcid'];
		foreach($_SESSION['prod'] as $c_item)
		{
				$pcode = $c_item['p_code'];
				if($cid != $pcode)
				{
					$product[] = array('name'=>$c_item['name'],'p_code'=>$c_item['p_code'],'Qty'=>$c_item['Qty'],'price'=>$c_item['price']);
				}
				
				$_SESSION['prod'] = $product;			
				
		}
		header('location:user-checkout.php');
	}

	
 ?>