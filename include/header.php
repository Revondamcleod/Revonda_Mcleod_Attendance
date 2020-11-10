<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<php, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo "ATTENDANCE- "."$title"?></title>
</head>

<body>
<div class="container">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Revonda Assignment 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="viewrecords.php">View Attendees</a>  

      <ul class="navbar-nav ml-auto">  
                <?php 
                    if(!isset($_SESSION['userid'])){
                ?>                      
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>  
                <?php }else {?>  
                    <li>
                    <a class="nav-link" href="#"><spam>Hello <?php echo $_SESSION['username'] ?>!</spam></a>
                    </li>
                    <li>
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php }?>                    
            </ul>

    </div>
  </div>
</nav>
  