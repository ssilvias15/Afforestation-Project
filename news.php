 <?php
    include('connect.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>The Afforestation Project</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <!-- Used for navbar.php 'email us' icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Used for buttons -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Internal css stylesheet -->
   <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
   
  <?php
      include('navbar.php');
  ?>
  
  <h1 id="env_news"> Environmental News</h1><br />
<div id="news" class="container">
  <?php
  	  $sql = "SELECT * FROM news;";
    	$result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                      <div class="card-body">
                          <h4 class="card-title"><b><?php echo $row['news_tytle']; ?></b></h4>
                            <p class="card-text"><?php echo $row['news_short_description']; ?></p>
                            <a target="_blank" class="btn btn-success" href="<?php echo $row['news_long_description'];?>">Read More</a>
                        </div>
                </div>
            </div>
     <?php   }  ?>
</div><br /><br />
</body>
   <?php include('footer.php'); ?>
</html>