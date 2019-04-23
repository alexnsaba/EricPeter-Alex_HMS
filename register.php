
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Hostel Management</title>

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
		  location.replace("cust.php")
		}
    </script>
</head>

<body>

    
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
	
        <div class="wrapper wrapper--w680">
		
            <div class="card card-4">			
                <div class="card-body">	               			   


                    <h2 class="title">Student Registration</h2>
                    <form method="POST" enctype="multipart/form-data" action="register.php" >
                    	
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">

								

                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">District</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="district" required="required">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
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
                                    <input class="input--style-4" type="Password" name="password" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Country</label>
                                    <input class="input--style-4" type="text" name="country" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" required="required">
                                </div>
                            </div>
							 <div class="col-2">
                                <div class="input-group">
                                     Select image to upload:
                                    <input type="file" accept="image/*" name="image" id="fileToUpload">
                                    
                                </div>
                            </div>
                        </div>
						
                        <div class="p-t-15">

                            <button class="btn btn--radius-2 btn--blue" type="submit" name="reg_user" id="submit">Submit</button>
                            
  								Already a member? <a href="index.php">Sign in</a>
                        </div>
                    </form>
                </div>
				<div>
				<?php		


// REGISTER USER
if (isset($_POST['reg_user'])) {
	// connect to the database
require_once 'database.php';
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
      //header('location: index.php');
	  $URL="index.php";
			 echo "<script>window.location.href = '{$URL}';</script>";
			 echo'<META HTTP-EQUIV = "refresh" content="0;URL=' .$URL . ' ">';
			 exit();
    }else{
      echo "<h2>Failed to register. please Try again.</h2>";
    }
}




  ?>
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