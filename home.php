<?php
session_start();
require_once 'class.admin.php';
$admin_post = new ADMIN();

if(!$admin_post->is_logged_in())
{
	$admin_post->redirect('index');
}

$stmt = $admin_post->runQuery("SELECT * FROM tbl_admin WHERE email=:email_id");
$stmt->execute(array(":email_id"=>$_SESSION['adminSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<?php
  // error_reporting( ~E_NOTICE ); // avoid notice

if(isset($_POST['btn-post']))
{
  $title = trim($_POST['title']);
  
  $description = trim($_POST['description']);
  $cartegory = trim($_POST['cartegory']);
  $artist = trim($_POST['artist']);
  $userpic = rand(5,5678655556876534);
  
  // $phone = $row['phone'];
  // $email = $row['name'];
  // $piced = $row['photo'];

  //$imgFile = $_FILES['photo']['name'];
   // $tmp_dir = $_FILES['photo']['tmp_name'];
   // $imgSize = $_FILES['photo']['size'];


    // if(empty($imgFile)){
    //   $userpic = '';
    //     }
        
    //      else{
    //       $upload_dir = 'music_images/'; // upload directory
      
    //       $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
        
    //       // valid image extensions
    //       $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        
    //       // rename uploading image
    //       $userpic = rand(1000,1000000).".".$imgExt;
            
    //       // allow valid image file formats
    //       if(in_array($imgExt, $valid_extensions)){     
    //         // Check file size '5MB'
    //         if($imgSize < 5000000)        {
    //           move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    //         }
    //         else{
    //           $errMSG = "Sorry, your file is too large.";
    //         }
    //       }
    //       else{
    //         $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";    
    //       }
    //     }
        
    //       // if no error occured, continue ....
    //     if(!isset($errMSG))
    //     {
            if($admin_post->admin_post($title,$description,$cartegory,$userpic,$artist))
          {
            $msg1 = "<div class='alert alert-success col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2' data-dismiss='alert'>
                  <button class='close ' data-dismiss='alert'>&times;</button>
                  <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Music successfully Posted
                  </div>";
          }
          else{
            $msg1 = "<div class='alert alert-danger col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2' data-dismiss='alert'>
                  <button class='close ' data-dismiss='alert'>&times;</button>
                  <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while posting!
                </div>";
          }
        //}

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="#SSS" rel="stylesheet" type="text/css" />
		 <link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		 <link href="font/css/font-awesome.css" rel="stylesheet" />
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		 <!-- <link rel="shortcut icon" href="images/asawa.jpg"> -->
       <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	
		<title>Admin | Post</title>
	</head>
	<body>
	<section>
		<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Music</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home">Home</a></li>
            <!-- <li><a href="../blog">Blog</a></li> -->
            <!-- <li><a href="#">Tenders</a></li> -->
            <!-- <li><a href="about">About Farmbase</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
         
	 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              
			       <span class=""></span>&nbsp; <?php echo $row['email']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
   
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="clearfix"></div>
   	 <div class="col-lg-2 col-lg-offset-5">
		<br style="margin: 30px;">
	</div>
 <section>
      <div class="container" id="post_body">

            <div class=" col-md-8 col-md-offset-2 row text-center">
              <h2 style="color: #fff;" class="title ">Consultant  Posts</h2>
              <p style="color: #fff;"> Make your posts messages below</p>
            </div>
            <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
              <?php
          if(isset($errMSG)){
        ?>
               <div class="alert alert-danger col-md-8 col-md-offset-2">
                <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
              <?php
        }?>
        <?php
          if(isset($msg1)){
            echo $msg1;
        }
      ?>  
        <form method="post" enctype="multipart/form-data">
              <div class="form-group col-md-8 col-md-offset-2">
                <label class="login-field-icon fui-user" for="login-name">Name of Music </label>
                <input type="text" name="title" class="form-control login-field" value="" placeholder="Name of Post" id="login-name" required />
                
              </div>
               <div class="form-group col-md-8 col-md-offset-2">
                <label class="login-field-icon fui-user" for="login-name">Name of Artist </label>
                <input type="text" name="artist" class="form-control login-field" value="" placeholder="Name of Artist" id="login-name" required />
                
              </div>

              <div class="form-group col-md-8 col-md-offset-2">
              <label class="login-field-icon fui-lock" for="login-pass">Description(cords).... </label>
                <textarea type="text" name="description" class="form-control login-field" value="" placeholder="Description..." id="login-pass" required > </textarea>
                <script>
                     CKEDITOR.replace( 'description' );
                </script>
                
              </div>
              <div class="form-group col-md-8 col-md-offset-2">
                <label class="login-field-icon fui-lock" for="login-pass">Cartegory</label>
                <select class="form-control" name="cartegory" required>
                   <option value="">Select Cartegory...</option>
                      <option value="Ukelele">Ukelele</option>
                      <option value="Pabs">Pabs</option>
                      <option value="Guiter">Guiter</option>
                      <option value="Base Guiter">Base Guiter</option>
                      <option value="Piano">Piano</option>
                      <!--<option value="aqua">Aquaculture</option>
                      <option value="flower">Floriculture</option>
                      <option value="veges">Vegetable</option>
                      <option value="spice">Spices</option> -->
                      <!-- <option value="serve">Services</option>
                      <option value="phone">Phones and Laptops</option> -->
                      
                      
                  </select>
              </div>
              <div class="form-group col-md-8 col-md-offset-2">

              <label class="control-label"></label>
                   <input class="input-group form-control" type="hidden" name="photo" accept="image/*" readonly />
                   </div>
              <div class="form-group col-md-8 col-md-offset-2">
              <input class="btn btn-primary  btn-block" value="Post Music" name="btn-post" type="submit"/><br>
              
              </div>
        </form>
            </div>
        
      </div>
      
    </section>
 <footer>
      <div class="col-md-12">
        <div class="col-md-6 col-md-offset-3 text-center">
          <p>&copy; &nbsp;<?php echo date('Y'); ?> &nbsp;All Rights Reserved | <a href="https://www.manuel.appslab.co.ke">ManuEl</a> </p>
        </div>
        
      </div>
    </footer>


</section>
</body>
    <script type="text/javascript" src="js/jquery2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
    
   
</html>