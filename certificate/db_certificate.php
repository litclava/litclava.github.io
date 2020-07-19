<?php
$con=mysqli_connect("localhost","root","","litwebsite");
$res=mysqli_query($con,"select * from life20 where status=0 limit 1");
//if(mysqli_num_rows($res)>0){
	header('content-type:image/jpeg');
	$font="BRUSHSCI.TTF";
	$image=imagecreatefromjpeg("certificatedesign.jpg");
	$color=imagecolorallocate($image,19,21,22);
	while($row=mysqli_fetch_assoc($res)){
		$name=$row['name'];
		imagettftext($image,50,0,365,420,$color,$font,$name);
		//$date="6th may 2020";
		//imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
		$file=time().'_'.$row['rollno'];
		imagejpeg($image,"certificatestore/".$file.".jpg");
		imagedestroy($image);
		require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image($file_path,0,0,210,150);
	$pdf->Output($file_path_pdf,"F");
		mysqli_query($con,"update life20 set status=1 where rollno='".$row['rollno']."'");
	}

?>