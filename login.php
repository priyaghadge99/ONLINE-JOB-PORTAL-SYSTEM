<?php

session_start();
?>
<!DOCTYPE html>
<html>
<title>confrimation</title>
<head>
<link rel="stylesheet" href="style.css">
<style>



	
input[type=text], select, textarea {
 	 width: 50%;
	padding: 12px;
 	 border: 1px solid #ccc;
 	 border-radius: 4px;
  	resize: vertical;
}

label {
  	padding: 12px 12px 12px 0;
  	display: inline-block;
}

input[type=submit] {
	
  	background-color: #006699;
  	color: white;
  	padding: 12px 20px;
  	border: none;
  	border-radius: 4px;
  	cursor: pointer;
  	margin-left: 25%;
	width:20%;
}

	

.container {
	margin-left: auto;
  	margin-right: auto;
	width: 60%;
 	 border-radius: 5px;
 	 background-color: #f2f2f2;
 	 padding: 20px;
	font-size: 22px;
}

.col-25 {
 	 float: left;
 	 width: 20%;
 	 margin-top: 6px;
}

.col-75 {
 	 float: left;
 	 width: 75%;
 	 margin-top: 6px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

.button {
	background-color: #006699;
	color: white;
	border: none;
 	border-radius: 4px;
	width: 75px;
	padding: 12px 20px;
  	text-align: center;
  	text-decoration: none;
 	display: inline-block;
 	font-size: 16px;
 	float: right;
	margin-right:20px;
}	
	
</style>
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
<a href="adminlog.php" class="button">Admin Login</a>
<h2> Login </h2>
<br>

<div class="container">
  <form action="" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="e_mail"> E-mail : </label>
      </div>
      <div class="col-75">
        <input type="email" id="e_mail" name="e_mail" placeholder="Enter E-mail" required >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">Password :</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Enter Password" required >
      </div>
    </div>
    
    <div class="row">
	<div class="col-75">
		      
      <input type="submit" name="login" value="Login">
		</div>      
    </div>
  </form>
</div>

<?php 
     
      if(isset($_POST['login']))
      {
      	$user=$_POST['e_mail'];
      	$password=$_POST['password'];
      	$conn=mysqli_connect('localhost','root','1234','digijobs');
         $select="SELECT * FROM user WHERE e_mail='$user' AND password='$password'";
         $result=mysqli_query($conn,$select);
         if(mysqli_num_rows($result)>0)
         {
         	$_SESSION["user"]=$user;
         	header('location:job.php');
         }
         else
         {
               echo "Invalid E-mail Id or Password!";  
         }
      }

?>

<footer> &copy;  Copyright 2019 | All Rights Reserved | Digijobs.com
</footer>
</body>
</html>
