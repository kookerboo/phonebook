$(document).ready(function() {
	readRecords();
});

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}



// Add Record 
function addRecord() {
    // get values
    var name = $("#name").val();
    var extension = $("#extension").val();
    var desc = $("#desc").val();

    // Add record
    $.post("ajax/addRecord.php", {
        name: name,
        extension: extension,
        desc: desc
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#name").val("");
        $("#extension").val("");
        $("#desc").val("");
    });
}



function setUpdateBox(name, ext, desc) {
  //$("#editName").val() = name;
  $("#editName").val(name);
  $("#editExt").val(ext);
  $("#editDesc").val(desc);
  //save current extension for update stmt
  $("#saveExt").val(ext);
}


function updateRecord() {

    //hey, someone has that extension, are you sure you want to continue? (ok, cancel)
	  // edit record
  $.post("ajax/editRecord.php", {
      saveExtt: saveExt,
      name: name,
      extension: extension,
      desc: desc
  }, function (data, status) {
      //close the popup
      $("#edit_record_modal").modal("hide");
      //read records again
      readRecords();
      
      // clear fields from the popup
      $("#editName").val("");
      $("#editExt").val("");
      $("#editDesc").val("");
  });
}




function deleteRecord(name, ext) {
	if (confirm("Are you sure you want to delete?")){
		$.post("ajax/deleteRecord.php", {
			name: name,
			ext: ext
		}, function (data, status) {
			
			readRecords();
	  	});
	}
}