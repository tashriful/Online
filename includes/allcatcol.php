<div class="col-sm-3" style="background-color:#D8D8D8;margin-right:0%;margin-top: -2.4%;border:1px solid white;">
			<?php
	require("fun.php");

include("includes/database.php");
loadFromMySQL("select * from news where category='Bangladesh' LIMIT 1");

if($data!=0){
 foreach($data as $v){
 ?>
				<h3><?php echo $v['category'];?></h3>
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
                </h4>
                <img style="width:150px;height:100px" src="admin/<?php echo $v['photo'];?>">
				<?php
                $string1 =$v['main_news'];
                                         $maxLength =90;
                                         if (strlen($string1) > $maxLength) 
                                         {
                                           $stringCut = substr($string1, 0, $maxLength);
                                           $string1 = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
										  <div>
                <p>
                    <?php echo $string1;?>...
				
				</p></div>
				
               
                

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
			<?php
			include("includes/database.php");
$sql="select * from news where category='International' LIMIT 1";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){
 foreach($data as $v){
 ?>
				<h3><?php echo $v['category'];?></h3>
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
                </h4>
                <img style="width:150px;height:100px" src="admin/<?php echo $v['photo'];?>">
				<?php
                $string1 =$v['main_news'];
                                         $maxLength =90;
                                         if (strlen($string1) > $maxLength) 
                                         {
                                           $stringCut = substr($string1, 0, $maxLength);
                                           $string1 = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
										  <div>
                <p>
                    <?php echo $string1;?>...
				
				</p></div>
				
               
                

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
				
				<?php
			include("includes/database.php");
$sql="select * from news where category='Science' LIMIT 1";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){
 foreach($data as $v){
 ?>
				<h3><?php echo $v['category'];?></h3>
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
                </h4>
                <img style="width:150px;height:100px" src="admin/<?php echo $v['photo'];?>">
				<?php
                $string1 =$v['main_news'];
                                         $maxLength =90;
                                         if (strlen($string1) > $maxLength) 
                                         {
                                           $stringCut = substr($string1, 0, $maxLength);
                                           $string1 = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
										  <div>
                <p>
                    <?php echo $string1;?>...
				
				</p></div>
				
               
                

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
				
				<?php
			include("includes/database.php");
$sql="select * from news where category='Economy' LIMIT 1";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){
 foreach($data as $v){
 ?>
				<h3><?php echo $v['category'];?></h3>
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
                </h4>
                <img style="width:150px;height:100px" src="admin/<?php echo $v['photo'];?>">
				<?php
                $string1 =$v['main_news'];
                                         $maxLength =90;
                                         if (strlen($string1) > $maxLength) 
                                         {
                                           $stringCut = substr($string1, 0, $maxLength);
                                           $string1 = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
										  <div>
                <p>
                    <?php echo $string1;?>...
				
				</p></div>
				
               
                

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
				
				
				<?php
			include("includes/database.php");
$sql="select * from news where category='Sports' LIMIT 1";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){
 foreach($data as $v){
 ?>
				<h3><?php echo $v['category'];?></h3>
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
                </h4>
                <img style="width:150px;height:100px" src="admin/<?php echo $v['photo'];?>">
				<?php
                $string1 =$v['main_news'];
                                         $maxLength =90;
                                         if (strlen($string1) > $maxLength) 
                                         {
                                           $stringCut = substr($string1, 0, $maxLength);
                                           $string1 = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
										  <div>
                <p>
                    <?php echo $string1;?>...
				
				</p></div>
				
               
                

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
				
				<?php
			include("includes/database.php");
$sql="select * from news where category='Entertainment' LIMIT 1";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){
 foreach($data as $v){
 ?>
				<h3><?php echo $v['category'];?></h3>
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
                </h4>
                <img style="width:150px;height:100px" src="admin/<?php echo $v['photo'];?>">
				<?php
                $string1 =$v['main_news'];
                                         $maxLength =90;
                                         if (strlen($string1) > $maxLength) 
                                         {
                                           $stringCut = substr($string1, 0, $maxLength);
                                           $string1 = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
										  <div>
                <p>
                    <?php echo $string1;?>...
				
				</p></div>
				
               
                

                <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
			
			</div>