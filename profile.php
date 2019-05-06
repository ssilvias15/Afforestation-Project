<?php
    include('connect.php');
    // Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
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
<div class="wrapper">
 	
 <?php
    include('navbar.php');
 ?>
<div id="profile">
 <?php
        if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
            header("location: login.php");
            exit;
        } else{
            $email = $_SESSION['email'];
            echo "You are currently logged in with the email address: <b>" . "$email" . "</b><br /><br /><b>Message sent: </b><br />";
            $sql = "SELECT reg_message FROM users WHERE email = '$email'";
            //echo " query:".$sql."<br/>" ;
            $result = mysqli_query($con, $sql);
            if( $result ){
                // success! check results
                while( $row = mysqli_fetch_assoc($result) ){
                    echo $row['reg_message'];
                }
            }
         }
        
    ?>
    <br /><br />
    <a class="btn btn-sm btn-primary btn-success" href='logout.php'>Logout</a><br /><br /><br />

</div>
</div><!-- closing wrapper -->

</body>
<!-- Footer -->
 <?php
    include('footer.php');
 ?>
</html>