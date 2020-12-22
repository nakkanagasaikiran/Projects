<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("BMS",$connection); 
?>
                                
                                
<?php
$res=mysql_query("select * from regulation");
while($row=mysql_fetch_array($res))
{
?>
<option><?php echo $row["Regulation"]?></option>
<?php   
}
?>