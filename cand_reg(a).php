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
	
	
<script type="text/javascript">
function onSubmit(thisForm) {
				      if(!onFirstname())
					  return false;
		        if(!onMiddlename())
				return false;
		        if(!onLastname())
				return false;
		        if(!onEmail())
				return false;
		        if(!onMobileno())
				return false;
				if(!onUserName())
				return false;
		        if(!onPassword())
				return false;
		        if(!onCPassword())
				return false;
				
		    }

				function onFirstname()
				{
				var name=/^[a-zA-Z]+$/;
				var fname=document.getElementById('can_first_name');
					if(fname.value.length==0 || !fname.value.match(name))
						{
							alert("Enter proper first name with only alphabets!");
							fname.focus();
							return false;
					}
					return true;
				}
				
				function onMiddlename()
				{
					var name=/^[a-zA-Z]+$/;
					var mname=document.getElementById('can_middle_name');
					if(mname.value.length==0 || !mname.value.match(name))
						{
							alert("Enter proper middle name with only alphabets!");
							mname.focus();	
							return false
						}				
						return true;
				}
				function onLastname()
				{
					var name=/^[a-zA-Z]+$/;
					var lname=document.getElementById('can_last_name');
					if(lname.value.length==0 || !lname.value.match(name))
						{
							alert("Enter proper last name with only alphabets!");
							lname.focus();	
							return false;
						}		
						return true;
				}
				/*function onCgpa()
				{
					var jcgpa=document.getElementById('cgpa');
					
					if(jcgpa.value<25 )
					{
						window.location = "s_msg.html"; 
						
						return false;
					}
					if(jcgpa.value>100)
					{
						alert("enter proper marks");
						jcgpa.focus();
						return false;
					}
					return true;
				}*/
				function onMobileno()
				{
					var num=/^[0-9]{10}$/;	
					var mobile=document.getElementById('can_mobile_no');
					if(!mobile.value.match(num))
					{
						alert("Enter proper Mobile no of 10 digits!"); 
						mobile.focus();
						return false;
					}
					return true;
				}
				function onEmail()
				{
					var email1=document.getElementById('can_email');
					var emailexp=/^[\w\-\_\.\+]+\@([a-zA-Z0-9\.]+)+\.[a-zA-Z]+$/;	
					
					if(!email1.value.match(emailexp))
					{
						alert("Enter proper Email Id!");
							email1.focus();
							return false;
					}
					return true;
				}
				function onUserName()
				{
				
					var name=/^[a-zA-Z]+$/;
					var uname=document.getElementById('can_userName');
					if(uname.value.length==0 || !uname.value.match(name))
						{
							alert("Enter proper user name with only alphabets!");
							uname.focus();	
							return false;
				
						}
						return true;
					}
				
				function onPassword()
				{
					var pass=document.getElementById('can_password');
					var pass1=pass.value.length;
					var pasexp=/^([0-9]+[a-zA-Z]+|[a-zA-Z]+[0-9]+)[0-9a-zA-Z]*$/;	
					
					if(!pass.value.match(pasexp))
					{
						alert("Enter proper Password with alphabets and numbers!");
							pass.focus();
							return false;
					}
					if(pass1<6)
					{	
						alert("Lenght should be atlist 6");
						pass.focus();
						return false;
					}
					return true;
				}
				function onCPassword()
				{
					var pass=document.getElementById('can_password');
					var cpass=document.getElementById('can_password_confirm');
					
					
					if(!cpass.value.match(pass.value))
					{
						alert("Password does not match!");
							cpass.focus();
							return false;
					}
					return true;
				}
		</script>

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
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
						 <li>
                        <a class="page-scroll" href="index.html#joinus">Join Us</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="index.html#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contact</a>
                    </li>
				
                </ul>
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
                            <h3 class="panel-title">Registration</h3>
                        </div>
                        <div class="panel-body">
						
                
				            <form method="POST" name="can_reg" action="can1.php" enctype="multipart/form-data" onSubmit="return onSubmit(can_reg)"> 
								
								
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="can_first_name" id="can_first_name" class="form-control input-sm" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" name="can_middle_name" id="can_middle_name" class="form-control input-sm" placeholder="Middle Name" required >
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="can_last_name" id="can_last_name" class="form-control input-sm" placeholder="Last Name" required >
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
											  <input type="radio" name="can_gen" id="can_gen" value="Male" checked="checked">
											  <label for="gen" >Male</label>
											  <input type="radio" name="can_gen" id="can_gen1" value="Female">
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
                                            <input type="date" name="can_bdate" id="can_bdate" class="form-control input-sm" placeholder="DOB" required>
                                        </div>
                                    </div>
                                </div>    
								
							
                                
                                 
									  
								
							
                                 
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
                                            <label for="last_name">Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" name="can_address" id="can_address"></textarea>
                                    </div>
									</div>
								</div>
								
								
								
										
								<div class="row">				
								<div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Mobile No</label>
                                            <input type="text" name="can_mobile_no" id="can_mobile_no" class="form-control input-sm" placeholder="eg. 9898123456" required >
                                        </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="can_email" name="can_email" id="can_email" class="form-control input-sm" placeholder="eg. abc@gmail.com" required >
										</div>
									</div>
									</div>

                                                                                                    

                                 <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Hobbies">Hobbie 1</label>
                                            <input type="text" name="can_hobbie_1" id="can_hobbie_1" class="form-control input-sm" placeholder="Hobbies" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="hobbies_2">Hobbie 2</label>
                                            <input type="text" name="can_hobbie_2" id="can_hobbie_2" class="form-control input-sm" placeholder="Hobbies">
                                        </div>
                                    </div>
									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="hobbies_3">Hobbie 3</label>
                                            <input type="text" name="can_hobbie_3" id="can_hobbie_3" class="form-control input-sm" placeholder="Hobbies">
                                        </div>
                                    </div>
                            </div>    
								
                                <div class="row">
										<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Branch</label>
											<select class="form-control" name="can_branch" id="can_branch">
                                                     <option value="-1">None</option>
                                                     <option value="Computer">Computer</option>
                                                     <option value="Electrical">Electrical</option>
                                                     <option value="EC">EC</option>

												</select>
	

										
                                        </div>
										</div>
										<div class="col-md-12"></div>
										<div class="col-md-4">
										<div class="form-group">
											<label for="10_result">10th Result</label>
										
											<input type="text" name="result_10" id="result_10" class="form-control input-sm" placeholder="10th Result" required>
											
											</div>
									</div>
									
									
								
                                    <div class="col-md-12"></div>
										<div class="col-md-4">
										<div class="form-group">
											<label for="12_result">12th Result</label>
											<input type="text" name="result_12" id="result_12" class="form-control input-sm" placeholder="12th Result" required
											>
										</div>
									</div>
                                    </div>
								
                                <div class="row">
										<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="qualification">Qualification</label>
												<select class="form-control" name="can_qualification" id="can_qualification">
                                                     <option value="-1">None</option>
                                                     <option value="Diploma">Diploma</option>
                                                     <option value="B.E/B.Tech">B.E/B.Tech</option>
                                                     <option value="M.E/M.Tech">M.E/M.Tech</option>

												</select>
                                            </div>
                                            </div>
                                    </div>
									
                                 <div class="row">
                                  <div class="col-md-12"></div>
										<div class="col-md-4">
										<div class="form-group">
											<label for="diploma_result">Diploma Result</label>
											<input type="text" name="diploma_result" id="diploma_result" class="form-control input-sm" placeholder="diploma Result" required
											>
										</div>
									</div>
                                    </div>
                                    

                        <div class="row">
                          <div class="col-md-12"></div>
										<div class="col-md-4">
										<div class="form-group">
											<label for="degree_result">Degree Result</label>
											<input type="text" name="degree_result" id="degree_result" class="form-control input-sm" placeholder="degree Result" required
											>
										</div>
									</div>
                                    </div>
                       

                     <div class="row">
                          <div class="col-md-12"></div>
										<div class="col-md-4">
										<div class="form-group">
											<label for="postd_result">Post Degree Result</label>
											<input type="text" name="postd_result" id="postd_result" class="form-control input-sm" placeholder="post degree Result" required
											>
										</div>
									</div>
                                    
                   <div class="row"></div>
								<div class="col-md-12"></div>
										<div class="col-md-4">
										<div class="form-group">
											<label for="resume">Resume :</label>
											<input type="file" name="resume" id="resume"  required>
											
										</div>
									</div>
									
								
								
                                                

									<div class="row"></div>
									    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Username</label>
                                            <input type="text" name="can_username" id="can_username" class="form-control input-sm" placeholder="UserName" required >
                                        
                                    </div>
									</div>

								
								
								<div class="row"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="can_password" id="can_password" class="form-control input-sm" placeholder="Password" required >
                                        
                                    </div>
                                    </div>
									
                                     <div class="row"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Confirm Password</label>
                                            <input type="password" name="can_password_confirm"  id="can_password_confirm" class="form-control input-sm" placeholder="Confirm Password" required >
                                        
                                    </div>
									</div>
                                
											
								
                                <div class="row"></div>
                                    <div class="col-md-6">
                                      <input type="submit" name="can_submit" value="Submit" class="btn btn-primary btn-block" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="reset" value="Reset" class="btn btn-default btn-block"/>
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
