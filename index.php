<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CodeX</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="script/style.css">
</head>

<body>
	<!--Navbar Start-->
<div class="navbar navbar-dark sticky">
  <!--Left Link-->
  <img src="img/logo2.png" alt="abc" style="width: 100px;">
      <a href="#" class="glowBtn" style="top: -66px; left: 30px;">CodeX</a>  
  <!--Right Links-->
  <?php
        session_start();
        if(!isset($_SESSION['login_user']))
        {
		
		
				echo "<a href=\"login.htm\" class=\"glowBtn\" style=\"top: 10px; float:right;\">Signup/Login</a>";
        }
		else{
		echo "<a href=\"logout.php\" class=\"glowBtn\" style=\"top: 10px; float:right;\">logout</a>";
		}
?>
    
    <a href="Contact.htm" class="glowBtn" style="top: 10px; float:right;">Contact Us</a>
	<a href="about.htm" class="glowBtn" style="top: 10px; float:right;">About Us</a>
    <a href="random.htm" class="glowBtn" style="top: 10px; float:right;">Random Quote</a>
	<a href="ide.htm" class="glowBtn" style="top: 10px; float:right;">IDE</a>
    
</div>
<!--End Navbar-->
<center>
<!--<h1 style="left: -15px;height: 38px;font-size: 55px;line-height: 40px;letter-spacing: 0em;font-weight: 900;font-style: normal;">CodeX</h1>-->
         <p><a href="index.htm" style="font-family: jokerman;font-size: 72px;line-height: 82px;letter-spacing: 0.077em;font-weight: 700;font-style: normal;">
    Code X
  </a></p>

<!-- partial -->

</center><br><br><br>
	<div id='container' style="padding-top: 10px;">
				<a href="#" class='glowBtn' style="left: 151px !important; top: 122px !important;">Home</a>
				<a href="ide.htm" class='glowBtn' style="left: 239px !important; top: 122px !important;">Compiler</a>
				<a href="random.htm" class='glowBtn' style="left: 327px !important; top: 122px !important;">Random</a>
				<a href="about.htm" class='glowBtn' style="top: 252px !important; right: -96px !important;">About</a>
				<a href="contact.htm" class='glowBtn' style="top: 252px !important; right: 251px !important;">Contact</a>
				<a href="login.htm" class='superBtn' style="top: 382px;right: 328px;">Signup/Login</a>
				
	</div>
	  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>
