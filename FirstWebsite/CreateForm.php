<html>
    <head>
    <title>My Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
  
    <body>
      
    <?php 
    session_start();
    if($_SESSION["name"] != null){ ?>


<?php include 'navbar.php'; ?>
  
  <?php
 
     //  for Updating Record
          if(isset($_GET['id']))
          {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_db1";

            $conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed");
            $Up_id = $_GET['id'];
            $sql = "SELECT * FROM table1 WHERE id= '$Up_id' ";
          
            $result = mysqli_query($conn,$sql) or die("Query failed");
           
            }

    ?>


 <br>
 
            <?php
             if(isset($_GET['id'])){
              foreach($result as $x){
                 
            ?>
   <!-- Form for Updating Record -->
              <div class="container">
              <div class="col-sm-8">
              
              <form action="Updatedb.php" method="post">

              <div class="form-group">
                <input type="hidden" class="form-control"  name="id" value=" <?php echo $_GET['id']; ?>">
              </div>
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="Name" value=" <?php echo $x['Sname']; ?>">
              </div>
              <div class="form-group">
                <label for="fname">Father Name:</label>
                <input type="text" class="form-control" name="fname" value=" <?php echo $x['Father_Name']; ?>">
              </div>

              <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value=" <?php echo $x['City']; ?>">
              </div>
            
              <?php }}
           
    // Form for Creating New Record
            else{ ?>
              <div class="container">
              <div class="col-sm-8">
              
              <form action="Createdb.php" method="post">
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" name="Name" >
              </div>
              <div class="form-group">
                <label for="fname">Father Name:</label>
                <input type="text" class="form-control" name="fname"  >
              </div>

              <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" >
              </div>
              <?php } ?>


              <?php
       
        if(isset($_GET['id'])){
           ?>
             <button type="submit" class="btn btn-danger">Update</button>
        
           <?php } 
          
          else{
           ?>
              <button type="submit" class="btn btn-success">Submit</button>
         
           <?php } ?>
          
          

            </form>
           
            </div>
            </div>
        <?php }
          else{
                 header("Location: http://localhost/FirstWebsite/Login_v2/index.html");
            } ?>
                </body>

</html>