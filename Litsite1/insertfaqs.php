<?php
$db = mysqli_connect('localhost','root','','litwebsite');
if(isset($_POST['submit']))
{
  
	$box1= $_POST["name"];
	  $box2= $_POST["email"];
	   $box3= $_POST["query"];
	  
	 
	
	 $cld =  mysqli_query($db,"INSERT INTO faqs (`name`,`email`,`query`) 
	 VALUES ('".$box1."', '".$box2."','".$box3."');");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Query Accepted!!');
    window.location.href='faqspage.html';
    </script>");


	
		 
	
	
}
?>