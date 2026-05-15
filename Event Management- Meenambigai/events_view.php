<?php
include "events_db.php";

$sql = "SELECT * FROM eventhubs";
$result = mysqli_query($conn, $sql);

echo "<h2>Event List</h2>";

while($row = mysqli_fetch_assoc($result)){

    echo "Full Name: " . $row['full_name'] . "<br>";

    echo "Email: " . $row['email'] . "<br>";

    echo "Phone: " . $row['phone'] . "<br>";

    echo "Event: " . $row['event'] . "<br>";

    echo "Info: " . $row['info'] . "<hr>";
}
?>