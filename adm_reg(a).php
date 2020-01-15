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
                            <h3 class="panel-title">Admin Registration form</h3>
                        </div>
                        <div class="panel-body">
						
                
				            <form  method="POST" name="adm_reg" enctype="multipart/form-data" action="areg1.php">
								
								
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="adm_first_name" id="adm_first_name" class="form-control input-sm" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" name="adm_middle_name" id="adm_middle_name" class="form-control input-sm" placeholder="Middle Name" required >
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="adm_last_name" id="adm_last_name" class="form-control input-sm" placeholder="Last Name" required >
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
											  <input type="radio" name="adm_gen" id="adm_gen" value="M" checked="checked">
											  <label for="gen" >Male</label>
											  <input type="radio" name="adm_gen" id="adm_gen" value="F">
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
                                            <input type="date" name="adm_date" id="adm_date" class="form-control input-sm" placeholder="DOB" required>
                                        </div>
                                    </div>
                                </div>    
								
							
                                
                                 
									  
								
							
                                 
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
                                            <label for="last_name">Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" name="adm_address" id="adm_address"></textarea>
                                    </div>
									</div>
								</div>
								
                                <div class="row">
									<div class="col-md-2">
									<div class="form-group">
                                            <label for="last_name">State</label>
                                            <input type="text" class="form-control" rows="3" placeholder="State" name="adm_state" id="adm_state">
                                    </div>
									</div>
								</div>
								
                                <div class="row">
									<div class="col-md-2">
									<div class="form-group">
                                            <label for="last_name">City</label>
                                            <input type="text" class="form-control" rows="3" placeholder="City" name="adm_city" id="adm_city">
                                    </div>
									</div>
								</div>
								


																
								
								 <div class="row">

								<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Mobile No</label>
                                            <input type="text" name="adm_mobile_no" id="adm_mobile_no" class="form-control input-sm" placeholder="eg. 9898123456" required >
                                        </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="adm_email" id="adm_email" class="form-control input-sm" placeholder="eg. abc@gmail.com" required >
										</div>
									</div>
									</div>
									<div class="row">
									    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Username</label>
                                            <input type="text" name="adm_UserName" id="adm_UserName" class="form-control input-sm" placeholder="UserName" required >
                                        </div>
                                    </div>
									</div>

								
								
								
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="adm_password" id="adm_password" class="form-control input-sm" placeholder="Password" required >
                                        </div>
                                    </div>
                                    </div>
									
                                     <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Confirm Password</label>
                                            <input type="password" name="adm_password_confirmation"  id="adm_password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required >
                                        </div>
                                    </div>
									</div>
									
                                 			<p>
								 		      <label for="" >Admin Picture</label>
											  <input type="file" name="adm_pic" id="adm_pic">
											 
											  
                                            </p>   
								
											
								
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" name="sub" value="Submit" class="btn btn-primary btn-block"  />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="reset" name="adm_reset" value="Reset" class="btn btn-default btn-block"/>
                                    </div>
                                </div>


                            </form>
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
    <!--<script src="js/jqBootstrapValidation.js"></script>-->
    <!--<script src="js/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
