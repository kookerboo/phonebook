<?php
	// include Database connection file 
	include("../db_connect.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>Extension</th>
							<th>Name</th>
							<th>Description</th>
							<th></th>
						</tr>';

  $sql = "select * from claire.phone";

	if ($result = odbc_exec($conn, $sql)) {
	
		while (odbc_fetch_row($result)) {
			$ext = odbc_result($result, "phext");
			$name = trim(odbc_result($result, "phname")).' '.trim(odbc_result($result, "phlast"));
			$desc = trim(odbc_result($result, "phdesc"));
			
			$data .= '<tr>
			  <td>' .$ext. '</td>
			  <td>' .$name. '</td>
			  <td>' .$desc. '</td>
			  <td> 
			    <button onclick="setUpdateBox(\''.$name.'\','.$ext.',\''.$desc.'\');" class="btn btn-warning" data-toggle="modal" data-target="#edit_record_modal">Edit</button>
			    <!--<button class="btn btn-warning" data-toggle="modal" data-target="#edit_record_modal">Edit</button>-->
			    <button onclick="deleteRecord(\''.$name.'\','.$ext.');" class="btn btn-danger">Delete</button>
			  </td>
			  </tr>';
		}
	  $data .= "</table>";
		
	} else {
		$data .= '<tr><td colspan="4">Records not found!</td></tr>';
	}

  $data .= '</table>';

  echo $data;
  odbc_close($conn);
  
?>




