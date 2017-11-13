
<?php
include_once("../../conn.php");
$pid=$_REQUEST['pid'];
$sel="select * from sub_cat where cat_id='$pid'";
$cv=$con->query($sel);
?>
<tr>
<th>Id</th>
<th>Product Category Name</th>
</tr>
<?php
while($r1=$cv->fetch_array())
{?>
<tr>
<td align="center"><?php echo $r1['subcat_id'];?></td>
<td align="center" style="font-family:Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, serif;"><strong><?php echo $r1['subcat_name'];?></strong></td>
</tr>

<?php }?>
					<!--/row-->
 	