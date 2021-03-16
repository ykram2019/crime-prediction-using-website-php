<!DOCTYPE html>
<head>
    <title>MySQL file upload example</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<?php 
//echo ($_POST["evidenceid"]);
?>
    <form action="update_file.php" method="post" enctype="multipart/form-data">
	<input type="number" name="id" value=<?php echo($_GET["id"])?>>
        <input type="file" name="uploaded_file" multiple><br>
        <input type="submit" value="Upload file">
    </form>
</body>
</html>