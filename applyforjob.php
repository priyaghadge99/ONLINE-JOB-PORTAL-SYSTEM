<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

<title>Confirmation</title>
</head>

<header>
<h1>
DigiJobs

</h1>
</header>




<nav>
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="job.php">JOBS</a></li>
<li><a href="company11.html">COMPANIES</a></li>
<li><a href="contact.html">CONTACT US</a></li>
<li><a href="about.html">ABOUT US</a></li>




</ul>
</nav>



<body>
<?php	if (isset($_SESSION["user"]))
{
	 $jid=$_REQUEST['jid'];#####jid
	$e_mail=$_SESSION["user"];
	
	$con=mysqli_connect("localhost","root","1234","digijobs");     
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	$result=mysqli_query($con,"SELECT u_id from user where e_mail='$e_mail'");
	$row=mysqli_fetch_assoc($result);
	$uid=$row['u_id'];
	
	$done=mysqli_query($con,"INSERT INTO apply (u_id,j_id) VALUES ('$uid','$jid')");
	if($done){
	?>
    <script>
            alert("You have successfully applied for Job!");
            location.href="job.php";
           	</script>


<?php	}
	
	
}

mysqli_close($con);

?>


<footer> &copy;  Copyright 2019 | All Rights Reserved | Digijobs.com
</footer>
</body>
</html>
