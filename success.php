<?php
$title ="success";
require_once "include/header.php";
?>

<h1 class="text-center text-success">You Registered Successfully</h1>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php  echo $_GET['firstName'] .' '. $_GET['lastName'] ?>e</h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php  echo $_GET['firstName'] .' '. $_GET['lastName'] ?></h6>
    <p class="card-text"><?php echo   $_GET['email'] ?></p>
    <p class="card-text"><?php echo   $_GET['phone'] ?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>













<br/>
<br/>
<br/>
<br/>
<?php require_once "include/footer.php"?>;
