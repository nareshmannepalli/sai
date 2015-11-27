<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
$a=0;
	$select="select * from subject_mappings";
	$query=mysql_query($select);
	while($fetch=mysql_fetch_array($query)){ 
	if($fetch['subject_faculty']==$_POST['subject_faculty'] and $fetch['sem_faculty']==$_POST['sem_faculty'] and $fetch['department']==$_POST['department']){
		$a++;
	}
	}
	if($a==1){
		echo "The Subject is alredy asigned";
		header("refresh:0;url:mainsite.php");
	}
	else{
 $insert='insert into subject_mappings (faculty_name,department,sem_faculty,subject_faculty) values("'.$_POST['faculty_name'].'",
"'.$_POST['department'].'",
"'.$_POST['sem_faculty'].'",
"'.$_POST['subject_faculty'].'")';
if($query=mysql_query($insert)){
echo "success";
header("url=mainsite.php");
}
else{
echo "Not Success";
}
}
}
?>
