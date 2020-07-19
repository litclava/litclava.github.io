<?php
$con = mysqli_connect('localhost','root','','litwebsite');
//$chkbox1=$_POST['event'];
if(isset($_POST['submit']))
{
  
	$box1= $_POST["name"];
	  $box2= $_POST["email"];
	   $box3= $_POST["contact"];
	  $box4= $_POST["year"]; 
	  $box5= $_POST["branch"];
	  $box6= $_POST["rollno"];
	   $box7= $_POST["college"];
	$box8= $_POST["even"];
	 $sql = "SELECT id FROM life20 WHERE rollno='$box6'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $count = mysqli_num_rows($result);
      if(empty($box8))
	{
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Select at least one event.');
    window.location.href='lufe.html';
    </script>");
	}
else
{
      if(($count) == 0)  
	{
	$chk="";
	//if(isset($_POST['even']))
	//{
	foreach($_POST['even'] as $chkboxresult)
	{
		$chk.=$chkboxresult."\n";
	}
	
	 $cld =  mysqli_query($con,"INSERT INTO life20 (`name`,`email`,`contact`,`year`,`branch`,`rollno`,`college`,`event`) 
	 VALUES ('".$box1."', '".$box2."','".$box3."','".$box4."','".$box5."','".$box6."','".$box7."','".$chk."');");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Registered!!');
    window.location.href='index.html';
    </script>");
/*}
else
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Select at least one event.');
    window.location.href='lufe.html';
    </script>");
}*/

	
		 }
	
	else
        {
echo ("<script LANGUAGE='JavaScript'>
    window.alert('$box6'+' already registered.');
    window.location.href='lufe.html';
    </script>");
         
		
	}
}
	 
    
  


 








}
?>