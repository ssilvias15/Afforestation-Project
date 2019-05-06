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
    
    
   <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
<div class="wrapper">
	
 <?php
    include('navbar.php');
 ?>
 
<!-- https://www.latlong.net/ to use for finding latitude and longitude of a place -->
<article id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d304798.03630544356!2d-6.528285205102366!3d53.35695519999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e80ea27ac2f%3A0xa00c7a9973171a0!2sDublin!5e0!3m2!1sde!2sie!4v1528123932386" 
width="700" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
</article>

 <?php
    include('footer.php');
 ?>
</body>
</html>