<?php

include "events_db.php";

$full_name = $_POST['full_name'];
$email_address = $_POST['email'];
$phone_numberr = $_POST['phone'];
$select_event = $_POST['event'];
$additional_information = $_POST['info'];

$sql = "INSERT INTO eventhubs(full_name, email, phone, event, info)
VALUES ('$full_name', '$email_address', '$phone_numberr', '$select_event', '$additional_information')";

if(mysqli_query($conn, $sql)){

    echo "<script>
            alert('Event Registered Successfully!');
            window.location.href='contact.html';
          </script>";

}
else{

    echo 'Error: ' . mysqli_error($conn);

}

?>