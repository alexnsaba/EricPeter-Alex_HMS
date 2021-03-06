<?php
session_start();
			if(isset($_SESSION['login_user'])&& !empty($_SESSION['login_user'])){				
			}else{
			 header("location:index.php");	
			}
			
 ?>	
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Hostel Manager | Kampala</title>
    <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
  
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="css/style.css">
  <style>
  @media screen and (min-width:720px){
	td.h1{
	margin-left: 30%;	
	}
}
 @media screen and (min-width:720px){
	.box{
	
	}
}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Hostel Manager</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hostel Manager</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">	
              
              <span class="hidden-xs">
			  <?php
			  require_once'database.php';
			  $user=$_SESSION['login_user'];
			  $a= mysqli_query($con,"select * from Custodian where Username='$user'");
			  $rw = mysqli_fetch_array($a);
			  echo $rw['LastName']." ".$rw['FirstName'];
			  echo'<img class="user-image" src="data:image;base64,'.$rw['image'].'" >';
			  
			  ?>
			  </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
			   <?php	  
			  
			  echo'<img class="img-circle" src="data:image;base64,'.$rw['image'].'" >';
			  
			  ?>
                

                <p>
                  custodian
                  
                </p>
              </li>                          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="logout.php" class="btn btn-primary"> <i class="fa fa-power-off" style="font-size:30px"></i> Log Out</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-primary"><i class="fa fa-window-close" style="font-size:30px"></i> Cancel</a>
                </div>
              </li>
            </ul>
          </li>          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">         
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">CUSTODIAN'S DASH BOARD</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-home" style="font-size:25px"></i> <span>HOSTEL REGISTRATION</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right" ></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="registerHostels.php"><i class="fa fa-hotel"></i>New Hostel details </a></li>
            <li><a href="editHostelDetails.php"><i class="fa fa-edit"></i> Edit Hostel Details </a></li>      
      <li><a href="viewHostelProfile.php"><i class="fa fa-newspaper-o"></i> View Hostel Profile </a></li>
          </ul>
      
        </li>
    
      <li class="active treeview">
          <a href="#">
            <i class="fa fa-desktop" style="font-size:20px"></i> <span>UPDATES</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="updateRooms.php"><i class="fa fa-circle-o"></i> Update Room details</a></li>
            <li><a href="roomEdit.php"><i class="fa fa-trash-o"></i> Edit Room Details</a></li>
      <li><a href="viewRoomUpdates.php"><i class="fa fa-newspaper-o"></i>View your pdates</a></li>          
       </ul>
      
        </li>

     <li class="active treeview">
          <a href="#">
            <i class="fa fa-commenting" style="font-size:20px"></i> <span>COMMENTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="comments.php"><i class="fa fa-edit"></i> Comments</a></li>
                      
       </ul>
      
        </li>   
    
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
	<!--Put your page content here-->	
     <h2>Fill all the fields to update  Room details</h2>	
    						<div class="panel-body">
			<form method="post" action="updateRooms.php" enctype="multipart/form-data" name="registration" class="form-horizontal">
											
										

<div class="form-group">
<label class="col-sm-2 control-label"> Room Number  </label>
<div class="col-sm-8">
<input type="text" name="rNumber" id="rNumber"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Choose Room Category </label>
<div class="col-sm-8">
<select name="rCategory" value="rCategory" class="form-control" required="required">
<option >Single</option>
<option selected>Double</option>
<option >Triple</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room Floor  </label>
<div class="col-sm-8">
<input type="text" name="rFloor" id="rFloor"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room Price  </label>
<div class="col-sm-8">
<input type="number" name="rPrice" id="rPrice"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> hostelId </label>
<div class="col-sm-8">
<input type="number" name="hId" id="hId"  class="form-control"  required="required" placeholder="Enter your hostel ID">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Upload Room Image  </label>
<div class="col-sm-8">
<input type="file" name="image"   class="form-control" required="required">
</div>
</div>
<div class="col-sm-6 col-sm-offset-4">
<input type="reset" value="Cancel" class="btn btn-primary">

<input type="submit" name="Update" Value="Update" class="btn btn-primary">
</div>
</form><br/>
<div>
<?php
if(isset($_POST['Update'])){
require_once'database.php';
//optaining form parameters
$rNumber =$_POST['rNumber'];
$rCategory =$_POST['rCategory'];
$rFloor =$_POST['rFloor'];
$rPrice =$_POST['rPrice'];
$hId =$_POST['hId'];

if (getimagesize($_FILES['image']['tmp_name']) == FALSE) {
       # code...
      echo "Please select an image.";
     }else{
          $image = addslashes($_FILES['image']['tmp_name']);
          $name = addslashes($_FILES['image']['name']);
          $image = file_get_contents($image);
	      $image =base64_encode($image);
	 }
//$rPicture =$_POST['rPicture'];
$roomStatus="Free";
// checking if the hostel is registered
$sel= mysqli_query($con,"select * from hostel where hostelId='$hId' ");
$row = mysqli_fetch_array($sel);
$num= mysqli_num_rows($sel);
if($num == 1){
	if($row['status']=="approved"){         
       //inserting values into table room
	$insert= mysqli_query($con,"insert into Room(roomNumber,roomCategory,roomFloor,roomPrice,roomStatus,hostelId,name,roomImage)
	values('$rNumber','$rCategory','$rFloor','$rPrice','$roomStatus','$hId','$name','$image')");
	if($insert){
		echo"<h3 style='color:blue'> Data saved successfully. Room ".$rNumber." is Now ready to be booked by students</h3>";
	}
	else{
		echo"<h3 style='color:red'> Sorry, An error has occured while saving the data. please again</h3>";
	}
      
		
	
	
	}
	else{
		echo"<h3 style='color:red'> Hostel  ".$row['hName']." is not Approved by the Admin. Contact the Admin for Approval </h3>";
	}
}
else{
	echo"<h3 style='color:red'> Hostel Id ".$hId." is not found. Please first register the hostel and try again</h3>";
} 

}
?>
</div>

</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
        
    <!-- Default to the left -->
    <strong><center>Copyright &copy; 2019 Hostel Manager.</strong> All rights reserved.</center>
	</footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
