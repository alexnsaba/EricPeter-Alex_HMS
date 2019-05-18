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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
    /*  Updated stylesheet for YouTube Comment System video */

/* imports */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);

/* resets */
* {
  margin:0px;
  padding:0px;
  box-sizing:border-box;
  font-family:'Calibri', sans-serif;
  outline:none;
}

/* Animations */
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }
  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }
  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}

/* body, html */
html, body {
  background-color:#edf1f5;
}

/* content */
.page-container {
  width:80%;
  height:auto;
  min-height:100vh;
  margin:0 auto;
  padding:50px 10px 0px 10px;
}
.comment {
  width:45%;
  height:auto;
  padding:7px 23px;
  margin:0px auto;
  margin-bottom:10px;
  text-align:justify;
}
.child {
  margin-top:10px;
  margin-left:30px;
  padding-left:5px;
}
.child-comments {
  border-left:1px solid rgba(1,1,1,0.2);
}

form.main {
  width:45%;
  margin:0 auto;
  margin-top:5px;
}
  .form-input {
    border:1px solid rgba(1,1,1,0.3);
    width:50%;
    padding:4px 7px;
    font-size:13px;
    line-height:24px;
    resize:none;
  }
  .form-text {
    border:1px solid rgba(1,1,1,0.3);
    width:100%;
    padding:4px 7px;
    margin-top:5px;
    font-size:13px;
    line-height:24px;
    resize:none;
    transition:ease 0.2s all;
    outline:none !important;
  }
    .form-text-error {
      border-color:rgba(237,28,36,0.7);
      animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
      transform: translate3d(0, 0, 0);
      backface-visibility: hidden;
      perspective: 1000px;
    }
    .form-text:focus {
      border-color:rgba(0,114,188,0.7);
    }
  .form-submit {
    text-transform: uppercase;
    border:1px solid rgba(1,1,1,0.3);
    cursor:pointer;
    padding:5px 13px;
    margin-top:5px;
  }

/* fonts */
.user, .time {
  display:inline-block;
}
.user {
  font-size:13px;
  color:#0072bc;
  text-decoration: none;
  word-break: break-all;
  line-height:17px;
}
.time {
  font-size:11px;
  color:#b2b1b1;
  transition:ease 0.2s all;
}
  .comment:hover .time {
    color:#767676;
  }
.comment-text {
  font-size:13px;
  line-height:17px;
  color:#222;
  margin:0px 10px;
}
a {
  font-size:11.2px;
  text-transform: uppercase;
  text-decoration: none;
  color:#222;
  cursor:pointer;
  transition:ease 0.3s all;
}
a:hover {
  color:#0072bc;
}
  .link-reply {
    color:#767676;
    margin-left:20px;
  }

h1 {
  width:45%;
  height:auto;
  margin:0px auto;
  font-size:16px;
  font-weight:300;
  text-transform: uppercase;
  border-bottom:1px solid rgba(1,1,1,0.2);
}

