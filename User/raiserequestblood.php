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
table,td
{
 font-size:20px;
}
#btnsubmit:hover
{
 background-color:lightgrey;
}
#btnsubmit
{
 padding:4px 13px;
 font-size:14px;
 text-align: center;
 border-radius:5px;
 color:black;
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
	<br>
	<div style="margin-left:45px; min-height: 500px">
		<br>
			<h1>Raise a Request:</h1>
			<form name="form1" method="POST" action="">
			<table>
				<tr>
					<td>Blood Group</td>
					<td>:</td>
					<td>
					<?php
					$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
					$q="select * from tblbloodgroup";
					$result=mysqli_query($con,$q);
					?>
						<select id="ddlbg" name="ddlbg" style="height:30px;padding:5px; value="<?php if(isset($_POST['ddlbg'])) echo $_POST['ddlbg']; ?>" >
						<option value=""><-- Select Blood Group --></option>
						<?php
							while($line=mysqli_fetch_array($result))
							{
						?>
							<option value="<?php echo $line['bgid']; ?>">
								<?php echo $line['groupname']; ?>
							</option>
						<?php
							}
						?>
						</select>
					</td>
					<td style="width:650px"></td>
				</tr>
				<?php
					if(isset($_SESSION['hospital']))
					{
				?>
					 <tr>
					<td>Patient</td>
					<td>:</td>
					<td>
					<?php
					$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
					$q="select * from tblpatient";
					$result=mysqli_query($con,$q);
					?>
						<select id="ddlpt" name="ddlpt" id="ddlpt" style="height:30px;padding:5px; value="<?php if(isset($_POST['ddlpt'])) echo $_POST['ddlpt']; ?>"  >
						<option value=""><-- Select Patient --></option>
						<?php
							while($line=mysqli_fetch_array($result))
							{
						?>
							<option value="<?php echo $line['patientid']; ?>">
								<?php echo $line['username']; ?>
							</option>
						<?php
							}
						?>
						</select>
					</td>
					<td style="width:650px"></td>
				</tr>
				<?php
					}
				?>
				<tr>
					<td>Units</td>
					<td>:</td>
					<td><input type="text" name="txtunits" id="txtunits" value="<?php if(isset($_POST['txtunits'])) echo $_POST['txtunits']; ?>" /></td>
					<td style="width:650px"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="btnsubmit" value="INSERT" id="btnsubmit"/></td>
					<td style="width:650px"></td>
				</tr>
			</table>
			</form>
			<script language="javascript" >
			function clearInputs()
			{
					document.getElementById('ddlbg').value='';
					document.getElementById('txtunits').value='';
			}		
			function funname()
			{
				var a=document.getElementById('ddlbg');
				var c=document.getElementById('txtunits');
				if(a.value=="")
				{
					a.style.border='1px solid LightSlateGray';
				}
				if(c.value=="")
				{
					c.style.border='1px solid LightSlateGray';
				}
				
			}
			</script>
			<?php
				if(isset($_POST['btnsubmit']))
				{
					$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");
					$un=$_POST['txtunits'];
					$bgid=$_POST['ddlbg'];
					if(isset($_SESSION['hospital']))
					{
					$pid=$_POST['ddlpt'];
					}
					else if(isset($_SESSION['patient']))
					{
					$pid=$_SESSION['patient'];
					}
					if(empty($un)||empty($bgid))
					{
						echo '<script>funname();</script>';
						echo "<h4 style=\"color:red\">Please Insert all details first!</h4>";
					}
					else
					{
						$timezone = new DateTimeZone("Asia/Kolkata");
						$date = new DateTime();
						$s='';
						$date->setTimezone($timezone);
						$d= $date->format('Y-m-d h:i:s');
						$sql="insert into `tblbloodreq` values(NULL,'$bgid','$pid','$un','$d','$s')";
							if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record inserted !</h4>";
							echo '<script>clearInputs();</script>'; 
							}
							else
							{
							echo "<h4 style=\"color:red\">Error !</h4>";
							}
					}					
				}
			?>
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