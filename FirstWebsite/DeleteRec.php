Hello
        <?php
          include 'ConfigFile.php';
          
      

         // For Deleting Row
            $id  = $_GET['id'];
          
             $sql = "DELETE FROM table1  WHERE id = '$id' ";
         

             $result = mysqli_query($conn,$sql) or die("Query failed");
      
             
          header("Location: http://localhost/FirstWebsite/Index.php");
          msqli_close($conn);
           
 ?>
