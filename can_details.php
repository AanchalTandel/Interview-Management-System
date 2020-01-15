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

    <title>Interview Management System</title>

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
					 ?> <b class="caret"></b></a>
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
                                <a href="candidate.html"> <i class="fa fa-users"></i>  Candidate Details</a>
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
                                <i class="fa fa-dashboard"></i>  <a href="index_admin.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Candidate Details
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<p> Sort By:
					<ul class="dropdown-menu">
						<li role="presentation">Alphabetical Order</li>
						<li role="presentation">Marks</li>
						<li role="presentation">Experience</li>
					</ul>
					</p>
				</div>
                <div class="row">
					<div class="list-group">
					<?php
						if(isset($_GET['can']))
						{
							$can_id=$_GET['can'];
							$can_result=mysql_query("select * from candidate where can_id='$can_id'") or die(mysql_error());
							if(mysql_num_rows($can_result)>0)
							{
								echo "<table border=0 cellspacing=3>";
								
								while($row=mysql_fetch_array($can_result))
								{
									$can_first_name=$row['can_first_name'];
									$can_middle_name=$row['can_middle_name'];
									$can_last_name=$row['can_last_name'];
									$can_gen=$row['can_gen'];
									$can_bdate=$row['can_bdate'];
									$can_address=$row['can_address'];
									$can_mobile_no=$row['can_mobile_no'];
									$can_email=$row['can_email'];
									$can_hobbie_1=$row['can_hobbie_1'];
									$can_hobbie_2=$row['can_hobbie_2'];
									$can_hobbie_3=$row['can_hobbie_3'];
									$can_branch=$row['can_branch'];
									$result_10=$row['result_10'];
									$result_12=$row['result_12'];
									$can_qualification=$row['can_qualification'];
									$diploma_result=$row['diploma_result'];
									$degree_result=$row['degree_result'];
									$postd_result=$row['postd_result'];
									$resume=$row['resume'];
									$can_username=$row['can_username'];
									
									echo "<tr>";
									echo "<td><b>  First Name :</b></td>";						
									echo "<td>".$can_first_name."</td>";
									echo "</tr>";
									echo "<tr>";
									echo "<td><b> Middle name :</b></td>";						
									echo "<td>".$can_middle_name."</td>";
									echo "</tr>";
									echo "<tr>";
									echo "<td><b> Last name :</b></td>";						
									echo "<td>".$can_last_name."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Gender :</b></td>";						
									echo "<td>".$can_gen."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Birthdate :</b></td>";						
									echo "<td>".$can_bdate."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Address :</b></td>";						
									echo "<td>".$can_address."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Mobile no:</b></td>";						
									echo "<td>".$can_mobile_no."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td> <b>E-mail :</b></td>";						
									echo "<td>".$can_email."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Hobby 1 :</b></td>";						
									echo "<td>".$can_hobbie_1."</td>";
									echo "</tr>";
									echo "<tr>";
									echo "<td> <b>Hobby 2 :</b></td>";						
									echo "<td>".$can_hobbie_2."</td>";
									echo "</tr>";
									echo "<tr>";
									echo "<td> <b>Hobby 3 :</b></td>";						
									echo "<td>".$can_hobbie_3."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Branch :</b></td>";						
									echo "<td>".$can_branch."</td>";
									echo "</tr>";
									
									
									echo "<tr>";
									echo "<td><b> Result of 10th :</b></td>";						
									echo "<td>".$result_10."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Result of 12th :</b></td>";						
									echo "<td>".$result_12."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Qualification :</b></td>";						
									echo "<td>".$can_qualification."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Diploma Result :</b></td>";						
									echo "<td>".$diploma_result."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Degree Result :</b></td>";						
									echo "<td>".$degree_result."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Post Degree Result : </b> </td>";						
									echo "<td>".$postd_result."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Resume :</b></td>";						
									echo "<td>".$resume."</td>";
									echo "</tr>";
									
									echo "<tr>";
									echo "<td><b> Username :</b></td>";						
									echo "<td>".$can_username."</td>";
									echo "</tr>";
									
									
									
									
									
									
								}
							}
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
