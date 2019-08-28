<?php
session_start();
unset($_SESSION["flag"]);
session_destroy();
header("Location:../admin/login.php");
?>
