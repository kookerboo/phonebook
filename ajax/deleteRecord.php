<?php
	if(isset($_POST['name']) && isset($_POST['ext']))
	{
		// include Database connection file 
		include("../db_connect.php");

		// get values 
		$name = $_POST['name'];
		$extension = $_POST['ext'];

		$sql = "delete from claire.phone where phext = $extension and phname = '$name'";
	  if ($result = odbc_exec($conn, $sql)) {
	    echo "Record Deleted!";
	  } else {
	  	exit(odbc_error($conn));
	  	echo "failed";
	  }
	}
?>