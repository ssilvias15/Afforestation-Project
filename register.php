<?php 

    //require the public header which starts a session and connects to the database
    require('connect.php'); 
    session_start();
    
        // If the values are posted, insert them into the database.
       if (isset($_POST['email']) && isset($_POST['password'])){
    		$email = $_POST['email'];
            $password = $_POST['password'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $users_type_id= $_POST['type_id_dropdownMenu'];
            $reg_message = $_POST['reg_message'];
            
            $query = "INSERT INTO `users` (email, first_name, last_name, password, users_type_id, reg_message) VALUES ('$email', '$password', '$first_name', 
            '$last_name', '$users_type_id', '$reg_message')";
            //echo "query:".$query."<br/>" ; 
            $result = mysqli_query($con, $query);
            if($result){ 
                $msg = "User Created Successfully" . "<br />";
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        }
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
        <h2 id="reg">Registration Form</h2> <br />
        <div class="register-form">
        <?php
        	if(isset($msg) & !empty($msg)){
        		echo '<br/><br/>'.$msg;
        	}
         ?>
         <br/>
        <form action="" method="POST">
        	<p><label>Email: </label><br />
        	<input id="email" type="email" name="email" placeholder="Email" /></p>
            <p><label>Password: </label><br />
        	<input id="password" type="password" name="password" placeholder="Password" /></p>
        	<p><label>First Name: </label><br />
        	<input id="first_name" type="text" name="first_name" placeholder="First Name" /></p>
            <p><label>Last Name: </label><br />
        	<input id="last_name" type="text" name="last_name" placeholder="Last Name" /></p>
        	
        	<p><label>User Type</label><br />
        	<select name="type_id_dropdownMenu">
              <option value="2">Community User</option>
              <option value="3">Co-ordinator</option>
              <option value="4">Land Owner</option>
            </select>
            
        	<p><label>Message: </label><br />
        	<textarea name="reg_message" rows="10" cols=59></textarea></p>
        	
            <input class="btn register btn-lg btn-primary btn-success" type="submit" name="submit" value="Register" />
            <a class="btn btn-lg btn-primary btn-primary btn-success" href="login.php">Log in</a>
        </form>
        </div>
    </div>
</body>
 <?php
    include('footer.php');
 ?>
 </html>