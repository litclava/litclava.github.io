<?php
   $con = mysqli_connect('localhost','root','','litwebsite');
// session_start();
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($con,$_POST['username']);
      //$password = md5(mysqli_real_escape_string($con,$_POST['password']));
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username = '$email' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if(($count) == 1) {
         
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Welcome User. Click OK to continue!');
    window.location.href='dash.html';
    </script>");
      }
	  else 
	  {
         //$error = "Your Login Name or Password is invalid";
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('You have entered  wrong details.Try Again! ');
    window.location.href='login.html';
    </script>");
      }
   }
?>
