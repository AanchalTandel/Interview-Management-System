<?php
session_start();
include "connection.php";
?>
<?php
	
				
				$admin_login=$_POST['adm_UserName'];
				$admin_pass=$_POST['adm_password'];
				$admin_fnm=$_POST['adm_first_name'];
				$admin_mnm=$_POST['adm_middle_name'];
				$admin_lnm=$_POST['adm_last_name'];
				$admin_gender=$_POST['adm_gen'];
				$admin_dob=$_POST['adm_date'];
				$admin_address=$_POST['adm_address'];
				$admin_state=$_POST['adm_state'];
				$admin_city=$_POST['adm_city'];
				$admin_mob_no=$_POST['adm_mobile_no'];
				$admin_email=$_POST['adm_email'];
				
				
				//image name
				$adm_pic = $_FILES['adm_pic']['name'];
				
				//Image temp names
				$temp_name1 = $_FILES['adm_pic']['tmp_name'];
				
				//uploading images to its folder
				move_uploaded_file($temp_name1,"admin_img/$adm_pic");
				
				
				
				
				
				
				
				
				
				
				
				//if(isset($_POST['sub']))
				//{
					/*$r=mysql_query("select * from admin where Admin_login='$admin_login'") or die(mysql_error());
	
					if(mysql_num_rows($r)>0)
					{
						
						echo "this id is already exists";
					}
					else
					{*/
					$query = mysql_query("insert into admin(Admin_id,Candidate_id,Admin_login,Admin_pass,Admin_fnm,Admin_mnm,Admin_lnm,Admin_gender,Admin_dob,Admin_address,Admin_state,Admin_city,Admin_mob_no,Admin_email,Admin_status,Admin_img) values('','','".$admin_login."','".$admin_pass."','".$admin_fnm."','".$admin_mnm."','".$admin_lnm."','".$admin_gender."','".$admin_dob."','".$admin_address."','".$admin_state."','".$admin_city."','".$admin_mob_no."','".$admin_email."','1','".$adm_pic."')") or die(mysql_error());
					if($query)
					{
						header("location: login1.php");
					}
					else
					{
						echo "<script> alert('data not inserted successfully..'); </script>";
					}
				//}	
?>