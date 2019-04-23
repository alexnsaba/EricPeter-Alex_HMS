<?php 
 // LOGIN USER
session_start();

require_once'database.php';
if(!$con) {
die('Could not connect: ' . mysql_error());
}
if (isset($_POST['login_user'])) {
	# code...
	$username = $_POST['first_name'];
	$password = $_POST['password'];
    $type = $_POST['type'];
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$qz = "SELECT * FROM Student  where Username='$username' and Password='$password'" ;
    $sql1 = "SELECT * FROM  admin  where Username='$username' and Password='$password'" ;
    $sql2 = "SELECT * FROM Custodian  where Username='$username' and Password='$password'" ;
	//$qz = str_replace("\'","",$qz);
	$result = mysqli_query($con,$qz);
    $result1 = mysqli_query($con,$sql1);
    $result2 = mysqli_query($con,$sql2);

    
    if($type=="Admin"){
     //redirect to admin page
    $num= mysqli_num_rows($result1);
		if($num ==1){
			header("location:AdminHomepage.php");
		}else{
			header("location:index.php");
		}
    //header("Location:index1.php");
      
    }else if($type =="Custodian"){
        # code...
           $num= mysqli_num_rows($result2);
		if($num ==1){
			header("location: registerHostels.php");
		}else{
			header("location:index.php");
		}
        
    }elseif ($type == "Student") {
        # code...
		$num= mysqli_num_rows($result);
		if($num ==1){
			echo "$username";
		}else{
			header("location:index.php");
		}
         
        
    }
    

    
	mysqli_close($con);
}
 ?>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="index.php" method="POST">
            <div class="rs-select2 js-select-simple select--no-search">
                <label>LoginAS</label>
                    <select name="type" value="type"> 

                        <option  selected value="Admin" >Admin</option>
                        <option  value="Student">Student</option>
                        <option  value="Custodian">Custodian</option>
                    </select>
                    <div class="select-dropdown"></div>
            </div>
            <p>Username</p>
            <input type="text" name="first_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login_user" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="register.php">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>