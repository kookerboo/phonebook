<?php
	if(isset($_POST['name']) && isset($_POST['extension']) && isset($_POST['desc']))
	{
		// include Database connection file 
		include("../db_connect.php");

		// get values 
		$name = $_POST['name'];
		$extension = $_POST['extension'];
		$desc = $_POST['desc'];

		$sql = "insert into claire.phone(phname, phext, phdesc) values('$name', '$extension', '$desc')";
	  if ($result = odbc_exec($conn, $sql)) {
	    echo "1 Record Added!";
	  } else {
	  	exit(odbc_error($conn));
	  	echo "failed";
	  }
	}
?>