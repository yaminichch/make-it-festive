<?php 
include_once("../../conn.php");
//include("database.php");?>
<!DOCTYPE html>
<head>
<title>Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<?php
if(isset($_REQUEST['Login']))
{

    $username=$_REQUEST['username'];

    $password=$_REQUEST['password'];

    $q1="select * from admin where username ='$username' and password ='$password'";
    $q=$con->query($q1) or die(mysql_error());
    
    $q1=$q->fetch_array();
    if($q->num_rows>0)
    {
        $_SESSION['username']=$q1['username'];


        $_SESSION['password']=$q1['password'];

        header('location:home.php');
    }
    else
    {
        echo "<script>alert('Wrong Username or password')</script>";

    }


}
?>
<body class="signup-body" style="height:700px">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form method="post">
					<input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
					<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<input type="submit" name="Login" class="register" value="Login">
				</form>
				<div class="signin-text">
					
					<div class="clearfix"> </div>
				</div>
				
			</div>
			
			<!-- footer -->
			
			<!-- //footer -->
			
		</div>
	
</body>
</html>
