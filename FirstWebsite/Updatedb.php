
        <?php
          
         include 'ConfigFile.php';
      

         // For Creating New Record
           $id            = $_POST['id'];
           $name          = $_POST['Name'];
           $fname         = $_POST['fname'];
           $city          = $_POST['city'];
           
         

             
             $sql = "UPDATE table1 SET Sname ='$name', Father_Name = '$fname', City= '$city'  WHERE id = '$id' ";
            
             $result = mysqli_query($conn,$sql) or die("Query failed");
             
             header("Location: http://localhost/FirstWebsite/Index.php");
         
               

          msqli_close($conn);
           
 ?>
