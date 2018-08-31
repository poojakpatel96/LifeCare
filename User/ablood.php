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
</head>
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
p
{
 font-size:16px;
}
.b
{
 font-size:18px;
}
</style>
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
	<br>
	<div class="row content-wrapper">
    <div class="columns large-12">
      <div class="row">
          <div style="margin-left:40px;margin-right:40px">
		    <center><h3>About Blood</h3></center>
			<p class="b"><b>What is blood? What is it composed of?</b></p>
			<p>Blood is the red coloured fluid flowing continuously in our body’s circulatory system. It contains mainly a fluid called plasma in which are suspended cellular elements. Three types of cells: Red Blood Cells or RBC’s, White Blood Cells or WBC’s and tiny platelets form the cellular element.</p>
          </div>
		  <div style="margin-left:40px;margin-right:40px">
			<p class="b"><b>How much blood does a person have?</b></p>
			<p>The total amount of blood in the human body can vary with several factors, like age, sex, health condition, body type, etc. However, for an average adult, the volume of blood in his/her body is 7-8% of the body weight (The amount of blood would vary between 5 to 6 litres for an average adult).</p>
          </div>
		  <div style="margin-left:40px;margin-right:40px">
			<p class="b"><b>How is blood formed?</b></p>
			<p>Blood consists of RBCs, WBCs, platelets suspended in plasma. In early embryonic life blood cells are formed in liver and spleen. But by the fifth month the Haemopoisis (i.e., formation of blood) occurs in bone marrow and lymphatic tissues. At birth the entire bone marrow is red and active. Gradually as the child grows, the marrow remains red only in the flat bones and vertebrae. The RBC, grannulocytes of WBC and platelets are produced mainly by bone marrow. The lymphocytes, monocytes, plasma cells are formed in the lymphoid and Reticulo Endothelial tissues. The orderly proliferation of the cells in the bone marrow and their release into circulation is carefully regulated according to the needs of body. Every day, new blood cells are being produced in the bone marrow and every day old cells are dying and being removed from the body. Red blood cells have a life of 120 days and when it becomes old and senile it is thrown out. White cells live for a few days and platelets for a few hours. Thus, daily new cells are added to the circulation and old are removed from it.</p>
          </div>
		  <div style="margin-left:40px;margin-right:40px">
			<p class="b"><b>What are the functions of the various components of blood?</b></p>
			<p>The functions of the 4 components of blood are: <br>
				a) Plasma: acts as a vehicle to carry many substances like glucose, fats and proteins, enzymes and hormones, etc., in addition to the blood cells. 
				<br>b) Red Cells: carry oxygen from lungs to various body tissues and take back carbon dioxide from the cells and tissues to be thrown out of body in the form of exhaled air. 
				<br>c) White cells: mainly act as body scavengers and guards. They help in the immune system of the body and act as defence forces of the body, killing the bacteria or any other organisms entering the body. 
				<br>d) Platelets: help in the clotting and coagulation of blood. We have experienced in our life that whenever we get injured the bleeding stops after a few minutes. This is brought about by a mechanism called clotting of blood in which platelets plays a very vital role.</p>
          </div>
		  <div style="margin-left:40px;margin-right:40px">
			<p class="b"><b>What is Haemoglobin?</b></p>
			<p>Haemoglobin is a substance present in the red cells. It is helpful in carrying oxygen and carbon dioxide. On an average, in a healthy male it should be between 14-16 gm % and in a female it should be about 12-14 gm %. This is also being daily synthesized and the new is replacing the old stock.</p>
          </div>
		  <div style="margin-left:40px;margin-right:40px">
			<p class="b"><b>What are blood groups? What is Rh factor?</b></p>
			<p>Every individual has two types of blood groups. The first is called the ABO grouping and the second type is called Rh grouping. In the ABO group there are four categories namely A Group, B Group, O Group and AB Group. In the Rh Group either the individual is Rh-positive, or Rh-negative. Rh is a factor called as Rhesus factor that has come to us from Rhesus monkeys. It refers to a protein on the red blood cells (Protein present: Rh-positive; Protein absent: Rh-negative). Thus, each and every human being will fall in one of the following groups. A positive or A negative B positive or B negative O positive or O negative AB positive or AB negative There are also some sub groups and other classifications which have not been discussed here.</p>
          </div>
        </div>
      </div>
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