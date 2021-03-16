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
 require 'db_connect.php';
 
?>






<div class="login-box"> 
			<h2>DASHBOARD</h2> 

			<div class="textbox"> 
				<?php 
				
				$result = mysqli_query($conn,"SELECT * FROM records");
$rows = mysqli_num_rows($result);
echo "Total FIR Registered:" . $rows . "";
				?>
			</div> 
			<h2>Types of Crime Reported</h2> 
			
			<div class="textbox"> 
				<?php 
				
				$result = mysqli_query($conn,"SELECT * FROM records WHERE typeofcrime='Murder'");
$rows = mysqli_num_rows($result);
echo "Murder:" . $rows . "";
				?>
				</div>
				<div class="textbox"> 
				<?php 
				
				$result = mysqli_query($conn,"SELECT * FROM records WHERE typeofcrime='Pick Pocketing'");
$rows = mysqli_num_rows($result);
echo "Pick Pocketing:" . $rows . "";
				?>
					</div>
				<div class="textbox"> 
				<?php 
				
				$result = mysqli_query($conn,"SELECT * FROM records WHERE typeofcrime='Chain Snatching'");
$rows = mysqli_num_rows($result);
echo "Chain Snatching:" . $rows . "";
				?>
					</div>
				<div class="textbox"> 
				<?php 
				
				$result = mysqli_query($conn,"SELECT * FROM records WHERE typeofcrime='Vehicle Theft'");
$rows = mysqli_num_rows($result);
echo "vehicle Theft:" . $rows . "";
				?>
					</div>
				<div class="textbox"> 
				<?php 
				
				$result = mysqli_query($conn,"SELECT * FROM records WHERE typeofcrime='Road Rage'");
$rows = mysqli_num_rows($result);
echo "Road Rage:" . $rows . "";
				?>
					</div>
				<div class="textbox"> 
				<?php 
				
				$result = mysqli_query($conn,"SELECT * FROM records WHERE typeofcrime='Eve Teasing'");
$rows = mysqli_num_rows($result);
echo "Eve Teasing:" . $rows . "";
				?>
					</div>
					</div>


	<?php
include('footer.php');
?>

</body>
</html>