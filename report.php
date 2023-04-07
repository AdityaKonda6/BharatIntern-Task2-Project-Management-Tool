<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background-image:url(background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
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
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#99CCFF">
      <th width="5%" scope="col"><h4>&nbsp;</h4></th>
      <th width="12%" scope="col"><a href="ADMIN/student.php">Add Student</a></th>
      <th width="11%" scope="col"><a href="ADMIN/faculty.php">Add Faculty</a></th>
      <th width="11%" scope="col"><a href="ADMIN/stsearch.php">Search Student</a></th>
      <th width="11%" scope="col"><a href="ADMIN/fa_search.php">Search Faculty </a></th>
      <th width="11%" scope="col"><a href="ADMIN/allocate.php">Allocate</a></th>
      <th width="11%" scope="col"><a href="ADMIN/skill.php">Skill Matrix</a></th>
      <th width="11%" scope="col"><a href="#">Reports</a></th>
      <th width="11%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
 <?php
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
		background-image:url(background.png);
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
    <th width="164" scope="col"><img src="images/logo1.png" alt="LOGO"></th>
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
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
      <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
      <th width="15%" scope="col"><a href="FACULTY/skill.php">Skill Matrix</a></th>
      <th width="14%" scope="col"><a href="FACULTY/view.php">View</a></th>
      <th width="15%" scope="col"><a href="FACULTY/mail.php">Mail</a></th>
      <th width="13%" scope="col"><a href="FACULTY/meeting.php">Meeting</a></th>
      <th width="15%" scope="col"><a href="FACULTY/#">Reprots</a></th>
    <th width="15%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
 <?php
}
else   
{
?>
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
	body
	{
		background-image:url(background.png);
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
    <th width="164" scope="col"><img src="images/logo1.png" alt="LOGO"></th>
    <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
	<?php
    print $role;
    echo "<br/>";
    print $user;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
    </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
    <th width="13%" scope="col"><a href="STUDENT/project.php">Project</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="STUDENT/skill.php">View Skill Matrix</a></th>
    <th width="11%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="STUDENT/mail.php">Mail</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
<?php
}
?>
</table>
<p>
  <?php
}
?>
    
    
</p>
<p>&nbsp;</p>
  </table>
</table></body>