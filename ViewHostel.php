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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        $a= mysqli_query($con,"select * from Student where Username='$user'");
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
                  Student
                  
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
        <li class="header">STUDENT'S DASH BOARD</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-home" style="font-size:25px"></i> <span>BOOKING</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right" ></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="ViewHostel.php"><i class="fa fa-desktop"></i> View Hostel Rooms </a></li>
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
            
            <li><a href="studentComments.php"><i class="fa fa-edit"></i> Comment</a></li>
								
		   </ul>
		  
        </li>
		
		</ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="col-md-8">  
        <div class="row">
          <div class="col-md-12 col-xs-12" id="product_msg">
          </div>
        </div>
        <div class="panel panel-info" id="scroll">
          <div class="panel-heading">Please book the room you like</div>
          <div class="panel-body">
            <div id="get_product">
              <!--Here we get product jquery Ajax Request-->
            </div>
            <?php   
      require_once('database.php');


      $query = "SELECT * FROM Room WHERE roomStatus='Free' ";
          $result  = mysqli_query($con,$query);
          while($row = mysqli_fetch_array($result)){
            $hd=$row["hostelId"];
            $qr =mysqli_query($con,"SELECT * FROM hostel WHERE hostelId='$hd' ");
            $rw= mysqli_fetch_array($qr)
            ?>
                     
                      <div class="col-md-4">
                        <?php echo '<img style="float:left;width:250px; height:160px;" src="data:image;base64,'.$row['roomImage'].'" class="img-responsive img-thumbnail"/>'; ?>
                        <div class="panel-heading">
                        <table>
                          <tr><td>Hostel Name:</td><td><b><?php echo $rw["hName"]; ?></b> </td></tr>
                          <tr><td>RoomId:</td><td><b><?php echo $row["RoomId"]; ?></b> </td></tr>
                          <tr><td>Floor:</td><td><b><?php echo $row["roomFloor"]; ?></b></td></tr>
                          <tr><td>Price:</td><td> <b>  <?php echo "UGX:". number_format($row["roomPrice"]); ?></b></td></tr>

                          <tr><td><a href="book.php"><input class="btn btn-success" type="button" value="Book Now"></a></td></tr><br>
                        </table><br><br><br>
                      </div>
                      </div>
        <?php }


    ?>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
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
</html> ';



