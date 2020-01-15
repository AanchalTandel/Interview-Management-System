<?php
session_start();
include "connection.php";
?>
<?php
	
				$can_first_name=$_POST['can_first_name'];
				$can_middle_name=$_POST['can_middle_name'];
				$can_last_name=$_POST['can_last_name'];
				$can_gen=$_POST['can_gen'];
				$can_bdate=$_POST['can_bdate'];
				$can_address=$_POST['can_address'];
				$can_mobile_no=$_POST['can_mobile_no'];
				$can_email=$_POST['can_email'];
				$can_hobbie_1=$_POST['can_hobbie_1'];
				$can_hobbie_2=$_POST['can_hobbie_2'];				
			    $can_hobbie_3=$_POST['can_hobbie_3'];
				$can_branch=$_POST['can_branch'];
				$result_10=$_POST['result_10'];
                $result_12=$_POST['result_12'];	
				$can_qualification=$_POST['can_qualification'];
				$diploma_result=$_POST['diploma_result'];
				$degree_result=$_POST['degree_result'];	
				$postd_result=$_POST['postd_result'];
				//$resume=$_POST['resume'];
				//image name
				$resume = $_FILES['resume']['name'];
				
				//Image temp names
				$temp_name1 = $_FILES['resume']['tmp_name'];
				
				//uploading images to its folder
				move_uploaded_file($temp_name1,"admin_img/$resume");
				
				$can_username=$_POST['can_username'];
				$can_password=$_POST['can_password'];
				$can_password_confirm=$_POST['can_password_confirm'];				
				
				
				//$admin_login=$_POST['adm_UserName'];
			//if(isset($_POST['sub']))
				//{
					/*$r=mysql_query("select * from admin where Admin_login='$admin_login'") or die(mysql_error());
	
					if(mysql_num_rows($r)>0)
					{
						
						echo "this id is already exists";
					}
					else
					{*/
					$query = mysql_query("insert into candidate(can_id,can_first_name,can_middle_name,can_last_name,can_gen,can_bdate,can_address,can_mobile_no,can_email,can_hobbie_1,can_hobbie_2,can_hobbie_3,can_branch,result_10,result_12,can_qualification,diploma_result,degree_result,postd_result,resume,can_username,can_password,can_password_confirm,marks)values('','".$can_first_name."','".$can_middle_name."','".$can_last_name."','".$can_gen."','".$can_bdate."','".$can_address."','".$can_mobile_no."','".$can_email."','".$can_hobbie_1."','".$can_hobbie_2."','".$can_hobbie_3."','".$can_branch."','".$result_10."','".$result_12."','".$can_qualification."','".$diploma_result."','".$degree_result."','".$postd_result."','".$resume."','".$can_username."','".$can_password."','".$can_password_confirm."','')") or die(mysql_error());
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