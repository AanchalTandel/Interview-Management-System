<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HR | LogIn</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	 <link href="css/agency.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
</head>

<body style="margin:50px;padding:0px;">
      <nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
               
                <a class="navbar-brand page-scroll" href="#page-top">KAJUS</a>
            </div>
		</nav>
 


        <div class="container" style="margin-top:150px;">

            <div class="row centered-form">
                <div class="col-md-6 col-md-offset-1" >
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Log In</h3>
                        </div>
                        <div class="panel-body">
						<form  method="POST"  enctype="multipart/form-data">
								<div class="row">
									    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">User Name</label>
                                            <input type="text" name="HR_username" id="HR_username" class="form-control input-sm" placeholder="UserName" required>
                                        </div>
                                    </div>
									</div>

								<div class="col-md-12"></div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="HR_password" id="HR_password" class="form-control input-sm" placeholder="Password" required >
                                        </div>
                                    </div>
									</div>
							<div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block" />
                                    </div>
									<a href="HR_reg(a).php">New Registration </a>
									</div>
									</form>
                                </div>

                        </div>
                    </div>
    <?php
	if(isset($_POST['submit']))
	{
		$login_id=$_POST['HR_username'];
		$pass = $_POST['HR_password'];
		$r=mysql_query("select * from hr where HR_username='$login_id' and HR_password='$pass'")or die(mysql_error());
		if(mysql_num_rows($r)>0)
		{
			while($row=mysql_fetch_array($r))
			{
				if($row['HR_status']==1)
				{
					$_SESSION['HR_username']=$login_id;
					header("location:index_hr.php");
				}
				else
				{
					echo "<script type='text/javascript'>alert('Your account is deactivated... ');</script>";	
				}
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('incorrect login id and password');document.getElementById('HR_username').focus();</script>";		
		}
	}	
	?>
        <script src="js/jquery.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>
