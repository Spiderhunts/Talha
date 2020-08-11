
        <?php
          
          include 'ConfigFile.php';
          
      

         // For Creating New Record
          
           $name          = $_POST['Name'];
           $fname         = $_POST['fname'];
           $city          = $_POST['city'];
           
         
           
               
               $sql = "INSERT INTO table1(Sname,Father_Name,City) VALUES('$name','$fname','$city')";
               $result = mysqli_query($conn,$sql) or die("Query failed");
               
               header("Location: http://localhost/FirstWebsite/Index.php");
              
               
          msqli_close($conn);
           
 ?>
