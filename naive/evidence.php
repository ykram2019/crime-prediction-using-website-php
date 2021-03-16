<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="style.css"> 
	<title>Add Evidence</title> 


</head> 

<body> 
<?php
include('headernfooter.php');
?>
    <form action="add_file.php" method="post" enctype="multipart/form-data">
	<div class="login-box"> 
			<h1>Add Evidence </h1> 
		<div class="textbox"> 
	
	Evidence Id:<input type="number" name="id" value=<?php echo($_POST["id"])?> readonly>
	</div>
		<div class="textbox"> 
        <input type="file" name="uploaded_file" multiple><br>
		</div>
        <input class="button" type="submit" value="Upload file">
		</div>
		
    </form>
	
</body>
</html>