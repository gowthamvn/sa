<?php
  require "app_config.php";

  $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
  or
  die("Error Connection to Database...");
  	
?>