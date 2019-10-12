<?php
$errors = array(); 
	
	// initializing variables
	$password1 = "";
	
	

	// connect to the database
	include('para_dbconnect.php');

	// CREATE CLASS
	if (isset($_POST['createrec'])) {
		
		$type = mysqli_real_escape_string($db, $_POST['r_type']);
		$des = mysqli_real_escape_string($db, $_POST['r_des']);
		$day = mysqli_real_escape_string($db, $_POST['r_day']);
		
	    	

		  

		  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   
    $query = mysqli_query($db, "INSERT INTO record (record_type, record_description, record_date) VALUES ('$type', '$des', '$day')");
    mysqli_query($db, $query);
    header('location: classpage.php');
  }

  		
	}
?>