<html>
<head>
<title> Upload File </title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<form method="post" action="upload.php" enctype="multipart/form-data">
	<input type="file" name="doc[]" multiple/><br>
	<input type="submit" name="submit" value="Upload"/>
</form>
<a href="down.php"><button>Download Page</button></a>
</body>
</html>