<?php
$title = "Index";
require_once "include/header.php";
require_once 'db/conn.php';

//get all Specialties
$result = $crud->getSpecialties();
?>
<h1 class="text-center">Registration for IT Conference</h1>


        <form method="post" enctype="multipart/form-data" action="success.php">

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input required type="text" class="form-control" id="firstname" name="firstname">
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input required type="text" class="form-control" id="lastname" name="lastname" >
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob">
            </div>

            <div class="form-group">
                <label for="speciality">Area of Expertise</label>
                <select class="form-control" id="speciality" name="speciality" >
                    <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $r['specialty_id']; ?>"><?php echo $r['name']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="phone">Contact</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
                <small id="phoneHelp" class="form-text text-muted">We'll never share your Contact Number with anyone else.</small>
            </div>

            <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
                <label class="custom-file-label" for="avatar">Choose file</label>
                <small id="avatar" class="form-text text-danger">File Upload is Optional.</small>         
            </div>
            <br/>
            <br/>

            


            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            <a href="index.php" class=" btn btn-danger btn-block">Cancel </a>
        </form>
    </div>

</div>


<hr />
<br />

<?php require_once "include/footer.php"; ?>