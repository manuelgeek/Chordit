<?php
include("class.admin.php");

$music_home = new ADMIN();

// $results = $music_home->runQuery("SELECT COUNT(*) FROM music_posts");
// $results->execute();
// $get_total_rows = $results->fetch();
// $item_per_page = 10;
// //breaking total records into pages
// $pages = ceil($get_total_rows[0]/$item_per_page);

$music_post = new Database();

if($music_post->dbConnection())
	{
		include_once 'class.music.php';

		$paginate = new paginate();
	}



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
		<!-- <script type="text/javascript">
		$(document).ready(function() {
			$("#results").load("get_records.php");  //initial page number to load
			$(".paging_link").bootpag({
			   total: <?php //echo $pages; ?>
			}).on("page", function(e, num){
				e.preventDefault();
				//$("#results").prepend('<div class="loading"><img src="ajax-loader.gif" /> Loading...</div>');
				$("#results").load("get_records.php", {'page':num});
			});

		});
		</script> -->

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

 		 <ul  class="nav navbar-inverse  nav-tabs " id="myTab">
             <li  class="active"><a href="#ukelele" data-toggle="tab">Ukelele</a></li>
             <li><a href="#pabs" data-toggle="tab">Pabs</a></li>
             <li><a href="#guiter" data-toggle="tab">Guiter</a></li>
             <li><a href="#base" data-toggle="tab">B. Guiter</a></li>
             <li><a href="#piano" data-toggle="tab">Piano</a></li>
        </ul>
<div class=" col-md-8 col-md-offset-2 text-center " style="margin: 30px;">
	<h2 class="h2">Songs, Chord and Artists</h2>
</div>


<div class="tab-content  clearfix  col-md-12 page_result">
       <div class="tab-pane fade in active" id="ukelele">

       	<?php 
		    $query = "SELECT * FROM music_posts WHERE cartegory = 'Ukelele' ORDER BY ID DESC";       
		    $records_per_page=12;
		    $newquery = $paginate->paging($query,$records_per_page);
		    $paginate->dataview($newquery);
		 ?>
		    <div class=" col-md-10 col-xs-12 col-md-offset-1">
		       <ul class="pagination">
		   <?php
		        $paginate->paginglink($query,$records_per_page);        
		    ?>
		        </ul>
		    </div>
       </div>
       <div class="tab-pane fade in " id="pabs">
       		<?php 
		    $query = "SELECT * FROM music_posts WHERE cartegory = 'Pabs' ORDER BY ID DESC";       
		    $records_per_page=12;
		    $newquery = $paginate->paging($query,$records_per_page);
		    $paginate->dataview($newquery);
		 ?>
		    <div class=" col-md-10 col-xs-12 col-md-offset-1">
		       <ul class="pagination">
		   <?php
		        $paginate->paginglink($query,$records_per_page);        
		    ?>
		        </ul>
		    </div>
       </div>
       <div class="tab-pane fade in " id="guiter">
       		<?php 
		    $query = "SELECT * FROM music_posts WHERE cartegory = 'Guiter' ORDER BY ID DESC";       
		    $records_per_page=12;
		    $newquery = $paginate->paging($query,$records_per_page);
		    $paginate->dataview($newquery);
		 ?>
		    <div class=" col-md-10 col-xs-12 col-md-offset-1">
		       <ul class="pagination">
		   <?php
		        $paginate->paginglink($query,$records_per_page);        
		    ?>
		        </ul>
		    </div>
       </div>
       <div class="tab-pane fade in " id="base">
       		<?php 
		    $query = "SELECT * FROM music_posts WHERE cartegory = 'Base Guiter' ORDER BY ID DESC";       
		    $records_per_page=12;
		    $newquery = $paginate->paging($query,$records_per_page);
		    $paginate->dataview($newquery);
		 ?>
		    <div class=" col-md-10 col-xs-12 col-md-offset-1">
		       <ul class="pagination">
		   <?php
		        $paginate->paginglink($query,$records_per_page);        
		    ?>
		        </ul>
		    </div>
       </div>
       <div class="tab-pane fade in " id="piano">
       		<?php 
		    $query = "SELECT * FROM music_posts WHERE cartegory = 'Piano' ORDER BY ID DESC";       
		    $records_per_page=12;
		    $newquery = $paginate->paging($query,$records_per_page);
		    $paginate->dataview($newquery);
		 ?>
		    <div class=" col-md-10 col-xs-12 col-md-offset-1">
		       <ul class="pagination">
		   <?php
		        $paginate->paginglink($query,$records_per_page);        
		    ?>
		        </ul>
		    </div>
       </div>
   </div>
<!-- <div class="container tab-content" id="results"></div>

<br />

<div class=" col-md-6 col-md-offset-3 paging_link"></div> -->

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
