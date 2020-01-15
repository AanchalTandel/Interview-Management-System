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

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4./respond.min.js"></script>
    <![endif]-->
	

 
	

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">KAJUS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	 <!-- Header -->
   

            <div class="row centered-form" style="margin-top:120px">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">HR Registration form</h3>
                        </div>
                        <div class="panel-body">
						
                
				            <form action="hr1.php" method="POST" name="HR_reg" enctype="multipart/form-data" onSubmit="return onSubmit("HR_reg");">
								
								
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="HR_first_name" id="HR_first_name" class="form-control input-sm" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" name="HR_middle_name" id="HR_middle_name" class="form-control input-sm" placeholder="Middle Name" required >
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="HR_last_name" id="HR_last_name" class="form-control input-sm" placeholder="Last Name" required >
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
											  <input type="radio" name="HR_gender" id="HR_gender" value="M" checked="checked">
											  <label for="gen" >Male</label>
											  <input type="radio" name="HR_gender" id="HR_gender" value="F">
											  <label for="gen2">Female</label>
                                            </p>
                                        </div>
									</div>
									</div>

                                <div class="row">
									<div class="col-md-12">													
											<label for="birthdate">Birthdate</label>							
							  	    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">            
                                            <input type="date" name="HR_DOB" id="HR_DOB" class="form-control input-sm" placeholder="DOB" required>
                                        </div>
                                    </div>
                                </div>    
										
                                                                
								
															
                                 
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
                                            <label for="last_name">Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" name="HR_address" id="HR_address"></textarea>
                                    </div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-2">
									<div class="form-group">
                                            <label for="last_name">City</label>
                                            <input type="text" class="form-control" rows="3" placeholder="City" name="HR_city" id="HR_city">
                                    </div>
									</div>
								</div>
								
                                <div class="row">
									<div class="col-md-2">
									<div class="form-group">
                                            <label for="last_name">State</label>
                                            <input type="text" class="form-control" rows="3" placeholder="State" name="HR_state" id="HR_state">
                                    </div>
									</div>
								</div>
								
                                


																
								
								 <div class="row">

								<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Mobile No</label>
                                            <input type="text" name="HR_mob" id="HR_mob" class="form-control input-sm" placeholder="eg. 9898123456" required >
                                        </div>
									</div>...
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="HR_email" id="HR_email" class="form-control input-sm" placeholder="eg. abc@gmail.com" required >
										</div>
									</div>
									</div>
									<div class="row">
									    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Username</label>
                                            <input type="text" name="HR_username" id="HR_username" class="form-control input-sm" placeholder="UserName" required >
                                        </div>
                                    </div>
									</div>

								
								
								
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
                                        <div class="form-group">
                                            <label for="password">Confirm Password</label>
                                            <input type="password" name="HR_confirm_password"  id="HR_confirm_password" class="form-control input-sm" placeholder="Confirm Password" required >
                                        </div>
                                    </div>
									</div>
                                
											
								
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" name="hr_submit" value="Submit" class="btn btn-primary btn-block" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="reset" name="hr_reset"value="Reset" class="btn btn-default btn-block"/>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
				</div>
				</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
