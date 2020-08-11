<?php 

include 'ConfigFile.php';

session_start();

if(isset($_POST))
        if($_POST['email'] != null || $_POST['pass'] != null  ){

            $email = $_POST['email'];
            $password = $_POST['pass'];

            $query = "SELECT * FROM Register WHERE Email='$email' AND Password='$password' ";

            $execute = mysqli_query($conn,$query);
          
            $num_row = mysqli_num_rows($execute);
            $row = mysqli_fetch_array($execute);
          
            if( $num_row == 1 )
                 {
                    $_SESSION["id"]     =   $row['userid'];
                    $_SESSION["name"]   =   $row['Full_Name'];
                    header("Location: http://localhost/FirstWebsite/Index.php");
                }
             
                else{
                    echo "<script type='text/javascript'>alert('Invalid User');</script>";
                   
                }
            }
            else{
                echo "<script type='text/javascript'>alert('Fields cannot be left empty');</script>";
            }
    
    ?>
               
            