<?php
require_once 'include/auth_check.php';
require_once 'db/conn.php';

if (!$_GET) {
    include 'includes/errormessage.php';
} else {
    //Get Id Values
    $id = $_GET['id'];

    //Call Delete Function
    $result = $crud->deletAttendee($id);

    //Redirect to List
    if ($result) {
        header("location: viewrecords.php");
        include 'includes/successmessage.php';
    } else {
        include 'include/errormessage.php';
        header('location : viewrecords.php');
    }
}