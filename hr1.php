<?php
session_start();
include "connection.php";
?>
<?php
	
				$HR_first_name=$_POST['HR_first_name'];
				$HR_middle_name=$_POST['HR_middle_name'];
				$HR_last_name=$_POST['HR_last_name'];
				$HR_gender=$_POST['HR_gender'];
				$HR_DOB=$_POST['HR_DOB'];
				$HR_address=$_POST['HR_address'];
				$HR_city=$_POST['HR_city'];
				$HR_state=$_POST['HR_state'];
				$HR_mob=$_POST['HR_mob'];
				$HR_email=$_POST['HR_email'];
				$HR_username=$_POST['HR_username'];
				$HR_password=$_POST['HR_password'];
				$HR_confirm_password=$_POST['HR_confirm_password'];				
				
				
				$query = mysql_query("insert into hr (HR_id,HR_first_name,HR_middle_name,HR_last_name,HR_gender,HR_DOB,HR_address,HR_city,HR_state,HR_mob,HR_email,HR_username,HR_password,HR_confirm_password,HR_status)values('','".$HR_first_name."','".$HR_middle_name."','".$HR_last_name."','".$HR_gender."','".$HR_DOB."','".$HR_address."','".$HR_city."','".$HR_state."','".$HR_mob."','".$HR_email."','".$HR_username."','".$HR_password."','".$HR_confirm_password."','1')") or die(mysql_error());
					if($query)
					{
						header("location: login_hr.php");
					}
					else
					{
						echo "<script> alert('data not inserted successfully..'); </script>";
					}

					//}	
			?>