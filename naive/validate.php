<?php 
  
 require 'db_connect.php';
   
function test_input($data) { 
      
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data; 
} 
   
if ($_SERVER["REQUEST_METHOD"]== "POST") { 
      
    $adminname = test_input($_POST["adminname"]); 
    $password = test_input($_POST["password"]); 
   $sql = "SELECT Id FROM admin WHERE adminname = '$adminname' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         header("Location: dashboard.php");
      }else {
        echo "<script language='javascript'>"; 
            echo "alert('WRONG INFORMATION')"; 
            echo "</script>"; 
            die(); 
      }
} 
  
?> 