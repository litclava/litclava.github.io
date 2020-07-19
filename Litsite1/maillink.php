<?php
//ob_start();
$con = mysqli_connect('localhost','root','','litwebsite');
if(isset($_POST["submit"]))
{
   $box1= $_POST["name"];
	  $box2= $_POST["email"];
	   $box3= $_POST["contact"];
	  $box4= $_POST["year"]; 
	  $box5= $_POST["branch"];
	  $box6= $_POST["rollno"];
	 $cld =  mysqli_query($con,"INSERT INTO life20 (`name`,`email`,`contact`,`year`,`branch`,`rollno`) 
	 VALUES ('".$box1."', '".$box2."','".$box3."','".$box4."','".$box5."','".$box6."');");
	
$f=mysqli_query($con,"IF rollno=='$box6' SELECT '0'; ELSE SELECT '1';");
if(($f)=='1')
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Registered!!');
    window.location.href='index.html';
    </script>");
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('rollno');
    window.location.href='lufe.html';
    </script>");	
}
}

?>