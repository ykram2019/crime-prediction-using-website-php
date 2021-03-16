<html>

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="style.css"> 
	<title>Naive Bayes</title> 
</head> 


<body>
<?php
include('headernfooter.php');
?>
<form action="main.php" method="post" >



<div class="login-box"> 
			<h2>Enter Crime Details</h2> 

			<div class="textbox"> 
				<i class="fa fa-edit" aria-hidden="true"></i> 
				<input type="text"  name="location" value="" placeholder="Location"> 
				
			</div> 
			<div class="textbox"> 
				<i class="fa fa-edit" aria-hidden="true"></i>  
				<input type="text" name="period" value="" placeholder="period">
			</div> 
			<input class="button" type="submit"
					name="view" value="View"> 
					</div>

<form>
	<?php
include('footer.php');
?>

</body>
</html>