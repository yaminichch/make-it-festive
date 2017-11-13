<?php
include_once("conn.php");
if(isset($_REQUEST['cid']))
{
?>
	<option value="0">Select State</option>
	<?php
	$cid=$_REQUEST['cid'];
	$sel="select * from state where cid='$cid'";
	$ex=$con->query($sel);
	while($fet=$ex->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}
}
if(isset($_REQUEST['sid']))
{
	?>
	<option value="0">Select City</option>
	<?php
	$sid=$_REQUEST['sid'];
	$sel="select * from city where sid='$sid'";
	$ex=$con->query($sel);
	while($fet=$ex->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}

}



if(isset($_REQUEST['sid1']))
{
?>
	<option value="">Select District</option>
	<?php
	while($fet=$seldist1->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}
}
if(isset($_REQUEST['distid1']))
{
	?>
	<option value="">Select City</option>
	<?php
	while($fet=$selct1->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}

}
if(isset($_REQUEST['sid2']))
{
?>
	<option value="">Select District</option>
	<?php
	while($fet=$seldist2->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}
}
if(isset($_REQUEST['distid2']))
{
	?>
	<option value="">Select City</option>
	<?php
	while($fet=$selct2->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}

}

if(isset($_REQUEST['sid3']))
{
?>
	<option value="">Select District</option>
	<?php
	while($fet=$seldist3->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}
}
if(isset($_REQUEST['distid3']))
{
	?>
	<option value="">Select City</option>
	<?php
	while($fet=$selct3->fetch_array())
	{
		
		?>
        <option value="<?php echo $fet[0];?>"><?php echo $fet[1];?></option>
        <?php
	}

}

?>