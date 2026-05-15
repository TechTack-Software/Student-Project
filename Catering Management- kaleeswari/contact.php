<?php

$conn = mysqli_connect("localhost", "root", "", "catering1");

if (!$conn) {
    die("Connection Failed");
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $mobille = $_POST['mobille'];
    $event = $_POST['event'];
    $eventdate = $_POST['eventdate'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactf
    (name, email, location, mobille, event, eventdate, message)

    VALUES
    ('$name', '$email', '$location', '$mobille',
    '$event', '$eventdate', '$message')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Data Saved Successfully');</script>";

    } else {

        echo "Error : " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact - Royal Catering</title>

    <link rel="shortcut icon" href="logoca.png">

    <script src="https://kit.fontawesome.com/8657df6d39.js" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #fff0f5, #fff8dc);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10px;
            background-image: url(cab.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .nav {
            display: flex;
            align-items: center;
        }

        .nav a {
            margin: 15px;
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 18px;
        }

        .nav a:hover {
            color: yellow;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            border-radius: 10px;
        }

        .dropdown-content a {
            display: block;
            padding: 12px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        h1 {
            font-size: 42px;
            color: deeppink;
        }

        h3 {
            color: orange;
            font-style: italic;
        }

        .contact-top {
            text-align: center;
            padding: 60px 80px;
        }

        .contact-flex {
            display: flex;
            gap: 50px;
            margin-top: 40px;
        }

.contact-text {
    flex: 1;
    padding: 40px;
    border-radius: 25px;

    background:
        linear-gradient(rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.7)),
        url('foodbg.jpg');

    background-size: cover;
    background-position: center;

    color: white;
    line-height: 2;
    font-size: 18px;

    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.3);

    transition: 0.5s;
}

.contact-text:hover {
    transform: translateY(-10px);
}

.contact-text p {
    margin-bottom: 20px;
}

.contact-map {
    flex: 1;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.3);

    transition: 0.5s;
}

.contact-map:hover {
    transform: scale(1.03);
}

.contact-map iframe {
    width: 100%;
    height: 100%;
    min-height: 420px;
    border: none;
}
        .contact-form-section {
            text-align: center;
            padding: 60px 80px;
            background: linear-gradient(to right, #fff5ee, #ffe4e1);
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 900px;
            margin: auto;
        }

        .input-box {
            width: calc(50% - 10px);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .input-box input {
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            border: 2px solid pink;
        }

        textarea {
            width: 900px;
            max-width: 90%;
            height: 140px;
            border-radius: 10px;
            border: 2px solid pink;
            padding: 15px;
            margin-top: 20px;
        }

        .send-btn {
            margin-top: 25px;
            padding: 15px 55px;
            background: deeppink;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 18px;
            cursor: pointer;
        }

        .send-btn:hover {
            background: orange;
        }

        .footer {
            background: black;
            color: white;
            padding: 35px;
            text-align: center;
        }

        @media (max-width:768px) {

            .contact-flex {
                flex-direction: column;
            }

            .form-row {
                flex-direction: column;
            }

            .input-box {
                width: 100%;
            }

            .header {
                flex-direction: column;
            }
        }
    </style>

</head>

<body>

    <!-- HEADER -->

    <div class="header">

        <div class="logo-title">

            <img src="logoca.png" style="width:200px;height:150px;">

        </div>

        <div class="nav">

            <a href="home.html">Home</a>

            <a href="about.html">About</a>

            <div class="dropdown">

                <a>Menu</a>

                <div class="dropdown-content">

                    <a href="veg.html">Veg</a>

                    <a href="nonveg.html">Non-Veg</a>

                    <a href="dessert.html">Desserts</a>

                </div>
            </div>

            <a href="contact.php" style="color:yellow;">Contact</a>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-whatsapp"></i>


        </div>

    </div>

    <!-- CONTACT -->

    <section class="contact-top">

        <h3>Contact Us</h3>

        <h1>Get In Touch</h1>

        <img src="visit.png" style="width:1000px;height:500px;max-width:100%;">

        <div class="contact-flex">

<div class="contact-text">

    <h2 style="color:gold;font-size:38px;">
        Why Choose Royal Catering ?
    </h2>

    <div style="
        width:120px;
        height:4px;
        background:gold;
        border-radius:10px;
        margin-bottom:25px;">
    </div>

    <p>
        ✨ We provide exceptional catering services for weddings,
        birthday celebrations, receptions, engagements,
        and corporate events.
    </p>

    <p>
        🍽️ Our experienced chefs prepare delicious vegetarian
        and non-vegetarian dishes with authentic taste,
        fresh ingredients, and complete hygiene.
    </p>

    <p>
        🎉 From traditional banana leaf meals to modern buffet setups,
        we create unforgettable dining experiences for every guest.
    </p>

    <p>
        👨‍🍳 Royal Catering is known for premium quality service,
        elegant food presentation, and friendly hospitality.
    </p>

    <p>
        💖 We focus on customer satisfaction and make every celebration
        memorable with delicious food and perfect arrangements.
    </p>

</div>
<div class="contact-map">

                <iframe src="https://maps.google.com/maps?q=madurai&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>

            </div>

        </div>

    </section>

    <!-- FORM -->

    <section class="contact-form-section">

        <h3>Book Your Event</h3>

        <h1>Contact Form</h1>

        <form method="POST">

            <div class="form-row">

                <div class="input-box">

                <i class="fa-solid fa-user fa-flip" style="color: rgb(36, 152, 49);"></i>

                    <input type="text" name="name" placeholder="Enter Your Name">

                </div>

                <div class="input-box">

                <i class="fa-solid fa-envelope fa-beat-fade" style="color: rgb(255, 212, 59);"></i> <input type="email"

                    <input type="email" name="email" placeholder="Enter Your Email">

                </div>

                <div class="input-box">

                <i class="fa-solid fa-location-dot fa-bounce" style="color: rgb(243, 2, 41);"></i>

                    <input type="text" name="location" placeholder="Enter your location">

                </div>

                <div class="input-box">

                <i class="fa-solid fa-phone fa-shake"></i>

                    <input type="text" name="mobille" placeholder="Enter your Mobile number">

                </div>

                <div class="input-box">

                <i class="fa-solid fa-star fa-bounce" style="color: rgb(255, 212, 59);"></i>

                    <input type="text" name="event" placeholder="Enter your Event type">

                </div>

                <div class="input-box">

                <i class="fa-solid fa-calendar fa-shake" style="color: rgb(255, 212, 59);"></i> <input type="date"

                    <input type="date" name="eventdate" placeholder="Enter your Event date">

                </div>

            </div>

            <textarea name="message" placeholder="Enter Your Message"></textarea>

            <br>

            <button class="send-btn" type="submit" name="submit">
                Send Message
            </button>

        </form>

    </section>

    <!-- FOOTER -->

    <div class="footer">

        <h2>Royal Catering</h2>

        <p>Delicious Moments, Perfect Memories</p>

        <p>
            Phone : +91 8765221134
            <br><br>
            Email : royalcatering@gmail.com
        </p>

    </div>

</body>

</html>