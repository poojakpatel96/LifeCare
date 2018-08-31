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
.btnsubmit:hover
{
 background-color:lightgrey;
}
.btnsubmit
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
	<div style="margin-left:50px">
	<br><h3>Update Profile:</h3>
	</div>
	<div style="margin-left:50px; min-height:500px;">
		<?php
		if(isset($_SESSION['patient']))
		{
		$id=$_SESSION['patient'];
		$con=mysqli_connect(@"localhost","root","","dblifecare");
		$sql="select * from tblpatient,tblbloodgroup,tblcity where `patientid`='$id' and tblbloodgroup.bgid=tblpatient.bloodgrp and tblcity.cityid=tblpatient.cityid";
		$result=mysqli_query($con,$sql) or die("Database table error");
		echo "<table><tr><td>Name</td><td>:</td><td>";
		while($line=mysqli_fetch_assoc($result))
		 {
		?>
		<form id="form1" name="form1" method="post" action="" />
		<input type="text" name="name" id="name" value="<?php echo $line['fullname']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Username</td><td>:</td><td>";
		?>
		<input type="text" name="username" value="<?php echo $line['username']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Blood Group</td><td>:</td><td>";
		?>
			<?php
			$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
			$q="select * from tblbloodgroup";
			$result2=mysqli_query($con,$q);
			$val=$line['bgid'];
			?>
			<?php
				while($line2=mysqli_fetch_array($result2))
				{
				 if($line2['bgid']==$val)
				 {
				  $val=$line2['groupname'];
				  $val2=$line2['bgid'];
				 }
				}
			?>
			<select id="ddlbg" name="ddlbg" style="height:30px;padding:5px;" value="" >
			<option value="<?php echo $val2; ?>"><?php echo $val; ?></option>
			<?php
				$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
				$qu="select * from tblbloodgroup";
				$result3=mysqli_query($con,$qu);
				while($line2=mysqli_fetch_array($result3))
				{
			?>
				<option value="<?php echo $line2['bgid']; ?>">
				<?php echo $line2['groupname']; ?>
				</option>
			<?php
				}
			?>
			</select>
				
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Email id</td><td>:</td><td>";
		?>
		<input type="text" name="email" value="<?php echo $line['email']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Mobile No</td><td>:</td><td>";
		?>
		<input type="text" name="mobileno" value="<?php echo $line['mobileno']; ?>"/>
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>City</td><td>:</td><td>";
		?>
					<?php
			$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
			$q="select * from tblcity";
			$result2=mysqli_query($con,$q);
			$val=$line['cityid'];
			?>
			<?php
				while($line2=mysqli_fetch_array($result2))
				{
				 if($line2['cityid']==$val)
				 {
				  $val=$line2['name'];
				  $val2=$line2['cityid'];
				 }
				}
			?>
			<select id="ddlct" name="ddlct" style="height:30px;padding:5px;" value="" >
			<option value="<?php echo $val2; ?>"><?php echo $val; ?></option>
			<?php
				$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
				$qu="select * from tblcity";
				$result3=mysqli_query($con,$qu);
				while($line2=mysqli_fetch_array($result3))
				{
			?>
				<option value="<?php echo $line2['cityid']; ?>">
				<?php echo $line2['name']; ?>
				</option>
			<?php
				}
			?>
			</select>
		<?php
		}
		?>
		<?php
		echo "</td><td style=\"width:650px\"></td></tr></table>";
		?>
		<input type="submit" name="update" value="Update" class="btnsubmit"/>
		</form>
		<?php
		if(isset($_POST['update']))
		{
		  $id=$_SESSION['patient'];
		  $fn=$_POST['name'];
		  $un=$_POST['username'];
		  $bg=$_POST['ddlbg'];
		  $em=$_POST['email'];
		  $mn=$_POST['mobileno'];
		  $cn=$_POST['ddlct'];
		  $con=mysqli_connect(@"localhost","root","","dblifecare");
		  $sql="update tblpatient set `fullname`='$fn',`username`='$un',`email`='$em',`mobileno`='$mn',`bloodgrp`='$bg',`cityid`='$cn' where `patientid`='$id'";
		  $result=mysqli_query($con,$sql) or die("Database table error");
		  header("Location:myprofile.php");
		}
		?>   
		<?php
		}
		?>
		
		<?php
		if(isset($_SESSION['hospital']))
		{
		$id=$_SESSION['hospital'];
		$con=mysqli_connect(@"localhost","root","","dblifecare");
		$sql="select * from tblhospital,tblcity where `hospitalid`='$id' and tblcity.cityid=tblhospital.cityid";
		$result=mysqli_query($con,$sql) or die("Database table error");
		echo "<table><tr><td>Name</td><td>:</td><td>";
		while($line=mysqli_fetch_assoc($result))
		 {
		?>
		<form id="form1" name="form1" method="post" action="" />
		<input type="text" name="name" id="name" value="<?php echo $line['hname']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Username</td><td>:</td><td>";
		?>
		<input type="text" name="username" value="<?php echo $line['username']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Email id</td><td>:</td><td>";
		?>
		<input type="text" name="email" value="<?php echo $line['email']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Mobile No</td><td>:</td><td>";
		?>
		<input type="text" name="mobileno" value="<?php echo $line['mobileno']; ?>"/>
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>City</td><td>:</td><td>";
		?>
					<?php
			$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
			$q="select * from tblcity";
			$result2=mysqli_query($con,$q);
			$val=$line['cityid'];
			?>
			<?php
				while($line2=mysqli_fetch_array($result2))
				{
				 if($line2['cityid']==$val)
				 {
				  $val=$line2['name'];
				  $val2=$line2['cityid'];
				 }
				}
			?>
			<select id="ddlct" name="ddlct" style="height:30px;padding:5px;" value="" >
			<option value="<?php echo $val2; ?>"><?php echo $val; ?></option>
			<?php
				$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
				$qu="select * from tblcity";
				$result3=mysqli_query($con,$qu);
				while($line2=mysqli_fetch_array($result3))
				{
			?>
				<option value="<?php echo $line2['cityid']; ?>">
				<?php echo $line2['name']; ?>
				</option>
			<?php
				}
			?>
			</select>
		<?php
		}
		?>
		<?php
		echo "</td><td style=\"width:650px\"></td></tr></table>";
		?>
		<input type="submit" name="update" value="Update" class="btnsubmit"/>
		</form>
		<?php
		if(isset($_POST['update']))
		{
		  $id=$_SESSION['hospital'];
		  $fn=$_POST['name'];
		  $un=$_POST['username'];
		  $em=$_POST['email'];
		  $mn=$_POST['mobileno'];
		  $cn=$_POST['ddlct'];
		  $con=mysqli_connect(@"localhost","root","","dblifecare");
		  $sql="update tblhospital set `hname`='$fn',`username`='$un',`email`='$em',`mobileno`='$mn',`cityid`='$cn' where `hospitalid`='$id'";
		  $result=mysqli_query($con,$sql) or die("Database table error");
		  header("Location:myprofile.php");
		}
		?>   
		<?php
		}
		?>
		
		<?php
		if(isset($_SESSION['donor']))
		{
		$id=$_SESSION['donor'];
		$con=mysqli_connect(@"localhost","root","","dblifecare");
		$sql="select * from tbldonor,tblbloodgroup,tblcity where `donorid`='$id' and tblbloodgroup.bgid=tbldonor.bloodgrp and tblcity.cityid=tbldonor.cityid";
		$result=mysqli_query($con,$sql) or die("Database table error");
		echo "<table><tr><td>Name</td><td>:</td><td>";
		while($line=mysqli_fetch_assoc($result))
		 {
		?>
		<form id="form1" name="form1" method="post" action="" />
		<input type="text" name="name" id="name" value="<?php echo $line['fullname']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Username</td><td>:</td><td>";
		?>
		<input type="text" name="username" value="<?php echo $line['username']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Blood Group</td><td>:</td><td>";
		?>
		<?php
			$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
			$q="select * from tblbloodgroup";
			$result2=mysqli_query($con,$q);
			$val=$line['bgid'];
			?>
			<?php
				while($line2=mysqli_fetch_array($result2))
				{
				 if($line2['bgid']==$val)
				 {
				  $val=$line2['groupname'];
				  $val2=$line2['bgid'];
				 }
				}
			?>
			<select id="ddlbg" name="ddlbg" style="height:30px;padding:5px;" value="" >
			<option value="<?php echo $val2; ?>"><?php echo $val; ?></option>
			<?php
				$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
				$qu="select * from tblbloodgroup";
				$result3=mysqli_query($con,$qu);
				while($line2=mysqli_fetch_array($result3))
				{
			?>
				<option value="<?php echo $line2['bgid']; ?>">
				<?php echo $line2['groupname']; ?>
				</option>
			<?php
				}
			?>
			</select>
			
				
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Email id</td><td>:</td><td>";
		?>
		<input type="text" name="email" id="email" value="<?php echo $line['email']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Mobile No</td><td>:</td><td>";
		?>
		<input type="text" name="mobileno" id="mobileno" value="<?php echo $line['mobileno']; ?>"/>
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>City</td><td>:</td><td>";
		?>
					<?php
			$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
			$q="select * from tblcity";
			$result2=mysqli_query($con,$q);
			$val=$line['cityid'];
			?>
			<?php
				while($line2=mysqli_fetch_array($result2))
				{
				 if($line2['cityid']==$val)
				 {
				  $val=$line2['name'];
				  $val2=$line2['cityid'];
				 }
				}
			?>
			<select id="ddlct" name="ddlct" style="height:30px;padding:5px;" value="" >
			<option value="<?php echo $val2; ?>"><?php echo $val; ?></option>
			<?php
				$con=mysqli_connect(@"localhost","root","","dblifecare") or die("Database Connection Error");									
				$qu="select * from tblcity";
				$result3=mysqli_query($con,$qu);
				while($line2=mysqli_fetch_array($result3))
				{
			?>
				<option value="<?php echo $line2['cityid']; ?>">
				<?php echo $line2['name']; ?>
				</option>
			<?php
				}
			?>
			</select>
		<?php
		}
		?>
		<?php
		echo "</td><td style=\"width:650px\"></td></tr></table>";
		?>
		<input type="submit" name="update" value="Update" class="btnsubmit" />
		</form>
		<?php
		if(isset($_POST['update']))
		{
		  $id=$_SESSION['donor'];
		  $fn=$_POST['name'];
		  $un=$_POST['username'];
		  $bg=$_POST['ddlbg'];
		  $em=$_POST['email'];
		  $mn=$_POST['mobileno'];
		  $cn=$_POST['ddlct'];
		  $con=mysqli_connect(@"localhost","root","","dblifecare");
		  $sql="update tbldonor set `fullname`='$fn',`username`='$un',`email`='$em',`mobileno`='$mn',`bloodgrp`='$bg',`cityid`='$cn' where `donorid`='$id'";
		  $result=mysqli_query($con,$sql) or die("Database table error");
		  header("Location:myprofile.php");
		}
		?>   
		<?php
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