<?php  
require_once('database.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>Image</title>
 </head>
 <body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image"><br /><br/>
        <input type="submit" name="submit" value="Upload">
    </form>
    <?php
      if (isset($_POST['submit'])) {
        # code...
        if (getimagesize($_FILES['image']['tmp_name']) == FALSE) {
          # code...
          echo "Please select an image.";
        }else{
          $image = addslashes($_FILES['image']['tmp_name']);
          $name = addslashes($_FILES['image']['name']);
          $image = file_get_contents($image);
          $image =base64_encode($image);

          $qry = "INSERT INTO image(name,image) VALUES('$name','$image')";
          $result = mysqli_query($con,$qry);
          if ($result) {
            # code...
            echo "<br/>Image uploaded";
          }else{
        echo "<br/>Image not uploaded";
        }
        
          mysqli_close($con);

        }
  }
        $query = "SELECT * FROM image ";
        $result1  = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result1)){
          # code...
          echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'" >';
          }
      ?>
 </body>
 </html>