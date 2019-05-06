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


	<header id="masthead">
		<img src="../images/group!.jpg" alt="Group" style="width:900px;height:550px;"><br /><br />
	</header>

<center><a href="register.php" class="btn register btn-lg btn-primary btn-success">Registration</a></center><br />

<section id="content">
	        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                      <div class="card-body">
                          <h3 class="card-title"> Communities</h3>
                            <p class="card-text">Whether you’re a member of a green school committee, a primary school teacher, 
                            college society events coordinator, a member of a political party, a company rep, or involved in any other kind of group or organisation, 
                            if you want to plant trees, you’re in the right place. <br />
              							The Afforestation Project is made up of enthusiastic plantation co-ordinators and local community groups. 
              							Each team of co-ordinators is assigned a plantation that is as geographically convenient for its members as possible. 
              							The team then collaborates with appointed local community groups that want to get involved in the project. 
              							Together, they prepare, plant and manage the plantation, and reap the benefits of connecting with nature, community and place.</p>
                        </div>
                </div>
            </div>
            
            
            	<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
              		<div class="card h-100">
                      <div class="card-body">
                          <h3 class="card-title"> Co-ordinators</h3>
                            <p class="card-text">If you are an individual with a passion for the environment, you can register as an afforestation co-ordinator to join one of our plantation teams. 
                            When a team working on a nearby plantation has a vacancy, you will be assigned to that team.<br />
              							No tree-planting experience is required! All necessary training will be arranged by your lead-co-ordinator. Your role will be to work with your team to plant trees with 
              							the community groups assigned to your plantation. <br />
              							Your lead co-ordinator will develop a schedule for you in accordance with your availability. 
              							Each volunteer will also be Garda vetted before receiving permission to work as a plantation co-ordinator.<br />
              							Please register your details below and we will be in contact shortly.</p>
                        </div>
                </div>
            </div>
            
            
            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
              		<div class="card h-100">
                      <div class="card-body">
                          <h3 class="card-title">Land Owners</h3>
                            <p class="card-text">If you are a private land owner, or a public servant administrating any public land
                            that can be used for a tree plantation, you’re hot property in our eyes! <br />
                            To enquire about the possibility of holding an afforestation project plantation on your land, please enter your details in the form below. 
                            We will be in touch shortly.<br />
              							We can offer annual premiums to land owners courtesy of funding from the afforestation grant. 
              							We can also offer ownership of the timber once the trees are fully grown, 
              							under the condition that any trees cut down will be replanted and never burned. </p>
                        </div>
                </div>
            </div>
	</section>
</div>
</body>


 <?php
    include('footer.php');
  ?>
</div>
</html>
