
<?php 

include_once('conn.php');
?> 

                   
 <h2 class="title text-center">Festivals <strong>Shop </strong></h2>    			    				    				
					<?php 
                    if(isset($_REQUEST['id']))
                    {
							$id = $_REQUEST['id'];
							$state =$con->query("select * from fest_detail where state_id = '$id'");

							 while($r = $state->fetch_array())
							{?>
                                   
                                    <div style="width:100%;height:100%;float:left;" >

                                      <form action="index.php" method="post">  
                                        <div style="outline: 3px solid #999;
  -moz-outline-radius: 3px;  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12); box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
	 border:2px solid #CCC;background:-moz-linear-gradient(top,#EFEFEF,white);margin-bottom:20px;
	background:-webkit-linear-gradient(100deg,#EFEFEF,white); width:1000px; height:500px;float:left;">
    
                      <p style="font-family:Georgia, 'Times New Roman', Times, serifpa;font-size:16px;float:left;margin-left:300px;margin-bottom:30px; height:10px; width:800px; color:#C00;font-size:24px;text-decoration:underline;  padding:10px;">
<?php echo $r['fest_name'];?></p> 


 				
                    <div style="width:900px;height:100px;float:left;">
                      
				  <?php 
				 //echo $r['fest_img'];
                      // exit;
				   $temp=explode('/',$r['fest_img']);
						foreach($temp as $image)
						{
       				    ?>
                         <img  style=" float:left; margin:3px;border:1px solid #999;" src="<?php print "admin/img/".$image;?>" alt=""
                         width="90px" height="90px" />
                    
					<?php }?>
                        
                         </div> 
                            
                          <p style="margin-left:40px; font-family:Georgia, 'Times New Roman', Times, serifpa;font-size:16px; padding:10px;margin:20px;float:right;">
<?php echo $r['fest_descript'];?></p> 
					
		<div style="width:400px;height:100px;margin-left:30px;float:left;">
                <a href="new_state_fest.php?ftid=<?php echo $r['fest_id'];?>&&st=<?php echo $id;?>" class="btn btn-primary">Shopnow</a>
         </div>
</form>
 </div>

 <?php		}
				}?>
				
                   