<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_studentcorner",$con);
$select='select * from leavetbl where emid="'.$_SESSION['id'].'"';
?>
<table>
	<tr>
<th>S.No</th>
<th>Emplyoee ID</th>
<th>Deportment</th>
<th>Leave From Date</th>
<th>Leave To Date</th>
<th>Leave Apply Date</th>
<th>No Of Days</th>
<th>Type Of Leave</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
