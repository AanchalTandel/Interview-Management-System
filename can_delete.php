<?php
		include "connection.php";
		mysql_query("delete from candidate where can_id=$_GET[can]") or die(mysql_error());
		header('location:candidate.php');
?>