<html>
<body>
<div class="container"><br>
		<br>
		<br>
	<center><h3>FAQs</h3>
	
	<table border=10px>
	<tr> 
	<td>Name</td>
	<td>Email</td>
	<td>Query</td>
	
	</tr>
	<?php
//include 'db.php';
$db = mysqli_connect('localhost','root','','litwebsite');
$sql="SELECT * FROM faqs";
$query=mysqli_query($db,$sql);
$i=1;
while($faqs=mysqli_fetch_assoc($query)){
?>
<tbody>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $faqs['name'];?></td>
<td><?php echo $faqs['email'];?></td>
<td><?php echo $faqs['query'];?></td>

</tr>
<?php } ?>
	</table></center></div>  
</body></html>