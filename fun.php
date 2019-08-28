<?php

function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","newspaper");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$data[]=$row;
	}
	//return $arr;
}

function getExt($filename){
	//abc.jpg
	$a=explode(".",$filename);
	return $a[1];
}


function loadFromFile(){
	global $cred;
	$file=fopen("information.txt","r")or die("error");
	while($line=fgets($file)){
		$line=trim($line);
		$cr=explode("-",$line);
		$dar=array("fname"=>$cr[0],"lname"=>$cr[1],"email"=>$cr[2], "uname"=>$cr[3],"pass"=>$cr[4],"cpass"=>$cr[5]);
		$cred[]=$dar;
	}
	
}
function loadFromxml(){
	global $cred;
	$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");
	foreach($xml as $st){
		$dar=array();
		$dar["fname"]=(string)$st->fname;
		$dar["lname"]=(string)$st->lname;
		$dar["email"]=(string)$st->email;
		$dar["uname"]=(string)$st->uname;
		$dar["pass"]=(string)$st->pass;
		$dar["cpass"]=(string)$st->cpass;


		$cred[]=$dar;
	}
}


function insertSql(){


}

?>
