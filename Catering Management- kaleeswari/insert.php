<?php

include "db.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phone = $_POST['mobile'];
    $eventtype = $_POST['event'];
    $eventdate = $_POST['eventdate'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactf
    (name,email,location,mobille,event,eventdate,message)

    VALUES
    ('$name','$email','$location','$mobile','$event','$eventdate','$message')";

    if(mysqli_query($conn,$sql))
    {
        echo "Message Sent Successfully";
    }
    else
    {
        echo "Error : " . mysqli_error($conn);
    }
}
?>