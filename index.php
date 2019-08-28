<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oniline News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/1st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php //include("includes/header.php");
	include("includes/menu.php");
	include("includes/datetimebar.php");
	?>




    <div class="container">
        <div class="row">
            <div class="col-sm-3" style="background-color:#E8E8E8;margin-right:0%;margin-top: -2.4%;">
                <?php
	require("fun.php");

include("includes/database.php");
loadFromMySQL("select * from news LIMIT 2");

if($data!=0){
 foreach($data as $v){
 ?>
                <br><a href="singlenews.php?id=<?php echo $v['news_id'];?>">
                    <img style="width:250px;height:150px" src="admin/<?php echo $v['photo'];?>"></a>
                <br>
                <?php
                $string =$v['title'];
                                         $maxLength =50;
                                         if (strlen($string) > $maxLength) 
                                         {
                                           $stringCut = substr($string, 0, $maxLength);
                                           $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
                <h4>
                    <a href="singlenews.php?id=<?php echo $v['news_id'];?>">
                        <?php echo $string;?>...</a>
                </h4><br>

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
            </div>

            <?php include("includes/headercol2.php");
            include("includes/headercol3.php");
            include("includes/headercol4.php");
            ?>


        </div>


        <div class="row">
            <div style="background-color: #989898;height:10%;width:100%;margin-top:1%;" class="col-sm-12">
                <span><br><br></span>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-4" style="background-color:#E8E8E8;margin-right:0%;margin-top: 1%;">
                <?php
	

include("includes/database.php");
                   $sql="select * from news where category='Economy' order by news_id  limit 2";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){?>
                <h3 style="margin-top:5%;"><a href="categorynews.php?category=Economoy&&lim=0">Economy</a></h3>
                <?php
 foreach($data as $v){
 ?>

                <br><img style="width:350px;height:180px" src="admin/<?php echo $v['photo'];?>">
                <br>
                <?php
                $string =$v['title'];
                                         $maxLength =50;
                                         if (strlen($string) > $maxLength) 
                                         {
                                           $stringCut = substr($string, 0, $maxLength);
                                           $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
                <h4>
                    <a href="singlenews.php?id=<?php echo $v['news_id'];?>">
                        <?php echo $string;?>...</a>
                    <?php //echo $string;?>...
                </h4><br>

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
            </div>

            <?php //include("includes/headercol2.php");
            include("includes/midcol2.php");
            include("includes/midcol3.php");
            include("includes/midcol4.php");
            include("includes/midcol5.php");
            include("includes/midcol6.php");
            ?>

        </div>
    </div>





</body>

</html>
