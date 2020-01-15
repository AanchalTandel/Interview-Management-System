<?php
session_start();
include "connection.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

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
			  <div id="page-wrapper">

            <div class="container-fluid">
			<div class="row centered-form">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-primary">
									<div class="panel-heading">
								<button style="color:#fed136" type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location='recent_add.php'"><span aria-hidden="true">&times;</span></button>
									<h4 class="panel-title" id="myModalLabel">JOB <?php echo $_GET['job_title'];?> info</h4>
							</div>
							<div class="panel-body">
							<form method="post" >
								<table border="0" cellpadding="10" cellspacing="10" >
									<div class="row">
									<div class="form-group">
										<tr>
											<td><label class="label-job">Designation:</label></td>
												<td><label class="text-muted"> <?php echo $_GET['job_title']; ?></label></td>
<!--            							<input type="text" class="form-control" id="recipient-name">  job title from data base -->
											</tr>
									</div>
									</div>
		  
									<div class="row">
									<div class="form-group">
									<tr>
										<td><label class="label-job">Job Details:</label></td>
										<td><label class="text-muted"> <?php echo $_GET['job_desc']; ?></label></td>
										<!-- <textarea class="form-control" id="message-text"></textarea> <!-- job description from data base -->
          
									</tr>
									</div>
									</div>
								</table>
							</form>
							</div>
						</div>
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