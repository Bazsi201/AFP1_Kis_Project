<?php

session_start();
$_SESSION['message'] = "All the fields are required.";
header("Location: index.php");
exit(0);

?>