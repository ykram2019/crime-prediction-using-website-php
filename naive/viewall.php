<html>
<head>

<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="style.css"> 
	<title>View all FIRS</title> 

</head>
<body>
	<?php
include('headernfooter.php');
 require 'db_connect.php';
 ?>
<style>
table
{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:200px;

 
}
td,th{
	border: 1px solid #ddd;
  padding: 8px;
}
table tr:hover{background-color:#ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>

<table>
	<tr>
		<th>Victim Name</th>
		<th>Gender</th>
		<th>Location of Crime</th>
		<th>Type of Crime</th>
		<th> Period of Crime</th>
		<th>Time of Crime</th>
		<th>No of individuals involved</th>
		
	</tr>
	<?php
$sql = "SELECT * FROM records";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc())
	  {
    echo "	
			<tr>
						<td>".$row["name"]." </td>
						<td> ".$row["gender"]." </td>
						<td> ".$row["locationofcrime"]." </td>
						<td>".$row["typeofcrime"]."  </td>
						<td>".$row["periodofcrime"]."  </td>
						<td>".$row["timeofcrime"]."</td>
						<td>".$row["criminalsno"]."</td>
						
						
						
			</tr>
	
	";
    }
}

?>


</table>
 





</body>
</html>