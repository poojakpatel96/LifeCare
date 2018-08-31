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
<body>
<div class="wrapper">
  <div class="header">
    <div class="row">
      <div class="columns large-12  header-inner" style="height:100px"><br><image src="images/logo4.jpeg" style="margin:10px 15px 30px 0px"><font size="75px">LifeCare</font></div>
      <div class="columns large-12">
        <nav>
          <section>
            <ul class="sf-menu large-12">
              <li class="active"><a href="adminhome.php">Home</a></li>
              <li><a href="create.php">Create</a>
			  <ul class="dropdown">
                  <li><a href="cbloodgroup.php">Blood Group</a></li>
                  <li><a href="cbloodcamp.php">Blood Camp</a></li>
				  <li><a href="crequest.php">Raise a Request</a></li>
				  <li><a href="cdonation.php">Donation</a></li>
				  <li><a href="cpatient.php">Patient</a></li>
				  <li><a href="cdonor.php">Donor</a></li>
				  <li><a href="chospital.php">Hospital</a></li>
				  <li><a href="cadmin.php">Administrator</a></li>
				  <li><a href="ccity.php">City</a></li>
                </ul>
			  </li>
              <li><a href="manage.php">Manage</a>
			   <ul class="dropdown">
                  <li><a href="mbloodgroup.php">Blood Group</a></li>
                  <li><a href="mbloodcamp.php">Blood Camp</a></li>
				  <li><a href="mbloodstock.php">Blood Stock</a></li>
				  <li><a href="mbloodrequest.php">Blood Requests</a></li>
			  </ul>
			  </li>
              <li><a href="report.php">View</a>
			   <ul class="dropdown">
                  <li><a href="rbloodgroup.php">Blood Group</a></li>
                  <li><a href="rbloodcamp.php">Blood Camp</a></li>
				  <li><a href="rbloodstock.php">Blood Stock</a></li>
                  <li><a href="rpatient.php">Patient</a></li>
				  <li><a href="rdonor.php">Donor</a></li>
				  <li><a href="rhospital.php">Hospital</a></li>
               </ul>
			  </li>
			  <li class="active"><a href="camps.php">Camps</a></li>
               <li><a href="#">MyAccount</a>
			   <ul class="dropdown">
                   <li class="active"><a href="myprofile.php">MyProfile</a></li>
				   <li class="active"><a href="cpassword.php">Change Password</a></li>
               </ul>
			  </li>
			  <li><form method="POST" action="" name="formhome"><input type="submit" value="LOGOUT" name="btnlogout" id="btnlogout"/></form>
			  <?php
					session_start();
					if(isset($_POST['btnlogout']))
					{
						session_destroy();
						header("Location:adminlogin.php");
					}
				?>
			  </li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
	<br>
	<?php
	if(isset($_SESSION['admin']))
	{
		
	}
	else
	{
		header("Location:adminlogin.php");
	}
	?>
	<div style="margin-left:50px; min-height:500px;">
		<?php
		$id=$_REQUEST['id'];
		$con=mysqli_connect(@"localhost","root","","dblifecare");
		$sql="select * from tblbloodcamp,tblcity where `cid`='$id' and tblbloodcamp.cityid=tblcity.cityid";
		$result=mysqli_query($con,$sql) or die("Database table error");
		echo "<h1> Update Record </h1>";
		echo "<table><tr><td>CampName</td><td>:</td><td>";
		while($line=mysqli_fetch_assoc($result))
		 {
		?>
		<form id="form1" name="form1" method="post" action="" />
		<input type="text" name="cname" value="<?php echo $line['nameofcamp']; ?>" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Address</td><td>:</td><td>";
		?>
		<input type="text" name="address" value="<?php echo $line['address']; ?>" />
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
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Date</td><td>:</td><td>";
		?>
		<input type="date" name="date" value="<?php echo $line['date']; ?>"style="height:35px;padding:5px;" />
		<?php
		echo "</td><td style=\"width:650px\"></td></tr>";
		echo "<tr><td>Time</td><td>:</td><td>";
		?>
		<input type="time" name="time" value="<?php echo $line['time']; ?>" style="height:35px;padding:5px;"/>
		<?php
		echo "</td><td style=\"width:650px\"></td></tr></table>";
		}
		?>
		<input type="submit" name="submit" value="Submit" class="btnsubmit"/>
		<input type="submit" name="back" value="Back" class="btnsubmit"/>
		</form>
		<?php
		if(isset($_POST['back']))
		{
		  header("Location:mbloodgroup.php");
		}
		if(isset($_POST['submit']))
		{
		$id=$_REQUEST['id'];
		$cn=$_POST['cname'];
		$add=$_POST['address'];
		$da=$_POST['date'];
		$ti=$_POST['time'];
		$cit=$_POST['ddlct'];
		$flag=0;
		$con=mysqli_connect(@"localhost","root","","dblifecare");
		$sql="update tblbloodcamp set `nameofcamp`='$cn',`address`='$add',`date`='$da',`time`='$ti',`cityid`='$cit' where `cid`='$id'";
		$result=mysqli_query($con,$sql) or die("Database table error");
		header("Location:mbloodcamp.php");
		}
		?>   
    </div>    
    <footer class="footer">
      <div class="row">
        <div class="columns large-12 footer-inner">
          <div class="row">
            <div class="columns large-3 box">
              <div class="">
                <h2 class="footer-title">Links</h2>
                <ul>
                  <li><a href="adminhome.php">Home</a></li>
                  <li><a href="create.php">Create</a></li>
                  <li><a href="manage.php">Manage</a></li>
                  <li><a href="report.php">Report</a></li>
                  <li><a href="settings.php">Settings</a></li>
                </ul>
              </div>
            </div>
            <div class="columns large-3 box">
              <div>
                <h2 class="footer-title"></h2>
                <ul>
                  <li><a href="cbloodgroup.php">Create Blood Group</a></li>
                  <li><a href="cbloodcamp.php">Create Blood Camp</a></li>
                  <li><a href="crequest.php">Raise a Request</a></li>
                  <li><a href="cpatient.php">Create Patient</a></li>
                  <li><a href="cdonor.php">Create Donor</a></li>
                  <li><a href="chospital.php">Create Hospital</a></li>
                </ul>
              </div>
            </div>
			<div class="columns large-3 box">
              <div>
                <h2 class="footer-title"></h2>
                <ul>
                  <li><a href="mbloodgroup.php">Manage Blood Group</a></li>
                  <li><a href="mbloodcamp.php">Manage Blood Camp</a></li>
                  <li><a href="mbloodstock.php">Manage Blood Stock</a></li>
                  <li><a href="mbloodrequest.php">Manage Blood Requests</a></li>
				  <li><a href="myprofile.php">MyProfile</a></li>
				  <li><a href="home.php">Logout</a></li>
                </ul>
              </div>
            </div>
            <div class="columns large-3 box">
              <div>
                <h2 class="footer-title"></h2>
				<ul>
				  <li><a href="rbloodgroup.php">Report of Blood Group</a></li>
                  <li><a href="rbloodcamp.php">Report of Blood Camp</a></li>
                  <li><a href="rbloodstock.php">Report of Blood Stock</a></li>
                  <li><a href="rpatient.php">Report of Patient</a></li>
                  <li><a href="rdonor.php">Report of Donor</a></li>
                  <li><a href="rhospital.php">Report of Hospital</a></li>
				</ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
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