<?php 
    session_start();
    
    //unset($_SESSION["username"]); //this would just unset the variable
    session_unset();        
    session_destroy();
    //echo "done";
    
    header("Location: login.php");
    /*Page redirect after certain time
    header( "Refresh:5; url=http://www.example.com/page2.php", true, 303);
    */
    
    exit();
?>