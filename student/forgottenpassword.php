<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
	
 $sql="select * from studentdetails  where emailid='$_POST[emailid]' and stud_phone='$_POST[stud_phone]'"; 
 $query=mysql_query($sql);
 $count=mysql_num_rows($query);
if($count==1){
 $fetch=mysql_fetch_array($query);
 $_SESSION["id1"]=$fetch['stud_id'];
 ?>
 <form name='yahoo'  action='updatepassword.php' method='post'>	
    <input type='password'name='password' placeholder="Enter New Password "/>
    <input type='submit' name='submit' />
    </form> 
    <?php	
}
else{
	echo "Please enter your details correctly";
}
}
?>