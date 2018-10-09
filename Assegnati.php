<?php
session_start();
IF(ISSET($_SESSION['name'])){
    
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Assegnati</title>
<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

</head>
<style>
         
         td {
            border-bottom: 1px solid #ddd;
        }
</style>"
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="userpage.php">Home </a>
				<a class="navbar-brand" href="contattailwebmaster.html">Contatti</a>
				<a class="navbar-brand pull-right" href="logout.php?destroy"> <span class="glyphicon glyphicon-off"></span> Logout </a>
				<a class="navbar-brand pull-right"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['name'];?> </a>
            </div>
	</div>

</div>

<div class="container">
     <h1>Report Assegnati Vendite</h1>
	     <?php
            
            $conn= mysqli_connect('localhost',"root","Pasqua1506","miniERP");
            $strSQL="SELECT * FROM `report` JOIN `database` ON `report`.`idDatabase`=`database`.`idDatabase` WHERE idReport=1";

            $query= mysqli_query($conn,$strSQL);
            $numeroRecord=mysqli_num_rows($query);
            
            
           	$row=mysqli_fetch_assoc($query);
           	$url=$row['ipUrl'];
           	$nomeDB="'".$row['nome']."'";
           	$user="'".$row['username']."'";
           	$psw="'".$row['password']."'";
           	$SQLdb=$row['query'];  
           
    		          
           	mysqli_close($conn);
                          
    	    //Apro la connessione al DB del Report				  
           	//$conn= mysqli_connect($url,	$user, $psw,$nomeDB);
           	$conn= mysqli_connect(dieffevtiger-read-replica.crcru1sebvf3.eu-central-1.rds.amazonaws.com, odbcdieffeuser, odbc, diffe_vtiger_2017);
           	$query= mysqli_query($conn,$SQLdb);
           	$numeroRecord=mysqli_num_rows($query);
         
                
         ?>
     <table width="100%" border="1px">
     	<tr>
		
            <td>
    		<p>Anno</p>
    		</td>

            <td>
    		<p>Mese</p>
    		</td>
    
    		<td>
    		<p>DieffeBot</p>
    		</td>
    
    		<td>
    		<p>Manzini</p>
    		</td>
            
    		<td>
    		<p>Sernagiotto</p>
    		</td>
    
    		<td>
    		<p>Badomer</p>
    		</td>
    		
    		<td>
    		<p>Vinti</p>
    		</td>

		</tr>

		<?php

    		while($row= mysqli_fetch_assoc($query)){

		?>
                  <tr>
                      <td><p><?php echo($row['Anno']);?></p></td> 
                      <td><p><?php echo($row['Mese']);?></p></td>
                      <td><p><?php echo($row['DieffeBot']);?></p></td>
					  <td><p><?php echo($row['Manzini']);?></p></td>
                      <td><p><?php echo($row['Sernagiotto']);?></p></td>
					  <td><p><?php echo($row['Badomer']);?></p></td>
					  <td><p><?php echo($row['ChiusoVinto']);?></p></td>
                      
                  </tr>
         <?php 
    		}
            mysqli_close($conn);    
         ?>	

	</table>
</div>
</body>
</html>

<?php 
}else{
	echo "<script language=\"javascript\">alert(\"Per vedere questa pagina devi effettuare il login\");document.location.href='index.php';</script>";	
}
?>