
	<?php
    require_once('NaiveBayesClassifier.php');

    $classifier = new NaiveBayesClassifier();
    $murder = Category::$Murder;
	$pp = Category::$PP;
	$vt = Category::$VT;
	$rr = Category::$RR;
	$cc = Category::$CC;
	$et = Category::$ET;
	$details=$_POST["location"]." ".$_POST["period"];
    $category = $classifier -> classify($details);
    echo "
	<div class='container'>
    <div class='pt-5 text-white'>
        <header class='py-5 mt-5'>
            <p class='display-4 lead mb-0'>There is chance of: $category</p>
	</div>
	</div>";
	
	//<h3>There is chance of:</h3><h2>".$category."</h2>";
    
  $sql="SELECT * FROM records where locationofcrime='".$_POST["location"]."' AND periodofcrime='".$_POST["period"]."'";
   include'new1.php';
  

?>