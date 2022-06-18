<?php
$page = $_SERVER['PHP_SELF'];
 $sec = "10";
 header("Refresh: $sec; url=$page");
 echo "Watch the page reload itself in 10 second!";
 ?>