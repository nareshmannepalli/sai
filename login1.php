<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("Sai",$con);

 $sql="CREATE TABLE IF NOT EXISTS yahoo (`first` varchar(50) NOT NULL, `last` varchar(50) NOT NULL,`email` varchar(50) NOT NULL,`password` varchar(50) NOT NULL,`ppassword` varchar(50) NOT NULL, `gender` varchar(20) NOT  NULL, `number` varchar(15) NOT NULL, `eemail` varchar(30) NOT NULL, `location` varchar(30) NOT NULL) ";
 $query=mysql_query($sql);

if(isset($_POST['nextstep'])){
echo $insert='insert into yahoo
(first,last,email,password,ppassword,gender,number,eemail,location)
values("'.$_POST['first'].'","'.$_POST['last'].'",
"'.$_POST['email'].'",
"'.$_POST['password'].'",
"'.$_POST['ppassword'].'","'.$_POST['gender'].'","'.$_POST['number'].'",
"'.$_POST['eemail'].'",
"'.$_POST['location'].'")';

if(mysql_query($insert)){
echo "success";

}
else{
 echo "not inserted ";	
}

	
}
