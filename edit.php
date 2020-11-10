<?php 
        $title = "Edit";
        require_once "include/header.php";
        // require_once 'includes/auth_check.php';
        require_once 'db/conn.php';

        //get all Specialties
        $result = $crud->getSpecialties();

        if(!isset($_GET['id']))
        {
            //echo 'Error';
            include 'includes/errormessage.php';
            header('location : viewrecords.php');
        }else{
            $id = $_GET['id'];
            $attendee = $crud->getAttendeesDetails($id); 
?>

<h1 class="text-center">Edit Record</h1>


    <form method="post" action="editpost.php">
    <input type="hidden" name="id" value=" <?php echo $attendee['attendee_id'] ?>" />

    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname"
            name="firstname">
    </div>

    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname"
            name="lastname" >
    </div>

    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob"
           >
    </div>

    <div class="form-group">
        <label for="speciality">Area of Expertise</label>
        <select class="form-control" id="speciality" name="speciality"
        >
            <?php while ($r =$result->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['specialty_id']; ?>" <?php if($r['specialty_id']== 
            $attendee['specialty_id']) echo 'selected'?>>
                <?php echo $r['name']; ?>
            </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="email" name="email"
            aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="phone">Contact</label>
        <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone"
            aria-describedby="phoneHelp">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your Contact Number with anyone
            else.</small>
    </div>

    <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" value="<?php echo $attendee['avatar_path'] ?> id="avatar" name="avatar" style="background-color: rgb(253, 249, 5); color: black">
                <label class="custom-file-label" for="avatar" >Choose file</label>
                <small id="avatar" class="form-text text-danger">File Upload is Optional.</small>         
            </div>

              
    <button type="submit" name="submit" class="btn btn-success btn-block">Save Changes</button>
  
    
</form>
   

<?php }?>
<hr />
<br />

<?php require_once "include/footer.php";?>