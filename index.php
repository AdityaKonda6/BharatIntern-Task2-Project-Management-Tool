<?php
session_start();
if(empty($_SESSION['username']))
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
<table width="100%"  cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="7%" scope="col">&nbsp;</th>
    <th width="12%" scope="col"><img src="images/logo1.png" alt="LOGO"></th>
    <th width="62%" scope="col"><font size="8" color="White">Project Managenent System</font></th>
    <th width="13%" scope="col"><font size="5" color="White">Login</font></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div style="width:40%;background-color:#FFF8DC;margin-left:30%;margin-top:100px;font-family:calibri;border:1px solid black;">
    	<br><br>
        <form name="login" action="register.php" method="post">
        <table width="100%"  cellspacing="02" cellpadding="02">
  <tr>
    <th colspan="2" scope="col">LOGIN</th>
    </tr>
  <tr>
    <td align="right">Email&nbsp;:&nbsp;</td>
    <td><input type="email" name="name"><br/>
    <span class="error">* <?php echo $nameErr;?></span></td>
  </tr>
  <tr>
    <td align="right">Password&nbsp;:&nbsp;</td>
    <td><input type="password" name="name"></td>
  </tr>
  <tr>
    <td align="right">Login_As&nbsp;:&nbsp;</td>
    <td>
      <select>
        <option value="Student">Student</option>
        <option value="Supervisor">Supervisor</option>
        <option value="Admin">Admin</option>          
        </select>
      </td>
  </tr>
</table>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="register" value="Submit" />
        <br/>
        &nbsp;
        </form>
    	</div>
     </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</div>
</html>
<?php
}
else
{
header("location:index.php");
}

?>