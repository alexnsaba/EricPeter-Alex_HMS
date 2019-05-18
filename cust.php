<?php
session_start();

require_once'database.php';

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
  //$image =$_POST['image'];
  $a= mysqli_query($con,"select * from custodian where Username='$username' and HostelEmail='$email'");
		 $num1= mysqli_num_rows($a);
  $street =  $_POST['street']; 
          $image = addslashes($_FILES['image']['tmp_name']);
          $name = addslashes($_FILES['image']['name']);
          $image = file_get_contents($image);
	      $image =base64_encode($image);
		  if($num1>0){
			  echo "<br/><h2>Either Hostel Email or Username exists. try another email and Username</h2>";
		  }
		  else{
    $results = mysqli_query($con,"insert into Custodian(FirstName,LastName,Username,Gender,HostelEmail,PhoneNumber,Password,HostelSuburbAddress,HostelStreetAddress,HostelPlotNumber,image_name,image) 
	VALUES('$firstname','$lastname','$username','$gender','$email','$phone','$password','$address','$street','$plot','$name','$image')");
       
      if ($results) {       
       header('location: index.php');
      }else{
        echo "<h2>Failed to register</h2>";
      }
		  }
    	
  

} 

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

    <title>Hostel Manager|Kampala</title>


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
    <!--style for indicating the password strength-->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--styles for telephone-->
 <link rel="stylesheet" href="build/css/intlTelInput.css">
 <link rel="stylesheet" href="build/css/demo.css">
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

                    <form method="POST" enctype="multipart/form-data" action="cust.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">First name</label>

                                    <input class="input--style-4" type="text" name="first_name" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                       <label class="label" style="color: black;font-size: 17px">Last name</label>                                  

                                    
                                    <input class="input--style-4" type="text" name="last_name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">Username</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="username" required="required">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45" >Male
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
                                    <label class="label" style="color: black;font-size: 17px">Hostel Email</label>
                                    <input class="input--style-4" type="email" name="email" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" id="mobile-number" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">Password</label>
                                    <input class="input--style-4" type="Password" name="password" class="form-control" id="exampleInputPassword1" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">Hostel Suburb Adress</label>
                                    <input class="input--style-4" type="text" name="address" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">Hostel Street Address</label>
                                    <input class="input--style-4" type="text" name="street" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color: black;font-size: 17px">Hostel Plot Number</label>
                                    <input class="input--style-4" type="text" name="plot" required="required">
                                </div>
                            </div>
                        </div>
                       
                         <div class="row row-space">
                             <div class="input-group">


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
     <!--script for  indicating the password strength-->
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="dist/jquery.passwordstrength.js"></script>
<script>
$('#exampleInputPassword1').passwordStrength();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <!--script for telephone-->
    <script src="build/js/intlTelInput.js"></script> 
    <script>

  $( document ).ready(function() {

      $("#mobile-number").intlTelInput();

      });
  </script>

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