<?php
//echo "<pre>";print_r($GLOBALS);echo "</pre>";
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	
}
else{
	
	header("Location:../admin/login.php?error=invalid user");
}
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reporter panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div>
        <?php include("includes/header.php");?>
        <?php include("includes/sidebar.php");?>
        <div style="background-color:#D8D8D8;height: 1000px;width: 70%;float: left;">
            <h1>Welcome To The Reporter Panel!</h1>
        </div>

    </div>
</body>

</html>
