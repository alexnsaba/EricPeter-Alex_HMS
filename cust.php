<?php
session_start();
<<<<<<< HEAD
require_once'database.php';
=======

require_once("database.php");
if(!$con) {
die('Could not connect: ' . mysql_error());
}
>>>>>>> 0aa37e175676fee83d40b37abac3fbaeaf2d75b6

// REGISTER USER
if (isset($_POST['cust'])) {
  // receive all input values from the form
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $username = $_POST['username'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password  = $_POST['password'];
  $address = $_POST['address'];
  $plot = $_POST['plot'];
  $image =$_POST['image'];
<<<<<<< HEAD
  $street =  $_POST['street']; 
    $results = mysqli_query($con,"insert into Custodian(FirstName,LastName,Username,Gender,HostelEmail,PhoneNumber,Password,HostelSuburbAddress,HostelStreetAddress,HostelPlotNumber,image) 
	VALUES('$firstname','$lastname','$username','$gender','$email','$phone','$password','$address','$street','$plot','$image')");
       
      if ($results) {       
       header('location: index.php');
      }else{
        echo "<h2>Failed to register</h2>";
      }
      
    	
  

}
=======
  $street =  $_POST['street'];


 
  // Finally, register user if there are no errors in the form
 
    //$password = md5($password_1);//encrypt the password before saving in the database

  # code...
    //$sql = ;
    $results =mysqli_query($con,"INSERT INTO Custodian(FirstName ,LastName,Username,Gender,HostelEmail,PhoneNumber,Password,HostelSuburbAdress,HostelStreetAddress,HostelPlotNumber,image) VALUES('$firstname','$lastname','$username','$gender','$email','$phone','$password','$address','$street','$plot','$image')");
    
    
      if ($results) {
        # code...
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
       header('location: index.php');
      }else{
        echo "<p>Error</p>";
      }
  }
>>>>>>> 0aa37e175676fee83d40b37abac3fbaeaf2d75b6
?>
<!DOCTYPE htm>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
<<<<<<< HEAD
    <title>Hostel Manager|Kampala</title>
=======
    <title>Hostel Management</title>
>>>>>>> 0aa37e175676fee83d40b37abac3fbaeaf2d75b6

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
   <script type="text/javascript">
        function myFunction() {
          location.replace("register.php")
        }
    </script>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Custodian Registration</h2>
<<<<<<< HEAD
                    <form method="POST" action="cust.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First name</label>
=======
                    <form method="POST" name="form" action="cust.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
>>>>>>> 0aa37e175676fee83d40b37abac3fbaeaf2d75b6
                                    <input class="input--style-4" type="text" name="first_name" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
<<<<<<< HEAD
                                    <label class="label">Last name</label>
=======
                                    <label class="label">last name</label>
>>>>>>> 0aa37e175676fee83d40b37abac3fbaeaf2d75b6
                                    <input class="input--style-4" type="text" name="last_name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="username" required="required">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male" required="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female" required="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Hostel Email</label>
                                    <input class="input--style-4" type="email" name="email" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="Password" name="password">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Hostel Suburb Adress</label>
                                    <input class="input--style-4" type="text" name="address" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Hostel Street Address</label>
                                    <input class="input--style-4" type="text" name="street" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Hostel Plot Number</label>
                                    <input class="input--style-4" type="text" name="plot" required="required">
                                </div>
                            </div>
                        </div>
                       
                         <div class="row row-space">
                             <div class="input-group">
<<<<<<< HEAD
                            
                           
=======
                            <label class="label">SignUp Type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject" onChange="go()">
                                    <option onclick="myFunction()" >Student</option>
                                    <option disabled="disabled" selected="selected"  >Custodian</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
>>>>>>> 0aa37e175676fee83d40b37abac3fbaeaf2d75b6

                        </div>
                            <div class="col-2">
                                <div class="input-group">
                                     Select image to upload:
                                    <input type="file" accept="image/*" name="image" id="fileToUpload">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">

                            <button class="btn btn--radius-2 btn--blue" type="submit" name="cust" id="cust">Submit</button>
                            <a href="index.php">Have an Account?Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->