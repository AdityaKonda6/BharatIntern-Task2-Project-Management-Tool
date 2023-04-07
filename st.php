<?php
    include 'connection.php';
        if(isset($_POST['add']))
        {
           $id=$_POST['id']; 
           $name=$_POST['stname'];
           $email=$_POST['stemail'];
           $phone=$_POST['stphone'];
           $pass=$_POST['stpass']; 
           $year=$_POST['styear'];
           $stream=$_POST['stream'];
           
           
          if (!empty($id)|| !empty($name)||!empty($email)||!empty($phone)||!empty($pass)||!empty($year)||$stream!="Select")
           {
              
            $sql= "INSERT INTO `pmas`.`student` (`s_id`, `name`, `email`, `phone`, `password`, `year`, `stream`) VALUES ('$id', '$name', '$email', '$phone', '$pass', '$year', '$stream');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:student.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:student.php');
        }       
                  
        }
 
?>
    
