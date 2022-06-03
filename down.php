<html>
<head>
<title>Download</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<a href="index.php"><button>Go back</button></a>
<?php
 
// This will return all files in that folder
$files = scandir("Uploads");
 
// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <!-- Displaying file name !-->
        <?php echo "<div class=\"file\">$files[$a]</div>"; ?>
 
        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
<br>
        <a href="Uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            <button>
              Download
            </button>
        </a>

<a href="delete.php?name=Uploads/<?php echo $files[$a]; ?>">
    <button style="color: red;">
      Delete
    </button>
</a>
    </p>
    <?php
}
?>
</body>
</html>