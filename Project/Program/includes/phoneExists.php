<?php

session_start();
$_SESSION['message'] = "A student with this phone is already exists in the database.";
header("Location: index.php");
exit(0);

?>