<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	
		$login_id=$_POST['UserName'];
		
		$pass = $_POST['password'];
	
		$r=mysql_query("select * from admin where Admin_login='$login_id' and Admin_pass='$pass'")or die(mysql_error());
		if(mysql_num_rows($r)>0)
		{
			while($row=mysql_fetch_array($r))
			{
				if($row['Admin_status']==1)
				{
					$_SESSION['Admin_id']=$login_id;
					header("location:index_admin.html");
				}
				else
				{
					echo "Your account is Deactivate...";
				}
			}
		}
		else
		{
			echo "<script type='text/javascript'>window.open('login1.php','_self')alert('incorrect login id and password');document.getElementById('UserName').focus();</script>";		
		}
		
			
	?>
</body>
</html>