label {
  font-size:13px;
  text-transform: uppercase;
  vertical-align: bottom;
}
  </style>
  <script type="text/javascript">
    $(document).ready(function() {
  $(".child-comments").hide();

  $("a#children").click(function() {
    var section = $(this).attr("name");
    var togTxt = $("#tog_text").text();
    $("#C-" + section).toggle();
  });

  $(".form-submit").click(function() {
    var commentBox = $("#comment");
    var commentCheck = commentBox.val();
    if(commentCheck == '' || commentCheck == NULL) {
      commentBox.addClass("form-text-error");
      return false;
    }
  });

  $(".form-reply").click(function() {
    var replyBox = $("#new-reply");
    var replyCheck = replyBox.val();
    if(replyCheck == '' || replyCheck == NULL) {
      replyBox.addClass("form-text-error");
      return false;
    }
  });

  $("a#reply").one("click", function() {
    var comCode = $(this).attr("name");
    var parent = $(this).parent();

    parent.append("<br /><form action='' method='post'><textarea class='form-text' name='new-reply' id='new-reply' required='required'></textarea><input type='hidden' name='code' value='"+comCode+"' /><input type='submit' class='form-submit' id='form-reply' name='new_reply' value='Reply' /></form>")
  });

})

  </script>
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
  
   <?php
   //database 
  date_default_timezone_set('Africa/Kampala');
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'hosteldb';
$username = $_SESSION['login_user'];
  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));

  //functions 

  function get_total() {
  date_default_timezone_set('Africa/Kampala');
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'hosteldb';

  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
    $result = mysqli_query($connect, "SELECT * FROM `comments` ORDER BY `date` DESC");
    $row_cnt = mysqli_num_rows($result);
    echo '<h1>All Comments ('.$row_cnt.')</h1>';
  }

  function get_comments() {
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'hosteldb';

  $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
    $result =  mysqli_query($connect, "SELECT * FROM `comments` ORDER BY `date` DESC");
    $row_cnt = mysqli_num_rows($result);

    while($item=mysqli_fetch_array($result)) {
      $date = new dateTime($item['date']);
      $date = date_format($date, 'M j, Y | H:i:s');
      $username = $item['username'];
      $comment = $item['message'];
      $par_code = $item['code'];

      echo '<div class="comment" id="'.$par_code.'">'
          .'<p class="username">'.$username.'</p>&nbsp;'
          .'<p class="time">'.$date.'</p>'
          .'<p class="comment-message">'.$comment.'</p>'
          .'<a class="link-reply" id="reply" name="'.$par_code.'">Reply</a>';
        $chi_result = mysqli_query($connect, "SELECT * FROM `children` WHERE `par_code`='$par_code' ORDER BY `date` DESC");
        $chi_cnt = mysqli_num_rows($chi_result);

        if($chi_cnt == 0){
        } else {
          echo '<a class="link-reply" id="children" name="'.$par_code.'"><span id="tog_message">replies</span> ('.$chi_cnt.')</a>'
            .'<div class="child-comments" id="C-'.$par_code.'">';

          while($com=mysqli_fetch_array($chi_result)) {
            $chi_date = new dateTime($com['date']);
            $chi_date = date_format($chi_date, 'M j, Y | H:i:s');
            $chi_username = $com['username'];
            $chi_com = $com['message'];
            $chi_par = $com['par_code'];

            echo '<div class="child" id="'.$par_code.'-C">'
                .'<p class="username">'.$chi_username.'</p>&nbsp;'
                .'<p class="time">'.$chi_date.'</p>'
                .'<p class="comment-message">'.$chi_com.'</p>'
              .'</div>';
          }
          echo '</div>';
        }
        echo '</div>';
    }
  }

  function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characterLength = strlen($characters);
    $randomString = '';

    for($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $characterLength - 1)];
    }
    return $randomString;
  }  
  // new comment
  if(isset($_POST['new_comment'])) {
    $new_com_name = $_SESSION['username'];
    $new_com_text = $_POST['comment'];
    $new_com_date = date('Y-m-d H:i:s');
    $new_com_code = generateRandomString();

    if(isset($new_com_text)) {
      $qry=mysqli_query($connect, "INSERT INTO comments(username, message, date, code) VALUES ('$new_com_name', '$new_com_text', '$new_com_date', '$new_com_code')");

          if ($qry) {
            # code...
            //header("Location:comments.php");
          }else{
        echo "<br/>Data not Inserted...";
        }
    }
    
  }
  // new reply
  if(isset($_POST['new_reply'])) {
    $new_reply_name = $_SESSION['username'];
    $new_reply_text = $_POST['new-reply'];
    $new_reply_date = date('Y-m-d H:i:s');
    $new_reply_code = $_POST['code'];

    if(isset($new_reply_text)) {
      mysqli_query($connect, "INSERT INTO `children` (`username`, `message`, `date`, `par_code`) VALUES ('$new_reply_name', '$new_reply_text', '$new_reply_date', '$new_reply_code')") or die(mysqli_error());
    }
   // header("Location: ");
  }
    ?>
  <h1>Comments </h1>
    <div class="container">
   <div class="page-container">
      <?php 
        get_total();
        
      ?>
      <form action="" method="post" class="main">
        <label>enter a brief comment</label>
        <textarea class="form-text" name="comment" id="comment"></textarea>
        <br />
        <input type="submit" class="form-submit" name="new_comment" value="post">
      </form>
      <?php get_comments(); ?>
    </div>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
    <div id="output"></div>
    

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
