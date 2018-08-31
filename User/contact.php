<?php
ob_start();
?>
<!DOCTYPE html>
<head>
<title>LifeCare</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="js/slider/flexslider.css">
<link rel="stylesheet" href="js/slider/flexcar.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300|Droid+Serif:400,300' rel='stylesheet' type='text/css'>
<script src="js/vendor/custom.modernizr.js"></script>
<style>
#btnlogout:hover
{
 background: #377cc7;
 border-right:0.4px solid black;
}
#btnlogout
{
 background:#007ebf url('../images/menubg.png') repeat-x top; font-family: 'Droid Serif',serif;text-transform: uppercase; font-size:0.875em; font-weight: normal; border: none; color:white; padding: 21px 30px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"/>
}
#btnlogin:hover
{
 background: #377cc7;
 border-right:0.4px solid black;
}
#btnlogin
{
 background:#007ebf url('../images/menubg.png') repeat-x top; font-family: 'Droid Serif',serif;text-transform: uppercase; font-size:0.875em; font-weight: normal; border: none; color:white; padding: 21px 30px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;"/>
}
</style>
</head>
<body>
<div class="wrapper">
  <div class="header">
    <div class="row">
      <div class="columns large-12  header-inner" style="height:100px"><br><image src="images/logo4.jpeg" style="margin:10px 15px 30px 0px"><font size="75px">LifeCare</font></div>
      <div class="columns large-12">
       <nav>
          <section>
            <ul class="sf-menu large-12">
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="#">About</a>
			   <ul class="dropdown">
                  <li><a href="ablood.php">About Blood</a></li>
                  <li><a href="ablooddon.php">About Blood Donation</a></li>
			  </ul>
			  </li>
				  <?php
				  session_start();				  
				  if(isset($_SESSION['patient']))
					{
						echo"<li><a href=\"#\">Request</a><ul class=\"dropdown\">";
						echo "<li><a href=\"raiserequestblood.php\">Raise a Blood Request </a></li>";
						echo "<li><a href=\"myrequestblood.php\">MyRequest Blood</a></li>";
						echo"</ul></li>";
					}
					else if(isset($_SESSION['hospital']))
					{		
						echo"<li><a href=\"#\">Request</a><ul class=\"dropdown\">";
						echo "<li><a href=\"raiserequestblood.php\">Raise a Blood Request </a></li>";
						echo "<li><a href=\"myrequestblood.php\">MyRequest Blood</a></li>";
						echo"</ul></li>";
					}
				   ?>
				 <?php				  
				  if(isset($_SESSION['patient']))
					{
						
					}
					else if(isset($_SESSION['hospital']))
					{		
						echo"<li><a href=\"#\">Register</a>";
						echo " <ul class=\"dropdown\">";
						echo "<li><a href=\"cpatient.php\">Patient</a></li>";
						echo " <li><a href=\"cdonor.php\">Donor</a></li>";
						echo"</ul></li>";
					}
					else if(isset($_SESSION['donor']))
					{		
						
					}
					else
					{		
						echo"<li><a href=\"#\">Register</a>";
						echo " <ul class=\"dropdown\">";
						echo "<li><a href=\"cpatient.php\">Patient</a></li>";
						echo " <li><a href=\"cdonor.php\">Donor</a></li>";
						echo "<li><a href=\"chospital.php\">Hospital</a></li>";
						echo"</ul></li>";
					}
				   ?>
				    <li class="active"><a href="camps.php">Camps</a></li>
			   <?php			  
				  if(isset($_SESSION['patient']))
					{
						echo"<li><a href=\"#\">Account</a>";
						echo " <ul class=\"dropdown\">";
						echo "<li><a href=\"myprofile.php\">MyProfile</a></li>";
						echo "<li><a href=\"cpassword.php\">Change Password</a></li>";
						echo"</ul></li>";
						
					}
					else if(isset($_SESSION['hospital']))
					{		
						echo"<li><a href=\"#\">Account</a>";
						echo " <ul class=\"dropdown\">";
						echo "<li><a href=\"myprofile.php\">MyProfile</a></li>";
						echo "<li><a href=\"cpassword.php\">Change Password</a></li>";
						echo"</ul></li>";
					}
					else if(isset($_SESSION['donor']))
					{		
						echo"<li><a href=\"#\">Account</a>";
						echo " <ul class=\"dropdown\">";
						echo "<li><a href=\"myprofile.php\">MyProfile</a></li>";
						echo "<li><a href=\"cpassword.php\">Change Password</a></li>";
						echo"</ul></li>";
					}
				   ?>
			  
			  <li><a href="contact.php">Contact</a></li>
			   <li><form method="POST" action="" name="formhome">
			   <?php			  
				  if(isset($_SESSION['patient']))
					{
						echo "<input type=\"submit\" value=\"LOGOUT\" name=\"btnlogout\" id=\"btnlogout\"/>";
					}
					else if(isset($_SESSION['hospital']))
					{		
						echo "<input type=\"submit\" value=\"LOGOUT\" name=\"btnlogout\" id=\"btnlogout\"/>";
					}
					else if(isset($_SESSION['donor']))
					{		
						echo "<input type=\"submit\" value=\"LOGOUT\" name=\"btnlogout\" id=\"btnlogout\"/>";
					}
					else
					{	
						echo "<input type=\"submit\" value=\"LOGIN\" name=\"btnlogin\" id=\"btnlogin\"/>";
					}
				   ?>
				   </form>
			  <?php
				if(isset($_POST['btnlogout']))
					{  
						session_start();
						session_destroy();
						header("Location:home.php");
					}
				if(isset($_POST['btnlogin']))
					{  
						session_start();
						session_destroy();
						header("Location:login.php");
					}
				?>
			  </li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
	<br><br>
	<div style="margin-left:50px;font-size:30px">
	For any queries and concerns contact:
	</div>
	<br>
	<div style="height:500px;margin-left:50px;font-size:20px">
	<div>
	<b>POOJA PATEL</b><br>
	Phone number: 9601477882<br>
	Email: poojakpatel96@gmail.com<br>
	</div>
	<br>
	<div>
	<b>SVARA PRAJAPATI</b><br>
	Phone number: 9928475827<br>
	Email: svaraprajapati@gmail.com<br>
	</div>
    </div>
    <div class="credit-row">
      <div class="row">
        <div class="columns large-11 credit">&copy; 2016 All rights reserved by <a href="#">LifeCare</a> Design by: <a href="#">POOJA PATEL & SVARA PRAJAPATI</a></div>
        <div class="columns large-1"><img src="images/toparrow.png" alt="" class="scrollToTop"></div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="js/slider/jquery.flexslider.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});

function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    $('.flexslider').flexslider();
    $('.flexcar').flexslider();
});
</script>
</body>
</html>