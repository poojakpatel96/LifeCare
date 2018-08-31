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
#btnsubmit:hover
{
 background-color:lightgrey;
}
table,td
{
 font-size:20px;
}
#btnsubmit
{
 padding:4px 13px;
 font-size:14px;
 text-align: center;
 border-radius:5px;
 color:black;
 font-weight:500;
}
</style>
</head>
<body>
<div class="wrapper">
  <div class="header">
    <div class="row">
      <div class="columns large-12  header-inner" style="height:100px"><br><image src="images/logo4.jpeg" style="margin:10px 15px 30px 0px"><font size="75px">LifeCare</font></div>
      <div class="columns large-12">
       
      </div>
    </div>
	<br>
	<div style="margin-left:45px; min-height: 500px">
	<h1>Login:</h1>
			<form name="form1" method="POST" action="">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="txtna" id="txtna"/></td>
					<td style="width:650px"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="txtpass" id="txtpass" /></td>
					<td style="width:650px"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="btnsubmit" id="btnsubmit" value="Login" /></td>
					<td style="width:650px"></td>
				</tr>
			</table>
			</form>
			<?php
			if(isset($_POST['btnsubmit']))
			{
				$flag=0;
				$un=$_POST['txtna'];
				$ps=$_POST['txtpass'];
				$con=mysqli_connect(@"localhost","root","","dblifecare");
				$sql="select * from tblpatient where username='$un' and password='$ps'";
				$result=mysqli_query($con,$sql);
				$line = mysqli_fetch_array($result);
				$count = mysqli_num_rows($result);
				$pid = $line["patientid"];
				if($count==1)
				{
					session_start();
					$_SESSION['patient']=$pid;
					$flag=1;
					header("Location:home.php",true);
				}
				if($flag==0)
				{
					$sql2="select * from tbldonor where username='$un' and password='$ps'";
					$result2=mysqli_query($con,$sql2);
					$line2 = mysqli_fetch_array($result2);
					$count2 = mysqli_num_rows($result2);
					$did=$line2["donorid"];
					if($count2==1)
					{
						session_start();
						$_SESSION['donor']=$did;
						$flag=1;
						header("Location:home.php",true);
					}
				}
				if($flag==0)
				{
					$sql3="select * from tblhospital where username='$un' and password='$ps'";
					$result3=mysqli_query($con,$sql3);
					$line3 = mysqli_fetch_array($result3);
					$count3 = mysqli_num_rows($result3);
					$hid = $line3['hospitalid'];
					if($count3==1)
					{	
						session_start();
						$_SESSION['hospital']=$hid;
						$flag=1;
						header("Location:home.php",true);
					}
				}
				if($flag==0)
				{
				 echo "Invalid username/password";
				}
				mysqli_close($con);
				ob_end_flush();				
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
                  <li><a href="home.php">Home</a></li>
                  <li><a href="login.php">Login</a></li>
                </ul>
              </div>
            </div>
            <div class="columns large-3 box">
              <div>
                <h2 class="footer-title"></h2>
                <ul>
				  <li><a href="ablood.php">About Blood</a></li>
                  <li><a href="ablooddon.php">About Blood Donation</a></li>
				  <li></li>
				  <li></li>
                </ul>
              </div>
            </div>
			<div class="columns large-3 box">
              <div>
                <h2 class="footer-title"></h2>
                <ul>
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
					<li><a href="raiserequest.php">Raise a request</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
					
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