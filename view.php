<?php
$title = "View Record";
require_once "include/header.php";
// require_once 'include/auth_check.php';
require_once 'db/conn.php';

//get Attendee by Id
if (!isset($_GET['id'])) {
    include 'include/errormessage.php';
    header('location : viewrecords.php');
} else {
    $id = $_GET['id'];
    $result = $crud->getAttendeesDetails($id);
    include 'include/successmessage.php';
?>

            <div class="card" >
            <div> <img class="rounded-circle" src="<?php echo empty ($result['avatar_path']) ? 'uploads/blank.png' : $result['avatar_path']; ?>" width="120&quot;" height="120&quot;"/></div>
                <div class="card-body" style="color: black; font-size: 20px;">
                    <h2 class="card-title"><?php echo $result['firstname'] . ' ' .   $result['lastname'] ?></h2>
                    <h4 class="card-subtitle "><?php echo $result['name'] ?></h4>
                    <h5 class="card-text">Date of Birth: <?php echo $result['dateofbirth'] ?></h5>
                    <h5 class="card-text">Email Address: <?php echo $result['emailaddress'] ?></h5>
                    <h5 class="card-text">Contact Number: <?php echo $result['contactnumber'] ?></h5>
                    <br />
                    <a href="viewrecords.php" class=" btn btn-info">Back To List </a>
                    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class=" btn btn-warning">Edit </a>
                    <a onclick="return confirm('Are you Sure you want to Delete this Record')" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class=" btn btn-danger">Delete </a>
                </div>
            </div>
      
<?php } ?>


<hr />
<br />

<?php require_once "include/footer.php"; ?>