<?php error_reporting(0);
include('database.php')?>
<?php
if(isset($_REQUEST['id']))
{
    $s=$_REQUEST['id'];
    $q=mysql_query("select * from state where country_id='$s'");
    ?>
    <select name="state_id" class="form-control1"style="
    background: none;
    
    border: 1.5px solid #CBCBCB;
    width: 100%;
    outline: none;
    padding: 10px 15px 10px 15px;
    font-size: .9em;
    font-weight: 400;
    color: #111111;
    margin-bottom: 1.5em; 
">
        <option id="0">---select-state---</option>
        <?php
        while($f=mysql_fetch_array($q))
        {
            ?>
            <option value="<?php echo $f['state_id'];?>"><?php echo $f['state_name'];?>
            </option>
        <?php } ?>
    </select>
<?php } ?>