<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
$select='select * from studentdetails'; 
$query=mysql_query($select); 
$count=mysql_num_rows($query);
while($fetch=mysql_fetch_array($query)){
	?>
<a href="#"><?php echo "stud_name:".$fetch['stud_name'];
echo "<br>";
}
?>
