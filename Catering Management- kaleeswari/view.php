<?php

include "db.php";
$sql = "SELECT * FROM contactf";

$result = mysqli_query($conn,$sql);

echo "<h2>Customer Messages</h2>";

while($row = mysqli_fetch_assoc($result))
{
    echo "Name : " . $row['name'] . "<br>";
    echo "Email : " . $row['email'] . "<br>";
    echo "Location : " . $row['location'] . "<br>";
    echo "Phone : " . $row['mobille'] . "<br>";
    echo "Event Type : " . $row['event'] . "<br>";
    echo "Event Date : " . $row['eventdate'] . "<br>";
    echo "Message : " . $row['message'] . "<hr>";
}

?>