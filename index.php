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
<?php $conn= mysqli_connect('localhost',"root","Pasqua1506","DBClienti");
$strSQL= "select * from user;";
$query= mysqli_query($conn,$strSQL);
while($row= mysqli_fetch_assoc($query)){
    echo($row['email']);
}?>
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

</body>
</html>
<?php
//include "db_con.php";

/*IF(ISSET($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    $cek = mysql_num_rows(mysql_query("SELECT * FROM user WHERE email='$email' AND password='$password'"));
	$data = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE email='$email' AND password='$password'"));
	IF($cek > 0)
	{
		
		session_start();
		$_SESSION['email'] = $data['email'];
		$_SESSION['name'] = $data['firstName'];
		echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='userpage.php';</script>";
	}else{
		echo "<script language=\"javascript\">alert(\"Email o password non valida\");document.location.href='index.php';</script>";
	}
}*/
?>