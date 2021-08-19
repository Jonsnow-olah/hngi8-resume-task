<?php
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $message = $_POST['message'];


    if(empty($name) || empty($lname)) {

        header('location: index.php?error');
    } else {

        echo "Your message has been sent successfully";

            header("location:index.php?success");
        }

    } else {

    header("location:index.php");
}


?>