<?php
require_once 'class.admin.php'; //include required dbconfig file
$item_per_page = 10;
//sanitize post value
if(isset($_POST["page"])){
	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
	$page_number = 1;
}

$get_records =  new ADMIN();
//get current starting point of records
$position = (($page_number-1) * $item_per_page);



//getting results from database
?>

    <div class="tab-content  col-md-12 page_result">
       <div class="tab-pane fade in active" id="ukelele">            
             <?php
            $results = $get_records->runQuery("SELECT * FROM music_posts WHERE cartegory = 'Ukelele' ORDER BY ID DESC LIMIT $position, $item_per_page");
            $results->execute();
        //     if($results->rowCount()>0)
        // {
            while($row = $results->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <div class="col-md-6 col-sm-6 card">
                    <h3 class="h3"><a href="music_view?song=<?php echo $row['ID']; ?>"><?php echo $row['title']; ?></a></h3>
                    <h6 class="h6"><a href="music_view?song=<?php echo $row['ID']; ?>">see chord...</a></h6>
                    <span><?php echo $row['artist']; ?> <span class="pull-right"><?php
                    date_default_timezone_set('Africa/Nairobi');
                                            $timestamp1 = $row['timer'];
                                            //$today = date("Y-m-d H:i:s");
                                            $passed1 = time() - strtotime($timestamp1);
                                            $days1 = floor($passed1 / 86400);
                                            $passed1 %= 86400;
                                            $hours1 = floor($passed1 / 3600);
                                            $passed1 %= 3600;
                                            $minutes1 = floor($passed1 / 60);
                                            if ($days1>=1) {
                                                echo $hours1;    
                                            ?>&nbsp;Days&nbsp;<?php
                                            } else{
                                            if($hours1>=1){
                                            echo $hours1;    
                                            ?>&nbsp;Hrs&nbsp;<?php
                                                }
                                            echo $minutes1; ?>mins ago
                                            <?php }?> </span></span>
                </div>
                <?php
            }
       // } else { ?>
                        <!-- <p>Nothing here yet...</p> -->
                  <?php  //}
                        ?>            
         </div>
         <div class="tab-pane fade in active" id="pabs">            
             <?php
            $results = $get_records->runQuery("SELECT * FROM music_posts WHERE cartegory = 'Pabs' ORDER BY ID DESC LIMIT $position, $item_per_page");
            $results->execute();
        //     if($results->rowCount()>0)
        // {
            while($row = $results->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <a href="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a>
                 <div class="col-md-6 col-sm-6 card">
                    <h3 class="h3"><a href="music_view?song=<?php echo $row['ID']; ?>"><?php echo $row['title']; ?></a></h3>
                     <h6 class="h6"><a href="music_view?song=<?php echo $row['ID']; ?>">see chord...</a></h6>
                    <span><?php echo $row['artist']; ?> <span class="pull-right"><?php
                    date_default_timezone_set('Africa/Nairobi');
                                            $timestamp1 = $row['timer'];
                                            //$today = date("Y-m-d H:i:s");
                                            $passed1 = time() - strtotime($timestamp1);
                                            $days1 = floor($passed1 / 86400);
                                            $passed1 %= 86400;
                                            $hours1 = floor($passed1 / 3600);
                                            $passed1 %= 3600;
                                            $minutes1 = floor($passed1 / 60);
                                            if ($days1>=1) {
                                                echo $hours1;    
                                            ?>&nbsp;Days&nbsp;<?php
                                            } else{
                                            if($hours1>=1){
                                            echo $hours1;    
                                            ?>&nbsp;Hrs&nbsp;<?php
                                                }
                                            echo $minutes1; ?>mins ago
                                            <?php }?> </span></span>
                </div>
                <?php
            }
       // } else { ?>
                        <!-- <p>Nothing here yet...</p> -->
                  <?php  //}
                        ?>                
         </div>
         <div class="tab-pane fade in active" id="guiter">            
             <?php
            $results = $get_records->runQuery("SELECT * FROM music_posts WHERE cartegory = 'Guiter' ORDER BY ID DESC LIMIT $position, $item_per_page");
            $results->execute();
        //     if($results->rowCount()>0)
        // {
            while($row = $results->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <div class="col-md-6 col-sm-6 card">
                    <h3 class="h3"><a href="music_view?song=<?php echo $row['ID']; ?>"><?php echo $row['title']; ?></a></h3>
                     <h6 class="h6"><a href="music_view?song=<?php echo $row['ID']; ?>">see chord...</a></h6>
                    <span><?php echo $row['artist']; ?> <span class="pull-right"><?php
                    date_default_timezone_set('Africa/Nairobi');
                                            $timestamp1 = $row['timer'];
                                            //$today = date("Y-m-d H:i:s");
                                            $passed1 = time() - strtotime($timestamp1);
                                            $days1 = floor($passed1 / 86400);
                                            $passed1 %= 86400;
                                            $hours1 = floor($passed1 / 3600);
                                            $passed1 %= 3600;
                                            $minutes1 = floor($passed1 / 60);
                                            if ($days1>=1) {
                                                echo $hours1;    
                                            ?>&nbsp;Days&nbsp;<?php
                                            } else{
                                            if($hours1>=1){
                                            echo $hours1;    
                                            ?>&nbsp;Hrs&nbsp;<?php
                                                }
                                            echo $minutes1; ?>mins ago
                                            <?php }?> </span></span>
                </div>
                <?php
            }
       // } else { ?>
                       <!--  <p>Nothing here yet...</p> -->
                  <?php//  }
                        ?>                   
         </div>
         <div class="tab-pane fade in active" id="base">            
             <?php
            $results = $get_records->runQuery("SELECT * FROM music_posts WHERE cartegory = 'Base Guiter' ORDER BY ID DESC LIMIT $position, $item_per_page");
            $results->execute();
        //     if($results->rowCount()>0)
        // {
            while($row = $results->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <div class="col-md-6 col-sm-6 card">
                    <h3 class="h3"><a href="music_view?song=<?php echo $row['ID']; ?>"><?php echo $row['title']; ?></a></h3>
                     <h6 class="h6"><a href="music_view?song=<?php echo $row['ID']; ?>">see chord...</a></h6>
                    <span><?php echo $row['artist']; ?> <span class="pull-right"><?php
                    date_default_timezone_set('Africa/Nairobi');
                                            $timestamp1 = $row['timer'];
                                            //$today = date("Y-m-d H:i:s");
                                            $passed1 = time() - strtotime($timestamp1);
                                            $days1 = floor($passed1 / 86400);
                                            $passed1 %= 86400;
                                            $hours1 = floor($passed1 / 3600);
                                            $passed1 %= 3600;
                                            $minutes1 = floor($passed1 / 60);
                                            if ($days1>=1) {
                                                echo $hours1;    
                                            ?>&nbsp;Days&nbsp;<?php
                                            } else{
                                            if($hours1>=1){
                                            echo $hours1;    
                                            ?>&nbsp;Hrs&nbsp;<?php
                                                }
                                            echo $minutes1; ?>mins ago
                                            <?php }?> </span></span>
                </div>
                <?php
            }
      //  } else { ?>
                        <!-- <p>Nothing here yet...</p> -->
                  <?php//  }
                        ?>                  
         </div>
         <div class="tab-pane fade in active" id="piano">            
             <?php
            $results = $get_records->runQuery("SELECT * FROM music_posts WHERE cartegory = 'Piano' ORDER BY ID DESC LIMIT $position, $item_per_page");
            $results->execute();
        //     if($results->rowCount()>0)
        // {
            while($row = $results->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                 <div class="col-md-6 col-sm-6 card">
                    <h3 class="h3"><a href="music_view?song=<?php echo $row['ID']; ?>"><?php echo $row['title']; ?></a></h3>
                     <h6 class="h6"><a href="music_view?song=<?php echo $row['ID']; ?>">see chord...</a></h6>
                    <span><?php echo $row['artist']; ?> <span class="pull-right"><?php
                    date_default_timezone_set('Africa/Nairobi');
                                            $timestamp1 = $row['timer'];
                                            //$today = date("Y-m-d H:i:s");
                                            $passed1 = time() - strtotime($timestamp1);
                                            $days1 = floor($passed1 / 86400);
                                            $passed1 %= 86400;
                                            $hours1 = floor($passed1 / 3600);
                                            $passed1 %= 3600;
                                            $minutes1 = floor($passed1 / 60);
                                            if ($days1>=1) {
                                                echo $hours1;    
                                            ?>&nbsp;Days&nbsp;<?php
                                            } else{
                                            if($hours1>=1){
                                            echo $hours1;    
                                            ?>&nbsp;Hrs&nbsp;<?php
                                                }
                                            echo $minutes1; ?>mins ago
                                            <?php }?> </span></span>
                </div>
                <?php
            }
       // } else { ?>
                       <!--  <p>Nothing here yet...</p> -->
                  <?php // }
                        ?>                
         </div>
    </div>

