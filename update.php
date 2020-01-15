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
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index_admin.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                       
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php	
					 if(isset($_SESSION['Admin_login']))
					 { 
					 	echo $_SESSION['Admin_login'];
					 }
					 else
					 { 
					 	echo "session has been expire;..."; 
					 } 
					 ?>  <b class="caret"></b></a>
					
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index_admin.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>		
                    </li>
                    <li>
					<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-file-text"></i>  Candidate <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="recent_add.php"> <i class="fa fa-clock-o"></i> Recent Advertise</a>
                            </li>
                            <li>
                                <a href="advertisement.php"> <i class="fa fa-plus-square"></i>   Add Advertise</a>
                            </li>
                        </ul>

                    
                    </li>
                    <li>
                        <a href="test.html"><i class="fa fa-fw fa-table"></i> Test</a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-plus-square"></i>  Details <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="candidate.php"> <i class="fa fa-users"></i>  Candidate Details</a>
                            </li>
                            <li>
                                <a href="hr.php"> <i class="fa fa-user"></i>   HR Deatils</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Candidate Details
                        </h1>
                         <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index_admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Candidate Details
                            </li>
                        </ol>
                    </div>
                </div>
				<?php 
				$id = intval($_GET['can']);
				$r=mysql_query("Select * from candidate where can_id=".$id."");
						while($row = mysql_fetch_assoc($r)) 
							{
								$canid=$row['can_id'];
								$firstname=$row['can_first_name'];
								$middlename=$row['can_middle_name'];
								$lastname=$row['can_last_name'];
								$gender= $row["can_gen"];
								$address= $row["can_address"];
								$mobile= $row["can_mobile_no"];
								$email= $row["can_email"];
								$username= $row["can_username"];
								$birthday= $row["can_bdate"];
								
							}
				?>
<div class="container">

            <div class="row centered-form">
                <div class="col-md-8 col-md-offset-1" >
                    <div class="panel panel-primary">
                
						<div class="panel-body">
							<form method="post">
							<div class="row">				
								<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Candidate ID:</label>
                                            <input type="text" name="can_id1" id="can_id1" class="form-control input-sm" value="<?php  echo $canid; ?>"disabled >
                                        </div>
									</div>
								</div>
							 <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="can_first_name" id="can_first_name" class="form-control input-sm" value="<?php   echo $firstname; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" name="can_middle_name" id="can_middle_name" class="form-control input-sm" value="<?php   echo $middlename; ?>" required >
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="can_last_name" id="can_last_name" class="form-control input-sm" value="<?php   echo $lastname; ?>" required >
                                        </div>
                                    </div>
                               
								</div>
								<div class="row">
                                    
                                    <div class="col-md-12">	
										<div class="form-group">
											<p>
											  <label for="gender">Gender</label>
										  </p>
											<p>
											  <input type="radio" name="can_gen" id="can_gen" value="Male" <?php  echo ($gender=="Male")?'checked':''?>>
											  <label for="gen" >Male</label>
											  <input type="radio" name="can_gen" id="can_gen1" value="Female" <?php  echo ($gender=="Female")?'checked':''?>>
											  <label for="gen2">Female</label>
                                            </p>
                                        </div>
									</div>
									</div>
                               <div class="row">
									<div class="col-md-12">
									<div class="form-group">
                                            <label for="last_name">Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" name="can_address" id="can_address"><?php echo $address; ?></textarea>
                                    </div>
									</div>
								</div>
								
								
								
										
								<div class="row">				
								<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Mobile No</label>
                                            <input type="text" name="can_mobile_no" id="can_mobile_no" class="form-control input-sm" value="<?php  echo $mobile; ?> " required >
                                        </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="can_email" id="can_email" class="form-control input-sm" value="<?php echo $email; ?> " required >
										</div>
									</div>
									</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
							<button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
							<button type="submit" name="submit_update" class="btn btn-primary">Save changes</button>
								</div>
									</div>
									</div>
								
							
							</form>
						</div>
						
						<?php
					
					  if(isset($_POST['submit_update']))
					  {	
								
								$firstname=$_POST['can_first_name'];
								$middlename=$_POST['can_middle_name'];
								$lastname=$_POST['can_last_name'];
								$gender= $_POST["can_gen"];
								$address= $_POST["can_address"];
								$mobile= $_POST["can_mobile_no"];
								$email= $_POST["can_email"];
								

						  $r="UPDATE candidate SET can_first_name='$firstname', can_middle_name='$middlename',can_last_name='$lastname',can_gen='$gender',can_address='$address',can_mobile_no='$mobile',can_email='$email' WHERE can_id='$canid'";
						  mysql_query($r) or die('Query failed: ' . mysql_error());
							echo "<script type='text/javascript'>alert('entry updated!');window.location = 'candidate.php';</script>";

					  }
					  ?>
						
						</div>
					</div>
				</div>
				 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	</body>
	</html>