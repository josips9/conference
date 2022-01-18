<?php
    require_once 'db/conn.php';

    // Get Values from post operation
    if(isset($_POST['submit'])){
        // Extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        // Call crud function
        $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);

        // Redirect to index.php
        if($result) {
            header("Location: viewrecords.php");
        } else {
            // echo 'error';
            include 'includes/errormessage.php';
        }

    } else {
        // echo 'error';
        include 'includes/errormessage.php';
    }




?>