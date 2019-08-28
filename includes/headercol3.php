<div class="col-sm-3" style="background-color:#E8E8E8;margin-right:0%;margin-top: -2.4%;">
                <?php
	//require("fun.php");

include("includes/database.php");
                   $sql="select * from news LIMIT 4,2";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}
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