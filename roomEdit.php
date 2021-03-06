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
			  mysqli_close($con);
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
	
	<h3>Choose a field to Edit and click the save button</h3>	
    						<div class="panel-body">
			<form method="post" action="roomEdit.php" name="registration" class="form-horizontal">

<div class="form-group">
<label class="col-sm-2 control-label">Fields  </label>
<div class="col-sm-8">
<select name="dep" value="dep" class="form-control" required="required">
<option>roomNumber</option>
<option>roomCategory</option>
<option>roomFloor</option>
<option>roomPrice</option>
<option>hostelId</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label"> Room id </label>
<div class="col-sm-8">
<input type="text" name="rId" id="rId"  class="form-control"  required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label"> Correct Value </label>
<div class="col-sm-8">
<input type="text" name="correct" id="correct"  class="form-control" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>


<div class="col-sm-6 col-sm-offset-4">
<input type="reset" value="Cancel" class="btn btn-primary">

<input type="submit" name="save" Value="Save" class="btn btn-primary">
</div>
</form><br/>
<div>
<?php
if(isset($_POST['save'])){
	        require_once'database.php';
              
            if($_POST['dep']=="roomNumber"){             
		   
                $field="roomNumber";                 
            }
			
             else if($_POST['dep']=="roomCategory"){
                $field="roomCategory";
            }
             else if($_POST['dep']=="roomFloor"){
                $field="roomFloor";
            }
             else if($_POST['dep']=="roomPrice"){
                $field="roomPrice";
                }
            else if($_POST['dep']=="hostelId"){
                $field="hostelId";
            }			 			 			 
              $value=$_POST['correct']; 
              $rId=$_POST['rId']; 	   
               
                
           $d=mysqli_query($con,"update Room set $field='$value' where RoomId=$rId");
              if($d){
               echo"<br/><p style='color:blue;font-size:20pt'>the Error has been corrected .The new ".$field." is ".$value."</p>";
              
		   }
		   else {			  
		   echo"<br/><p style='color:blue;font-size:20pt'>Failed to edit the mistake.</p>";
		   }		   
       }   
       
?>
   </div>
    <!-- Main content -->
    <section class="content">
	<!--Put your page content here-->	
     

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
