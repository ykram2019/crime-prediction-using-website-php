
	<?php
	require'db_connect.php';
	
    require_once('NaiveBayesClassifier.php');

    $classifier = new NaiveBayesClassifier();
    $murder = Category::$Murder;
	$pp = Category::$PP;
	$vt = Category::$VT;
	$rr = Category::$RR;
	$cc = Category::$CC;
	$et = Category::$ET;
	$sql="SELECT * from trainingset";
	if ($result = $conn->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
						 $classifier -> train($row["document"], $row["category"]);
					}
				echo"Trained Successfully";
	}
	else
	{
		echo"Error";
	}
	?>;
	