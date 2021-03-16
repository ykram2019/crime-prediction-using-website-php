<?php
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
		require'db_connect.php';
        // Gather all required data
		$id=$conn->real_escape_string($_POST["id"]);
		echo($id);
        $name = $conn->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $conn->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $conn->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
       
 
        // Create the SQL query
        //$query = " UPDATE evidence SET filename= ($name),mime=($mime),data=($data),created=NOW() 
			//WHERE id = '{$id}";
			
			$query="UPDATE evidence SET filename=$name, mime=$mime,data=$data,created=NOW() WHERE id=$id";
 
        // Execute the query
        $result = mysqli_query($conn,$query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$conn->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
}
 
// Echo a link back to the main page
echo '<p>Click <a href="index.php">here</a> to go back</p>';
?>
 
 