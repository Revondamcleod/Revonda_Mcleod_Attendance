<?php
$title = "View Records";
require_once "include/header.php";
// require_once 'include/auth_check.php';
require_once 'db/conn.php';

//get all attendee
$result = $crud->getAttendees();
?>

<h1 class="text-center">List of Attendee</h1>

        <table class="table">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Specialty</th>
                <th>Actions</th>
            </tr>
            <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $r['attendee_id'] ?></td>
                    <td><?php echo $r['firstname'] ?></td>
                    <td><?php echo $r['lastname'] ?></td>
                    <td><?php echo $r['name'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class=" btn btn-primary">View </a>
                        <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class=" btn btn-warning">Edit </a>
                        <a onclick="return confirm('Are you Sure you want to Delete this Record')" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class=" btn btn-danger">Delete </a>
                    </td>
                </tr>
            <?php } ?>

        </table>
<hr />
<br />

<?php require_once "include/footer.php"; ?>