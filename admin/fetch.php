<?php
$data=array();
require("lib.php");

$t=0;
$a=$_REQUEST["uname"];
//echo $a;

$sql="select * from admin where username='".$_REQUEST["uname"]."'";
//echo $sql;
//loadFromText();
loadFromMySQL($sql);
foreach($data as $v){
	
	
	
	if($a==$v["username"]){
		echo "username exists";
		$t=1;
		//$_SESSION["flag"]="success";
		//header("Location:home.php");
		break;
	}

}
if($t==0){
	echo "not exist";
}
?>