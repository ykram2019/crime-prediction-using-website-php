<html>
<head>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="style.css"> 
	<title>FIR Page</title> 

</head>
<body>
<div class="login-box"> 
			<h1>File FIR</h1> 
			<div class="textbox"> 
<?php
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
		require"db_connect.php";
        // Gather all required data
		$id=$_POST["id"];
		echo($id);
        $name = $conn->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $conn->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $conn->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
       
 
        // Create the SQL query
        $query = "
            INSERT INTO `evidence` (
                `id`,`filename`, `mime`,`data`, `created`
            )
            VALUES (
                '{$id}','{$name}', '{$mime}', '{$data}', NOW()
            )";
 
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
echo '<p>click <a href="search.php">HERE</a> to go back</p>';
?>
</div>
 </div>
 </body>
 </html>
 