
<!DOCTYPE html>

<html>
  <head>
	<title>User Login Using PHP & MySQL</title>
    	
    <!-- Removing Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" > 
    
    <!-- Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="store.css" >
    
</head>

<body>
 

<?php
    
  //Connect to the database
  // Set the database access information as constants...
  DEFINE ('DB_USER', 'root');
  DEFINE ('DB_PASSWORD', '');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'afforestation');                          //The port #. It is always 3306
    
  // Make the connection...
  $con = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL! ' . mysqli_connect_error());

  // Set the encoding...
  mysqli_set_charset($con, 'utf8');

/*
  //And now to perform a simple query to make sure it's working
  $query = "SELECT * FROM users";
  echo 'SQL query to submit:<br/>&nbsp'.$query.'<br/><br/>';
  $result = mysqli_query($con, $query);
  echo 'var_dump of result<br/>&nbsp';
  var_dump($result);
  echo '<br/><br/>';
  echo 'rows of the result<br/>';
  while ($row = mysqli_fetch_assoc($result)) {
        echo "&nbsp The ID is: " . $row['user_id'] . " and the emal is: " . $row['email'].'</br>';
  }
*/
?>
</body>
</html>