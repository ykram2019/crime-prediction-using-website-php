<?php
// Make sure an ID was passed
echo nl2br($_GET['id']);
echo"<br>";
if(isset($_GET['id'])) {
// Get the ID
    $id = intval($_GET['id']);
	//$id=intval('2');
    // Make sure the ID is in fact a valid ID
    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
        // Connect to the database
       require'db_connect.php';
 
        // Fetch the file information
        $query = "
            SELECT `mime`, `filename`, `data`
            FROM `evidence`
            WHERE `id` = {$id}";
        $result = $conn->query($query);
 
        if($result) {
            // Make sure the result is valid
            if($result->num_rows == 1) {
            // Get the row
                $row = mysqli_fetch_assoc($result);
 
                // Print headers
                header("Content-Type: ". $row['mime']);
              
               header("Content-Disposition: attachment; filename=". $row['name']);
 
                // Print data
                echo $row['data'];
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
 
            // Free the mysqli resources
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$conn->error}</pre>";
        }
        
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>