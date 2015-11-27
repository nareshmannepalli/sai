<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
	
 $sql="select * from faculty  where Email_id='$_POST[Email_id]' and phonenumber='$_POST[phonenumber]'"; 
 $query=mysql_query($sql);
 $count=mysql_num_rows($query);
if($count==1){
 $fetch=mysql_fetch_array($query);?>
 <form name='faculty'  action='updatepassword1.php' method='post'>	
    <input type='hidden' name='id' value="<?php echo $fetch['id']?>"/> 
    <input type='password'name='Password' placeholder="Enter New Password "/>
    <input type='submit' name='submit' />
    </form> 
    <?php	
}
else{
	echo "Please enter your details correctly";
}
}
?>