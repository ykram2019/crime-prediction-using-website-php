<html>
<head>
<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="style.css"> 
</head>
<body>
<div class="login-box"> 
<?php
require 'db_connect.php';
$name=$_POST["name"];
$location=$_POST["location"];
$crime=$_POST["crime"];
$period=$_POST["period"];
$gender=$_POST["gender"];
$criminals=$_POST["criminals"];
$time=$_POST["time"];
$description=$_POST["description"];
$sql = "INSERT INTO records (name, gender,locationofcrime, typeofcrime, periodofcrime, timeofcrime,criminalsno,description) 
VALUES ('".$name."', '".$gender."', '".$location."','".$crime."','".$period."','".$time."','".$criminals."','".$description."')";
if(mysqli_query($conn, $sql)){
 
	
    require_once('NaiveBayesClassifier.php');

    $classifier = new NaiveBayesClassifier();
    $murder = Category::$Murder;
	$pp = Category::$PP;
	$vt = Category::$VT;
	$rr = Category::$RR;
	$cc = Category::$CC;
	$et = Category::$ET;

    $classifier -> train(" ".$location." ".$crime." ".$period." ".$description."", $crime);
    echo "<h3>Your FIR is registered Successfully. Inorder to add evidence click Add evidence or Click Go Back.</h3>";

	echo nl2br("<br><a class='button' href='search.php'>Add Evidevce</a>");
	echo nl2br("      <a class='button' href='fir.php'>Go Back</a>");
	?>
	</div>
		
<?php
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



?>
</body>
</html>