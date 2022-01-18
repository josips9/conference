<?php

require_once 'db/conn.php';

if(!$_GET['id']) {
    // echo 'error';
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
} else {
    // GET ID Values
    $id = $_GET['id'];

    // Call Delete function
    $result = $crud->deleteAttendee($id);

    // Redirect to list
    if($result) {
        header("Location: viewrecords.php");
    } else {
        echo '';
    }
}


?>