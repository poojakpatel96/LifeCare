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
 color:black ;
}
</style>
</head>
<body>
<div class="wrapper">
  <div class="header">
    <div class="row">
      <div class="columns large-12  header-inner" style="height:100px"><br><image src="images/logo4.jpeg" style="margin:10px 15px 30px 0px"><font size="75px">LifeCare</font></div>
      
    </div>
	<hr>
   <div style="margin-left:45px; min-height: 600px">
		<br>
			<h1>Admin login:</h1>
			<form name="form1" method="POST" action="">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="txtna" id="txtna"/></td>
					<td style="width:650px;"></td>
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
					<td><input type="submit" name="btnsubmit" id="btnsubmit" value="Login"  /></td>
					<td style="width:650px"></td>
				</tr>
			</table>
			</form>
			<?php
			if(isset($_POST['btnsubmit']))
			{
				$un=$_POST['txtna'];
				$ps=$_POST['txtpass'];
				$con=mysqli_connect(@"localhost","root","","dblifecare");
				$sql="select * from tbladmin where username='$un' and password='$ps'";
				$result=mysqli_query($con,$sql);
				$line = mysqli_fetch_array($result);
				$aid = $line["adminid"];
				$count = mysqli_num_rows($result);
				if($count==1)
				{
					session_start();
					$_SESSION['admin']=$aid;
					header("Location:adminhome.php",true);
				}
				else
				{
					echo "<div style = \"color:red\">Invalid Username/Password</div>";
				}
				mysqli_close($con);
				ob_end_flush();				
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