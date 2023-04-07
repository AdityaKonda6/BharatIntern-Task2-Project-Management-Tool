<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';
        if(isset($_POST['submit']))
        {
           $sid=$_POST['sid']; 
           $fid=$_POST['fid'];
           $date=$_POST['dat'];
           $time=$_POST['tem'];
           $dec=$_POST['des']; 
           
           
          if (!empty($date)||!empty($time)||!empty($dec))
           {
              
            $sql= "INSERT INTO `pmas`.`meeting` (`meeting_id`, `f_id`, `s_id`, `date`, `time`, `desc`) VALUES ('', '$fid', '$sid', '$date', '$time', '$dec');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:meeting.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:meeting.php');
        }       
                  
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
    
    
</p>
<p>&nbsp;</p>
<form method="post" action="meeting.php">
    <div style="background-color:beige; border:1px solid black; width:40%; margin-left:30%; margin-top:50px;">
<table width="100%" border="0" cellspacing="05" cellpadding="05">
  <tr>
    <th width="14%" rowspan="2" scope="col">&nbsp;</th>
    <th colspan="2" scope="col"><font size="6">MEETING DETAIL</font></th>
    <th width="12%" rowspan="2" scope="col">&nbsp;</th>
  </tr>
  <tr>
      <td width="36%" scope="col" align="right"><font size="5">Faculty ID : </font></th>
      <td width="38%" scope="col"><input id="in" type="text" name="fid" value="<?php echo $user;?>" readonly/></th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" ><font size="5">Student ID : </font></td>
    <td align="left">
                
    <?php
            include '../connection.php';
             $sql="select s_id from project where f_id='$user';";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="sid" style="width: 10em; height: 2em; font-size: 15px;">
                 <option selected>Supervisory</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select>
            </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Date :  </font></td>
    <td><input id="in" type="date" name="dat"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Time : </font></td>
    <td><input id="in" type="time" name="tem" /><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Description : </font></td>
    <td><textarea id="in" name="des" cols="22" rows="5"></textarea><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" align="center"><input style="width: 4em;  height: 2em; font-size: 20px;" type="submit" name="submit" value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
    </div>
</form>
</body>