
<?php
	if(isset($_POST['saveExtt']) && isset($_POST['name']) && isset($_POST['extension']) && isset($_POST['desc']))
	{
		// include Database connection file 
		include("../db_connect.php");

		// get values 
		$saveExt = $_POST['saveExt'];
		$name = $_POST['name'];
		$extension = $_POST['extension'];
		$desc = $_POST['desc'];

		$sql = "update claire.phone 
		  set phname = $name, 
		  phext = $extension, 
		  phdesc = $desc 
			where phext = $saveExt";
			
	  if ($result = odbc_exec($conn, $sql)) {
	    echo "1 Record Added!";
	  } else {
	  	exit(odbc_error($conn));
	  	echo "failed";
	  }
	}
?>