<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("sai",$con);
$select="SELECT yahoo.*,marks.* FROM  yahoo INNER JOIN marks on yahoo.id=marks.customerid";
$query=mysql_query($select);

?>
<style>
body{background:#C63;
     
}
table{
	 border: 2px solid black;
	 border-collapse:collapse;
	 width:100%;
	 height:100%;
}
table th{
	border:2px solid black;
	padding:10px;

}
table td{
	border:1px solid black;
	padding:10px;
	

}
table tr{
	border:1px soild black;
	
	
}
</style>
<body>
<table>
<tr>
<th>S.NO</th>
<th>Name</th>
<th>Sub1</th>
<th>Sub2</th>
<th>Sub3</th>
<th>Sub4</th>
<th>Sub5</th>
<th>Sub6</th>
<th>Total</th>
<th>Avg</th>
<th>Grade</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $a++;?></td>
<td><?php echo $fetch['first'];?></td>
<td><?php echo $fetch['sub1'];?></td>
<td><?php echo $fetch['sub2'];?></td>
<td><?php echo $fetch['sub3'];?></td>
<td><?php echo $fetch['sub4'];?></td>
<td><?php echo $fetch['sub5'];?></td>
<td><?php echo $fetch['sub6'];?></td>
<?php $total=$fetch['sub1']+$fetch['sub2']+$fetch['sub3']+$fetch['sub4']+$fetch['sub5']+$fetch['sub6'];?>
<td><b><?php echo $total;?></b></td>
<td><?php echo $total/6;?></td>
<td><?php 
	if($total==0){
		echo "Fail";
}
else{
if($total>480){
	echo "a";
}
else if($total>340){
	echo "b";
}
else {
	echo "c";
}
}
?></td>
</tr>
<?php
}
?>

</table>
</body>
