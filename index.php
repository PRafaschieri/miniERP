<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>

<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" language="javascript" src="style/style.js"></script>

</head>
<body>

<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Accedi</button>
            </form>
            
        </div>
</div>


<?php
$conn= mysqli_connect('localhost',"root","Pasqua1506","miniERP");
echo("sono nel PHP");


IF(ISSET($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$strSQL= "select * from user where email='".$email."'& password='".$password."'";
	$query= mysqli_query($conn,$strSQL);
    $cek = mysqli_num_rows($query);
   
    $data = mysqli_fetch_assoc($query);
	echo($data);
	IF($cek > 0) 
	{
		
		session_start();
		$_SESSION['email'] = $data['email'];
		$_SESSION['name'] = $data['firstName'];
		echo("session");
		echo "<script language=\"javascript\">document.location.href='userpage.php';</script>";
	}else{
	    echo ($email.$password);
		echo "<script language=\"javascript\">alert(\"Email o password non valida\");document.location.href='index.php';</script>";
	}
}
?> 

</body>
</html>