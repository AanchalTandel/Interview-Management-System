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
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
					<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-file-text"></i>  Advertisement <i class="fa fa-fw fa-caret-down"></i></a>
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
                            HR Details
                        </h1>
                         <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index_admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i>  HR details
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<p align="right"> Sort By:
					<select name="sorting">
					<option value="Marks">Marks</option>
					<option value="Experience">Experience</option>
					<option value="Alphabetic_order">Alphabetc Order</option>
					</select>
					</p>
				</div>
                <div class="row">
					<div class="list-group">
					<?php
						$list= mysql_query("SELECT HR_id,HR_username FROM hr");
						if(mysql_num_rows($list) > 0) 
						{ // output data of each row
							echo "<table class='table' width='150'>";
							echo "<tr><th>HR Name</th><th>Select</th></tr>";
							while($row = mysql_fetch_assoc($list)) 
							{
								$HR_id=$row['HR_id'];
								echo "<tr>";
								echo "<td><a href='hr_details.php?hr=$HR_id'> ".$row['HR_username']." </a></td>";
								echo "<td><input type='checkbox'></td>";
								echo "</tr>";
							}
							echo "</table>";
						}
					?>
					
					
				</div>
				
				
				</div>
				<div class="modal fade" id="candidate_popup" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">See or edit info</h4>
							</div>
						<div class="modal-body">
				
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
						</div>
					</div>
				</div>
                <!-- /.row -->

               
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
