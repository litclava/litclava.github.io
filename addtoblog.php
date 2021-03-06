<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156497551-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156497551-1');
</script>

<meta charset="utf-8">
<title>The Literaria Clava</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="lc2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-instagram {
  background: linear-gradient(to bottom left, #cc00cc 0%, #ffcc00 100%);
  color: white;
}
</style>
</head>
<body>
<div class="navbar-wrapper">
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<img src="lc2.png" align="left" width=60px>
<div class="container">
<!-- Responsive navbar -->
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
</a>
<h1 class="brand"><a href="index.html">Literaria Clava</a></h1>
<!-- navigation -->
<nav class="pull-right nav-collapse collapse">
<ul id="menu-main" class="nav">
<li><a title="team" href="about.html">About</a></li>

<li><a title="works" href="works.html">Published Work</a></li>
<li><a title="blog" href="datablog.php">Blog</a></li>
<li><a title="gallery" href="gallery.html">Gallery</a></li>
<li><a title="life" href="lufe.html">LiFe '20</a></li>
<li><a title="login" href="login.html">Login</a></li>
<li><a title="contact" href="contact.html">Contact Us</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
<style>
#rc{
border-radius: 15px 15px 15px 15px;
  padding: 10px;
  width: 300px;
  height: 50px;
}
#ta{
  border-radius: 15px 15px 15px 15px;
  padding: 10px;
  width: 600px;
  height: 600px;
  rows:"10";
}
</style>
<section>
    <div class="container">
          <br>
              <form method="post" action="">
                  <br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1><b><u>Add to Blog</h1></u></b><br>
                 Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="varchar" name="title" value="" id="rc" required><br><br>
				Name:&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="varchar" name="name" value="" id="rc" required><br><br>
				Content:
				<input type="text" name="content" value="" id="rc" required><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Post" id="rc"><br>
            </form>
            
    
    </div>
	
</section>
<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">

					<a href="https://www.facebook.com/literariaclava/" class="fa fa-facebook"></a>
					<a href="https://www.gnits.ac.in/LITERARIA-CLAVA" class="fa fa-google"></a>
					<a href="https://www.instagram.com/literaria_clava/?hl=en" class="fa fa-instagram"></a><br>
					<br>

      
						<center>Literaria Clava presented by G. Narayanamma Institute of Science and Technology</center>
					
				</div>
			</div>
		</div>

<!-- ./container -->
</footer>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.localScroll.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/inview.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
<?php
//include 'test.php';

$db = mysqli_connect('localhost','root','','litwebsite');
if(isset($_POST['submit'])){
	$a= mysqli_real_escape_string($db,$_POST["title"]);
	  $b= mysqli_real_escape_string($db,$_POST["name"]);
	   $c= mysqli_real_escape_string($db,$_POST["content"]);
$sql = mysqli_query($db,"INSERT INTO blog (`title`,`name`, `content`) 
	 VALUES ('".$a."', '".$b."','".$c."');");
		
if(!(mysqli_query($db,$sql))==TRUE){

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully submitted');
    
    </script>");


}
else
{
echo " error in  submission";
}
}
?>

     
</body>
</html>
