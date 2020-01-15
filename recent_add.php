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
                <a class="navbar-brand" href="index_admin.html">Admin</a>
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
                            Advertisement Details
                        </h1>
                         <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index_admin.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> advertise Details
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
                <div class="row">
					<div class="list-group">
					<?php
						$list= mysql_query("SELECT Add_id,Add_title,Add_details,From_dt,To_dt FROM advertise");
						if (mysql_num_rows($list) > 0) 
						{ // output data of each row
							echo "<table class='table' width='150'>";
							echo "<tr><th>Advertise title</th><th>from date</th><th>to date</th></tr>";
							
							while($row = mysql_fetch_assoc($list)) 
							{
								echo "<tr>";
								echo "<td><a data-toggle='modal'  href='add_popup.php?job_title=".$row['Add_title']."&job_desc=".$row['Add_details']."'  class='list-group-item'> ".$row['Add_title']." </a></td>";
								echo "<td>".$row['From_dt']." </td>";
								echo "<td>".$row['To_dt']." </td>";
								echo "</tr>";									
							}
							echo "</table>";
						}
					?>
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
