<?php
session_start();
// connect to the database
require_once 'database.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($con, $_POST['first_name']);
  $lastname = mysqli_real_escape_string($con, $_POST['last_name']);
  $district = mysqli_real_escape_string($con, $_POST['district']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $password  = mysqli_real_escape_string($con, $_POST['password']);
  $country = mysqli_real_escape_string($con, $_POST['country']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
$image = addslashes($_FILES['image']['tmp_name']);
$name = addslashes($_FILES['image']['name']);
$image = file_get_contents($image);
$image =base64_encode($image);

  

  // Finally, register user if there are no errors in the form
 
    //$password = md5($password_1);//encrypt the password before saving in the database

  # code...

    $query = "INSERT INTO Student(FirstName, LastName, District,Gender ,Email,Phone_Number ,Password,Country,Username,name,image)VALUES('$firstname','$lastname','$district','$gender','$email','$phone','$password','$country','$username','$name','$image')";
    $result =mysqli_query($con, $query);
    
    if ($result) {
      # code...
    $_SESSION['first_name'] = $firstname;
    $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else{
      header("location:register.php");
    }
}




  ?>