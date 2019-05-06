<?php  
    //require the connection to the database and starts a session
     require('connect.php');
     session_start();

    //If the form is submitted
    if (isset($_POST['email']) and isset($_POST['password'])){
        //Assigning posted values to variables.
        $email = $_POST['email'];
        $password = $_POST['password'];
        //3.1.2 Checking the values are existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
         
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);
        //If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1){
            $_SESSION['email'] = $email;
        }else{
            //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
            $fmsg = "Invalid Login Credentials.";
        }
    }
    //if the user is logged in Greets the user with message
    if (isset($_SESSION['email'])){
        header('Location: profile.php');
        $email = $_SESSION['email'];
        echo "$email" . "<br />";
        echo "This is the Members Area" . "<br />";
        echo "<a href='logout.php'>Logout</a>";
    }else{
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
<html>
<head>
	<title>User Login Using PHP & MySQL</title>

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
   <!-- Local css stylesheet -->
   <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
    
 <?php
    include('navbar.php');
 ?>
<div id="login">
    <div class="container">	
          <form class="form-signin" method="POST">
          <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            <h2 class="form-signin-heading">Please Login</h2>
            <div class="input-group">
    	  <span class="input-group-addon" id="basic-addon1"></span>
    	  <input  type="email" name="email" id="emailAddress" class="form-control" placeholder="Email">
    	</div><br />
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required autocomplete="off"><br />
            <button class="btn btn-lg btn-success btn-block type="submit">Login</button>
            <a class="btn btn-lg btn-primary btn-success btn-block" href="register.php">Register</a>
          </form>
    </div><br /><br />
</div>    
</body>
<!-- Footer -->
 <?php
    include('footer.php');
 ?>
    
</html>
<?php } ?>