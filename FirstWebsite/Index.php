<html>
    <head>
    <title>My Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
  
  
    <body>
    <?php
session_start();
if($_SESSION["name"] != null){


?>
        <?php
          include 'ConfigFile.php';
          
            $sql = "SELECT * FROM table1";
            $result = mysqli_query($conn,$sql) or die("Query failed");

           
           
 ?>

<?php  include 'navbar.php'; ?>


 <br>
  <div class="container">
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
   
    
    <br><br>
    
  <?php   foreach($result as $row) {    ?>
    <tr>

      <th scope="row"><?php echo  $row["id"]; ?></th>
      <td><?php echo  $row["Sname"]; ?></td>
      <td><?php echo  $row["Father_Name"]; ?></td>
      <td><?php echo   $row["City"]; ?></td>
      <td>
      <a class="btn btn-secondary" href="CreateForm.php?id=<?php echo  $row["id"]; ?>" >Edit</a>
      <a class="btn btn-danger" href="DeleteRec.php?id=<?php echo  $row["id"]; ?>" >Delete</a>
      </td>
      
      
    </tr>
  <?php   } ?>
 
  </tbody>
</table>

</div>

<?php   
    }else{
          header("Location: http://localhost/FirstWebsite/Login_v2/index.html");
  } ?>
            
                </body>

</html>