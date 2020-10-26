<?php
$title ="index";
require_once "include/header.php";
?>

<h1 class="text-center">Registration for IT conference</h1>

<form method="get" action="success.php">
    <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="Enter First Name">
    </div>

    <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="Enter Last Name">
    </div>

    <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob" aria-describedby="Enter Date of Birth">

    </div>

    <div class="form-group">
    <label for="speciality">Area of Expertise</label>
    <select class="form-control" id="speciality" name="speciality" >
      <option>select</option>
      <option>Database Administrator</option>
      <option>Software Developer</option>
      <option>Web Administrator</option>
      <option>Other</option>
      </select>
    </div>


    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    
    <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phonHelp">
    <small id="phoneHelp" class="form-text text-muted">Your Contact Will Not Be Shared</small>
    </div>
    <br/> 
    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>

</form>


<br/>
<br/>
<br/>
<br/>
<?php require_once "include/footer.php"?>;

