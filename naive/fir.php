<!DOCTYPE html> 
<html lang="en"> 

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
<?php
include('headernfooter.php');
?>

	<form action="records.php" method="post"> 
	<div class='container'>
		<div class="login-box"> 
			<h1>File FIR</h1> 

			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="text" placeholder="FullName"
						name="name" value=""> 
			</div> 

			<div class="textbox"> 
				<i class="fa fa-location-arrow" aria-hidden="true"></i> 
				<input type="text" placeholder="Crime Location"
						name="location" value=""> 
			</div> 
			<div class="textbox"> 
				<i class="fa fa-question" aria-hidden="true"></i> 
				Crime type:
						<select name="crime" >
				
				<option value="Murder">Murder</option>
				
				
				<option value="Pick Pocketing">Pick Pocketing</option>
				<option value="Chain Snatching">Chain Snatching</option>
				<option value="Vehicle Theft">Vehicle Theft</option>
				<option value="Eve Teasing">Eve Teasing</option>
				<option value="Road Rage">Road Rage</option>
				
				

				</select>
			</div>
			<div class="textbox"> 
				<i class="fa fa-question" aria-hidden="true"></i> 
				Crime period:
						<select name="period" >
				
				<option value="Morning">Morning</option>
				<option value="Afternoon">Afternoon</option>
				<option value="Evening">Evening</option>
				<option value="Night">Night</option>

				</select>
			</div>
			
			<div class="textbox"> 
				<i class="fa fa-male" aria-hidden="true"></i> 
				Gender:  
				<select name="gender"  >
				
				<option value="Male">Male</option>
				
				<option value="Female">Female</option>
				<option value="Other">Other</option>

				</select>
			</div> 
			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="number" placeholder="No of individuals involved"
						name="criminals" value=""> 
			</div>
			
			<div class="textbox"> 
				<i class="fa fa-clock-o" aria-hidden="true"></i> 
				<input type="time" name="time" > 
			</div>
			<div class="textbox"> 
				<i class="fa fa-edit" aria-hidden="true"></i> 
				<textarea   rows="8" cols="30" name="description"> Enter detailed description</textarea>
			</div>
			
			

			<input class="button" type="submit"
					name="register" value="Place entry"> 
		</div> 
		</div>
	
	</form> 
	<?php
//include('footer.php');
?>

</body> 

</html> 
