<?php
include("class.admin.php");

$music_home = new ADMIN();

$results = $music_home->runQuery("SELECT COUNT(*) FROM music_posts");
$results->execute();
$get_total_rows = $results->fetch();
$item_per_page =4;
//breaking total records into pages
$pages = ceil($get_total_rows[0]/$item_per_page);	


?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="#SSS" rel="stylesheet" type="text/css" />
		 <link href="css/style.css" rel="stylesheet">
		
		 <link rel="stylesheet" type="text/css" href="css/owl.css">

		 <link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		 <link href="font/css/font-awesome.css" rel="stylesheet" />
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		 <!-- <link rel="shortcut icon" href="images/asawa.jpg"> -->
	
		<title>Music | Music</title>
		<script src="js/jquery2.js" type="text/javascript"></script>     

		<script type="text/javascript" src="js/jquery.bootpag.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$("#results").load("get_records.php");  //initial page number to load
			$(".paging_link").bootpag({
			   total: <?php echo $pages; ?>
			}).on("page", function(e, num){
				e.preventDefault();
				//$("#results").prepend('<div class="loading"><img src="ajax-loader.gif" /> Loading...</div>');
				$("#results").load("get_records.php", {'page':num});
			});

		});
		</script>

</head>
<body>

<nav class="navbar navbar-default  ">
		<div class="container  ">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h3 class="h3" style="color: #fff;">Chordit</h3>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="index">Home</a></li>
					<li  class="active"><a href="music">Music Chord</a></li>
					<li><a href="contact">Contact</a></li>
					<li><a href="about">About</a></li>
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>


 <div class="clearfix"></div>

 		
<div class=" col-md-8 col-md-offset-2 text-center " style="margin: 30px;">
	<h2 class="h2">Songs, Chord and Artists</h2>
</div>
<div class="clearfix"></div>
<?php       $var = $_GET['song'];
            $results1 = $music_home->runQuery("SELECT * FROM music_posts WHERE ID = '$var' ");
            $results1->execute();
            $post = $results1->fetch(PDO::FETCH_ASSOC);
            ?>
       <div class="container" id="song-view">
			 <div class="col-md-10 col-sm-10 col-xs-10 col-xs-offset-1 col-md-offset-1 col-sm-offset-1 card">
			 	<div class="col-md-12 viwered">
			 		<h6 class="h6"><?php echo $post['cartegory']; ?></h6>
                    <h3 class="h3">Song&nbsp;: &nbsp;<a href="music_view?song=<?php echo $post['ID']; ?>"><?php echo $post['title']; ?></a></h3>
                 </div>
                 <div class="col-md-12 songed">
                    <span><b class="bet">Chord</b></span><span class="desc"><br><?php echo $post['description']; ?></span><br><br>
                    <span class="artist">By: <?php echo $post['artist']; ?> <span class="pull-right"><?php
                    date_default_timezone_set('Africa/Nairobi');
                                            $timestamp1 = $post['timer'];
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
                </div>
                <br>
                <div class="col-md-12 backer">

 				<a href="music" class="btn btn-default"> Go Back To Music</a>
 				</div>
        </div>


<!-- <div class="container" id="results"></div> -->



<!-- <div class=" col-md-6 col-md-offset-3 paging_link"></div>
 -->
 		
<br />
<div class="clearfix"></div>
<footer>
		<div class="container">
			
			
				<div class="col-sm-8">
					<p style="color: #fff;">&copy; &nbsp;<?php echo date('Y'); ?> &nbsp;All Rights Reserved | <a href="https://www.manuel.appslab.co.ke">ManuEl</a> </p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<!-- Scripts -->
	
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	
</body>
</html>
