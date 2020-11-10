<?php
$title = "success";
require_once "include/header.php";
require_once "db/conn.php";
require_once "sendemail.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['speciality'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = 'uploads/';
    $destination ="$target_dir$contact.$ext";
    move_uploaded_file($orig_file,$destination);


    //call functionto insert and track is success or not
    $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty, $destination);
    $specialtyName = $crud->getSpecialtyById($specialty);

    if ($isSuccess) {
        SendEmail::SendMail($email, 'Welcome to IT Conference 2020', 'Dear ' . $fname . ',<br><br>You have successfully registered for this year\'s IT Conference. <br><br>Regards. <br>IT Conference Team<br>');
        include 'include/successmessage.php';
    } else {
        include 'include/errormessage.php';
        header('location : viewrecords.php');
    }
}
?>


<!-- <div class="card" style="width: 22rem; background-color: rgb(253, 249, 5); color: black">
        <div class="card-body">
            <h5 class="card-title"><?php //echo $_GET['firstname'] . ' '.$_GET['lastname']
                                    ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['speciality']
                                                        ?></h6>
            <p class="card-text">Date of Birh: <?php// echo $_GET['dob']?></p>
            <p class="card-text">Email Address: <?php //echo $_GET['email']
                                                ?></p>
            <p class="card-text">Contact Number: <?php //echo $_GET['phone']
                                                    ?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
     </div>
</div> -->


       
        <div class="card" style="width: 30rem;">
        <div> <img class="rounded-circle" src="<?php echo $destination ?>" width="120&quot;" height="120&quot;"/></div>
            <div class="card-body" style="color: black; font-size: 20px;">
                <h2 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'] ?></h2>
                <h4 class="card-subtitle mb-2 text-muted"><?php echo $specialtyName['name'] ?></h4>
                <h5 class="card-text">Date of Birth: <?php echo $_POST['dob'] ?></h5>
                <h5 class="card-text">Email Address: <?php echo $_POST['email'] ?></h5>
                <h5 class="card-text">Contact Number: <?php echo $_POST['phone'] ?></h5>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    
<hr />
<br />

<?php require_once "include/footer.php"; ?>