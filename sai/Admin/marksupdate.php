<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
if(isset($_POST['submit'])){
 $update='update markstable SET
`subject_marks`="'.$_POST['marks'].'" where marks_id="'.$_POST['marks_id'].'"';
if(mysql_query($update))
{
	echo "Success....";
 header("refresh:0;url=marks.php");
}
else{
	echo "Update is not successful...";
}

}
?>