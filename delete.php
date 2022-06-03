1
2
3
4
5
6
7
<?php
 
// Built-in PHP function to delete file
unlink($_GET["name"]);
 
// Redirecting back
header("Location: " . $_SERVER["HTTP_REFERER"]);