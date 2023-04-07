<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';
//$sql="select s_id from project where f_id='$user';"; 
//$record=mysqli_query($conn, $sql);


if (isset($_POST['ppf']))
{
    $file=$_POST['file_name'];
    if(!empty($file)){
    header('Content-type:doc/pdf');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('ppf/'.$file);
    exit();}
 else {
    echo 'no file';
    }
}
elseif (isset($_POST['psf']))
{
    $file=$_POST['file_name1'];
    if(!empty($file)){
    header('Content-type:doc/pdf');
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('psf/'.$file);
    exit();}
 else {
    
}
}
                    elseif (isset($_POST['assess']))
                {
                $feed=$_POST['assessmen'];
                $prid=$_POST['pid'];
                if(!empty($feed))
                {
                $sql2= "UPDATE `pmas`.`project` SET `remark` = '$feed' WHERE `project`.`p_id` = '$prid';";
                mysqli_query($conn, $sql2);
                $conn->close();
                header('Location:view.php');
                }
                else 
                {
                      header('Location:view.php');
                      
                }
                }
                elseif (isset($_POST['rem']))
                {
                $re=$_POST['remainder'];
                $stuid=$_POST['stid'];
                //$stuid;
                $sql3= "INSERT INTO `pmas`.`mail` (`mail_id`, `s_id`, `f_id`, `msg`) VALUES ('', '$stuid', '$user', '$re');";
                mysqli_query($conn, $sql3);
                $conn->close();
                header('Location:view.php');
                } 
                
                
                
if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
if($role=="Admin")
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background-image:url(../background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
</style>
<title>Project Management System</title>
</head>
    <div>
    <body>

 <?php
 header("location:../Admin.php");
}
elseif($role=="Faculty")    
{
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
	body
	{
		background-image:url(../background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
        a link{
            text-decoration: none;
        }
</style>
<title>Project Management System</title>
</head>
<div>
<body>
    <table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="74" scope="col">&nbsp;</th>
    <th width="164" scope="col"><a href="../Admin.php"><img src="../logo1.png" alt="LOGO"/></a></th>
    <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
    <?php
    print $role;
    echo "<br/>";
    print $user;
    ?>
        </font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
    <th width="15%" scope="col"><a href="skill.php">Skill Matrix</a></th>
    <th width="14%" scope="col"><a href="view.php">View</a></th>
    <th width="15%" scope="col"><a href="mail.php">Mail</a></th>
    <th width="13%" scope="col"><a href="meeting.php">Meeting</a></th>
    <th width="15%" scope="col"><a href="#">Reprots</a></th>
    <th width="15%" scope="col"><a href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
 <?php
}
else   
{
?>
    
<?php
header("location:../Admin.php");
}
?>
</table>
<p>
  <?php
}
?>
    <form method="post" action="view.php">
        <br/><br/>
        <div style="background-color: beige; margin-left: 33%; alignment-adjust: central; width: 35%">
    <table align="center">
        <tr>
            <td><h4>&nbsp;</h4></td>
            <td align="center">
                
    <?php
            include '../connection.php';
             $sql="select s_id from project where f_id='$user';";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="student" style="width: 10em; height: 2em; font-size: 15px;">
                 <option selected="selected">Supervisory</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option  value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select>   &nbsp;&nbsp;&nbsp;
            <input style="width: 6em;  height: 2em; font-size: 15px;" type="submit" name="asses" value="Feedback"/>
            </td>
        </tr>
    </table>  
        </div>
         </form>
    <form method="post" action="view.php">
        <div style="background-color:beige;  alignment-adjust: central; width:90%; margin-left:5%; margin-top:75px;">
    <table width="100%" cellpadding="5" cellspacing="5" border="1" align="center">
    <?php
            if (isset($_POST['asses']))
            {   
                $stuid=$_POST['student'];          
                echo "<tr>";?>
                
                <th>Student ID</th>
                <th>Project Proposal</th>
                <th>Project Specification</th>
                <th>Assessment</th>
                <th>Quick Mail</th>
                
                <?php
                echo "</tr>";
                echo "<tr>";
                
                echo "<td>"?> <input type="text" name="stid" readonly value="<?php echo $stuid;?>"/> <?php "</td>";
                
                $sql1="select * from project where s_id ='$stuid' ";
                $rec=mysqli_query($conn, $sql1);
                
                while ($std=mysqli_fetch_assoc($rec))
                {
                    echo "<td>"?> <input name="file_name" value="<?php echo $std["ppf"]?>" type="text" readonly /><br/><br/>
                    <input type="submit" value="Download" name="ppf"/> <input type="hidden" name="pid" value="<?php echo $std['p_id']?>"/> <?php "</td>";
                    
                echo "<td>"?><input name="file_name1" value="<?php echo $std["psf"]?>" type="text" readonly /><br/><br/>
                    <input type="submit" value="Download" name="psf"/> <?php "</td>";
                    
                    echo "<td>"?><textarea  name="assessmen" cols="30" rows="5" ></textarea><br/><br/>
                    <input type="submit" value="Submit" name="assess"/> <?php "</td>";
                  
                    echo "<td>"?><textarea name="remainder"  cols="30" rows="5" ></textarea><br/><br/>
                    <input type="submit" value="Submit" name="rem"/> <?php "</td>";
                    
                    echo "</tr>";
                
                   
            }
            }
    ?>
    </table>
        </div>
    </form>
</p></body></div>

    
