<!DOCTYPE html>
<html>
	<head>
		<title>Phonebook</title>
		
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
     <!--Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <!--Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <!--Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script type="text/JavaScript" src="js/script.js"></script>
		

		<style>
		
		  body {
		  	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;;
		  	margin: 20px;
		  }
		
		  h1 {
		  	color: #4CAF50;
		  }
			table {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
			}
			
			td, th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      tr:nth-child(even) {
      	background-color: #f2f2f2;
      }

      tr:hover {
      	background-color: #ddd;
      }

      th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
      }
      
      #btnCreate {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
      }
			
		</style>
		
	</head>
	
<body>
	<h1>Phonebook</h1>

	<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Create</button>
	<br>
	<br>
	<div class="records_content"></div>
	<div class=""></div>
	
  <!-- Modal - form that pops up to ADD a new record-->
	<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   	      <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
	      </div>
	      <div class="modal-body">
        	<div class="form-group">
        		<label for="name">Name</label>
        		<input type="text" id="name" placeholder="Name" class="form-control" />
      		</div>
      		<div class="form-group">
      	  	<label for="extension">Extension</label>
        		<input type="text" id="extension" placeholder="Extension" class="form-control" />
	    	  </div>
      		<div class="form-group">
      	  	<label for="desc">Description</label>
						<input type="text" id="desc" placeholder="Description" class="form-control" />
    			</div>
  			</div>
	  	  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
				</div>
			</div>
  	</div>
  </div>
  
  <!-- Modal - form that pops up to EDIT a new record-->
	<div class="modal fade" id="edit_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   	      <h4 class="modal-title" id="myModalLabel">Edit Record</h4>
	      </div>
	      <div class="modal-body">
        	<div class="form-group">
        		<label for="name">Name</label>
        		<input type="text" id="editName" placeholder="Name" class="form-control" />
						<input type="hidden" id="saveName" />
      		</div>
      		<div class="form-group">
      	  	<label for="extension">Extension</label>
        		<input type="text" id="editExt" placeholder="Extension" class="form-control" />
						<input type="hidden" id="saveExt" />
	    	  </div>
      		<div class="form-group">
      	  	<label for="desc">Description</label>
						<input type="text" id="editDesc" placeholder="Description" class="form-control" />
						<input type="hidden" id="saveDesc" />
    			</div>
  			</div>
	  	  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" onclick="updateRecord()">Update Record</button>
				</div>
			</div>
  	</div>
  </div>

</body>
</html>