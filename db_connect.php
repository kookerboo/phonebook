<?php

$db_host    = "";
$db_user    = "";
$db_pass    = "";
     
$connStr = "Driver={Client Access ODBC Driver (32-bit)};System=10.1.1.10;";
$conn = odbc_connect($connStr, $db_user, $db_pass);

if (odbc_error()) {
    echo "I've found a problem: " . odbc_errormsg($conn);
}

if ($conn == false) {
	die("Connection failed");
}

?>
