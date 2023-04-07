<?php
    include 'connection.php';
        if(isset($_POST['add']))
        {
           $id=$_POST['id']; 
           $name=$_POST['faname'];
           $email=$_POST['faemail'];
           $phone=$_POST['faphone'];
           $pass=$_POST['fapass']; 
           $qualification=$_POST['faqulification'];
           
           
          if (!empty($id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass)||!empty($qualification))
           {
              
            $sql= "INSERT INTO `pmas`.`faculty` (`f_id`, `name`, `email`, `phone`, `password`, `qualification`, `domain`, `research`, `others`) VALUES ('$id', '$name', '$email', '$phone', '$pass', '$qualification', 'NULL','NULL','NULL');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:faculty.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:faculty.php');
        }       
                  
        }
 
?>
    
