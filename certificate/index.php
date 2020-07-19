<?php
header('content-type:image/jpeg');
//$font="BRUSHSCI.TTF";
$image=imagecreatefromjpeg("certificatedesign.jpg");
//$color=imagecolorallocate($image,19,21,22);
$name="Vishal Gupta";
imagettftext($image,50,0,365,420,$color,$font,$name);
//$date="6th may 2020";
//imagettftext($image,20,0,450,595,$color,"AGENCYR.TTF",$date);
imagejpeg($image);
require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->AliasNbPages();
	$pdf->Image($image,0,0,210,150);
	$pdf->Output();
//imagedestroy($image);
?>