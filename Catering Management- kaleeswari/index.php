<?php
include "db.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
</head>

<body>

<section class="contact-form-section">

    <h3>Book Your Event</h3>
    <h1>Contact Form</h1>

    <form action="contact.php" method="POST">

        <div class="form-row">

            <div class="input-box">
                <input type="text" name="name" placeholder="Enter Your Name">
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Enter Your Email">
            </div>

            <div class="input-box">
                <input type="text" name="location" placeholder="Enter your location">
            </div>

            <div class="input-box">
                <input type="text" name="phone" placeholder="Enter your Mobile number">
            </div>

            <div class="input-box">
                <input type="text" name="eventtype" placeholder="Enter your Event type">
            </div>

            <div class="input-box">
                <input type="date" name="eventdate">
            </div>

        </div>

        <textarea name="message" placeholder="Enter Your Message"></textarea>

        <br><br>

        <button class="send-btn" type="submit" name="submit">
            Send Message
        </button>

    </form>

</section>

</body>
</html>

