<?php
$dbhost = "localhost";
 $username = "root";
 $password = "";
 $dbname = "litwebsite";
 
$con = mysqli_connect($dbhost, $username, $password, $dbname);

include_once('fpdf182\fpdf.php');

class PDF extends FPDF
{
// Page header

function Header()
{
    // Logo
	
  $this->Rect( 10,10 ,200-10 ,287-10);
	$this->SetLineWidth(10);
	$this->Image('border1.jpg',0,0,210,10);
	$this->Image('border1.jpg',0,287,210,10);
	$this->Image('border2.jpg',200,10,10,277);
$this->Image('border.jpg',0,10,10,287);
    $this->Image('LCwhiteBG.jpg',11,11,30);
	//$this->SetFillColor(255,0,0);
	//$this->Rect( 0,0 ,50 ,5);
    $this->SetFont('Times','B',20);
    // Move to the right
    $this->Cell(80);
    // Title
	
	$this->SetTextColor(255,0,0);
    $this->Cell(20,20,'LITERARIA CLAVA',5,3,'C');
    // Line break
   
	//$this->SetFont('Arial',13);
	$this->Cell(10);
$this->SetTextColor(100);
$this->Cell(10,10,'G.Narayanamma Institute of Technology',5,3,'C');
$this->Cell(10,10,'and Science',5,3,'C');
$this->Image('gnitslogo1.jpg',174,11,25);
 $this->Ln(20);
$this->SetTextColor(200,0,0);
$this->Cell(190,10,'Certificate of Participation',5,3,'C');
$this->Image('head1.jpg',50,70,110,20);
$this->Ln(20);

}

// Page footer
function Footer()
{
   /* // Position at 1.5 cm from bottom
    $this->SetY(-50);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');*/
}
}

if(isset($_POST['generate'])) 
{
      $events= $_POST["event"];
      $rollno= $_POST["rollno"];
	
      $sql = "SELECT id FROM life20 WHERE rollno = '$rollno'";
      $res = mysqli_query($con,$sql);
      $row1 = mysqli_fetch_array($res,MYSQLI_ASSOC);
     
      //$active = $row['active'];
      $count = mysqli_num_rows($res);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if(($count) == 1) 
      {
	
$result = mysqli_query($con, "SELECT name FROM life20 WHERE rollno='$rollno'");
$result1 = mysqli_query($con, "SELECT college FROM life20 WHERE rollno='$rollno'");
$result2 = mysqli_query($con, "SELECT event FROM life20 WHERE rollno='$rollno'");
$header = mysqli_query($con, "SHOW columns FROM life20");
$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$result3=mysqli_query($con,"SELECT '$events'");
$ev=$row2['event'];
if(strpos($ev,$events)!==FALSE)
{
//$pdf = new FPDF('P','mm',array(200,200));
$pdf = new PDF();
//header

$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',15);
//foreach($header as $heading) {
//$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
//}
$pdf->SetFont('Arial','B',15);
$pdf->Cell(190,5,"This is to certify that",5,3,'C');

$pdf->Ln(10);
$pdf->Cell(165,-1,"Mr./Ms.  ",5,3,'C');
$pdf->Line(103,117,140,117);

foreach($result as $row) {
foreach($row as $column)
$pdf->Cell(223,1,$column,5,3,'C');
}
$pdf->Ln(10);
$pdf->Cell(50,1," of",5,3,'C');
$pdf->Line(40,129,180,129);
foreach($result1 as $row) {
foreach($row as $column)
$pdf->Cell(200,0,$column,5,3,'C');
}
$pdf->Ln(13);
$pdf->Cell(140,-1,"has participated in the event\n\n",5,3,'C');
$pdf->Line(115,141,160,141);
foreach($result3 as $row) {
foreach($row as $column)
$pdf->Cell(255,1,$column,5,3,'C');
}
$pdf->Ln(10);
$pdf->Cell(190,1,"organised by ",5,3,'C');
$pdf->Ln(10);
$pdf->Cell(190,1,"LIFE'20.",5,3,'C');
$pdf->Output();

echo ("<script LANGUAGE='JavaScript'>
    	 window.alert('Welcome User. Click OK to continue!');
    	 //window.location.href='certi.html';
    	 </script>");
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    	 window.alert('You have not participated in this event');
    	 window.location.href='certi.html';
    	 </script>");
}

	
      }
      else 
      {
         //$error = "Your Login Name or Password is invalid";
         echo ("<script LANGUAGE='JavaScript'>
    	window.alert('You have entered  wrong details.Try Again! ');
    	window.location.href='certi.html';
    	</script>");
      }
}
?>
