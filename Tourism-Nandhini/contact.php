```php
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "tourism";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $persons = $_POST['persons'];
    $travel_date = $_POST['travel_date'];
    $destination = $_POST['destination'];
    $message = $_POST['message'];

    $sql = "INSERT INTO tours
    (fullname, email, phone, persons, travel_date, destination, message)

    VALUES
    ('$fullname', '$email', '$phone', '$persons',
    '$travel_date', '$destination', '$message')";

    if(mysqli_query($conn, $sql)){
        echo "<script>
        alert('Booking Request Sent Successfully!');
        window.location.href='contact.php';
        </script>";
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }
}

?>
```
<!DOCTYPE html>
<html>
<head>
<title>Contact Us - Explore India</title>
<script src="https://kit.fontawesome.com/f7083d9249.js" crossorigin="anonymous"></script>
<link rel="icon" href="web logo3.png" sizes="512x512">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins', sans-serif;
}

body{
  background:#f5f7fa;
}

 .logo{
    display:flex;
    align-items:center;
    gap:12px;
    margin-left:0;
}

.logo img{
    width:50px;
    height:50px;
    object-fit:contain;
    border-radius:8px;
}

.logo h1{
    color:white;
    font-size:28px;
    letter-spacing:2px;
    text-shadow:2px 2px 8px black;
    font-family:'Poppins', sans-serif;
}

header{
    width:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:1000;
    background:rgba(0,0,0,0.15);
    backdrop-filter:blur(8px);
    border-bottom:1px solid rgba(255,255,255,0.1);
}

nav{
    width:100%;
    margin:auto;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:10px 15px;
}

nav h1{
    color:white;
    font-size:28px;
    letter-spacing:2px;
    text-shadow:2px 2px 8px black;
    font-family:'Poppins', sans-serif;
}

nav ul{
    display:flex;
    list-style:none;
    align-items:center;
}

nav ul li{
    margin-left:28px;
}

nav ul li a{
    color:white;
    text-decoration:none;
    font-size:16px;
    font-weight:500;
    transition:0.4s;
    position:relative;
    font-family:'Poppins', sans-serif;
}

        nav ul li a::after{
    content:'';
    width:0;
    height:2px;
    background:#ffd166;
    position:absolute;
    left:0;
    bottom:-6px;
    transition:0.5s;
}

nav ul li a:hover::after{
    width:100%;
}

nav ul li a:hover{
    color:#ffd166;
}

.dropdown{
    position:relative;
    
}

.dropdown-content{
    display:none;
    position:absolute;
    top:100%;
    left:0;
    margin-top:10px;
    background:white;
    min-width:220px;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
    z-index:999;
}

.dropdown:hover .dropdown-content{
    display:block;
}
.dropdown::after{
    content:'';
    position:absolute;
    left:0;
    top:100%;
    width:100%;
    height:10px;
}

.dropdown-content a{

    display:block;

    padding:14px 18px;

    color:#0b1f3a;

    text-decoration:none;

    transition:0.4s;
}

.dropdown-content a:hover{

    background:#00b4d8;

    color:white;
}


.hero{
  width:100%;
  height:45vh;
  background:
  linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),
  url("https://images.unsplash.com/photo-1521791136064-7986c2920216");
  background-size:cover;
  background-position:center;

  display:flex;
  justify-content:center;
  align-items:center;
  color:white;
  font-size:50px;
  margin-top:70px;
}

.section{
  width:85%;
  margin:80px auto;
  display:flex;
  gap:30px;
}

.map{
  flex:1;
  height:520px;
  border-radius:20px;
  overflow:hidden;
  box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

.map iframe{
  width:100%;
  height:100%;
  border:0;
}

.form-box{
  flex:1;
background:linear-gradient(
        135deg,
        rgba(255,255,255,0.95),
        rgba(255,255,255,0.88)
    );
  backdrop-filter:blur(10px);
  padding:35px;
  border-radius:15px;
   box-shadow:
    0 15px 40px rgba(0,0,0,0.18),
    0 0 20px rgba(0,180,216,0.15);

    position:relative;

    overflow:hidden;

    transition:0.5s;
}

.form-box:hover{
  transform:translateY(-5px);
}

.form-box h2{
  text-align:center;
  margin-bottom:20px;
  color:#0b1f3a;
  font-size:30px;
  letter-spacing:1px;
}

input, textarea{
  width:100%;
  padding:14px 16px;
  margin-bottom:14px;
  border:2px solid transparent;
  border-radius:12px;
  outline:none;
  font-size:15px;
  background:#f1f5f9;
  transition:0.3s;
}

input:focus, textarea:focus{
  border:2px solid #00b4d8;
  background:white;
  box-shadow:0 0 10px rgba(0,180,216,0.2);
}

textarea{
  height:120px;
  resize:none;
}

button{
  width:100%;
  padding:15px;
  border:none;
  background:linear-gradient(to right,#ff9f1c,#ffb703);
  color:white;
  font-size:17px;
  border-radius:30px;
  cursor:pointer;
  font-weight:bold;
  transition:0.4s;
  box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

button:hover{
  transform:translateY(-3px);
  background:linear-gradient(to right,#00b4d8,#0077b6);
  box-shadow:0 10px 25px rgba(0,180,216,0.3);
}
.info{
  text-align:center;
  margin-top:20px;
  color:gray;
  line-height:28px;
}

footer{
  background:linear-gradient(to right,#1b4332,#0e492e,#075733);
  color:white;
  text-align:center;
  padding:20px;
  margin-top:50px;
}

.row{
    display:flex;
    gap:15px;
}

.input-box{
    width:100%;
    margin-bottom:18px;
}

.input-box label,
.gender-box label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
    color:#0b1f3a;
}

/* SELECT */
select{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#f1f5f9;
    outline:none;
    font-size:15px;
    transition:0.3s;
}

select:focus{
    border:2px solid #00b4d8;
    background:white;
    box-shadow:0 0 10px rgba(0,180,216,0.2);
}

/* BUTTON ANIMATION */
button{
    position:relative;
    overflow:hidden;
}

button::before{
    content:'';
    position:absolute;
    width:0;
    height:100%;
    top:0;
    left:0;
    background:rgba(255,255,255,0.2);
    transition:0.5s;
}

button:hover::before{
    width:100%;
}

/* RESPONSIVE */
@media(max-width:768px){

    .section{
        flex-direction:column;
    }

    .row{
        flex-direction:column;
    }

    .hero{
        font-size:35px;
        text-align:center;
    }
}

label span{
    color:red;
}

.info{
    width:65%;

    margin:30px auto;

    padding:35px 25px;

    background:linear-gradient(135deg,#0f172a,#1e293b,#334155);

    border-radius:25px;

    text-align:center;

    position:relative;

    overflow:hidden;

    box-shadow:0 10px 30px rgba(0,0,0,0.25);

    transition:0.5s;

    border-top:3px solid #ffb703;

    border-bottom:3px solid #ffb703;

    border-left:3px solid #ffb703 ;

    border-right:3px solid #ffb703 ;
}

/* glowing circles */
.info::before{
    content:'';

    position:absolute;

    width:180px;
    height:180px;

    background:rgba(255,255,255,0.08);

    border-radius:50%;

    top:-60px;
    left:-60px;
}

.info::after{
    content:'';

    position:absolute;

    width:150px;
    height:150px;

    background:rgba(255,255,255,0.05);

    border-radius:50%;

    bottom:-50px;
    right:-50px;
}

.info:hover{
    transform:translateY(-8px) scale(1.02);
}

.info h1{
    color:#ffd166;

    font-size:42px;

    margin-bottom:25px;

    letter-spacing:1px;

    position:relative;

    z-index:1;
}

.info p{
    color:white;

    font-size:20px;

    margin:18px 0;

    position:relative;

    z-index:1;

    transition:0.3s;
}

.info p:hover{
    color:#00d4ff;

    transform:translateX(5px);
}

.visiting-card-section{
    width:100%;
    padding:80px 8%;
    background:
    linear-gradient(rgba(255,255,255,0.92),rgba(255,255,255,0.92)),
    url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e");
    background-size:cover;
    background-position:center;
}

.visiting-card-section::before{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    background:rgba(255,183,3,0.15);
    border-radius:50%;
    top:40px;
    left:40px;
    filter:blur(20px);
}

.visiting-card-section::after{
    content:'';
    position:absolute;
    width:220px;
    height:220px;
    background:rgba(0,180,216,0.15);
    border-radius:50%;
    bottom:40px;
    right:40px;
    filter:blur(20px);
}

.visiting-card-section h2{
     text-align:center;
    font-size:45px;
    color:#d1930c;
    margin-bottom:50px;
    letter-spacing:1px;
}

.visiting-card-section p{
    font-size:18px;
    color:#555;
    margin-bottom:45px;
    position:relative;
    z-index:1;
}

/* CARD BOX */

.card-container{
    width:100%;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:50px;

    background:rgba(255,255,255,0.25);
    backdrop-filter:blur(15px);

    padding:35px;
    border-radius:30px;

    box-shadow:0 15px 40px rgba(0,0,0,0.2);

    border-top:3px solid #ffb703;
    border-bottom:3px solid #00b4d8;

    transition:0.4s;

    position:relative;   /* ADD THIS */
    overflow:hidden;     /* ADD THIS */
}

/* glowing border animation */

.card-container::before{
    content:'';
    position:absolute;
    top:-50%;
    left:-50%;
    width:200%;
    height:200%;
    background:linear-gradient(
        45deg,
        transparent,
        rgba(255,255,255,0.3),
        transparent
    );
    transform:rotate(25deg);
    animation:shine 5s linear infinite;
}

@keyframes shine{
    0%{
        transform:translateX(-100%) rotate(25deg);
    }

    100%{
        transform:translateX(100%) rotate(25deg);
    }
}

/* IMAGE */

.card-container img{
      width:55%;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}


.card-container:hover{
     transform:translateY(-8px);
}

/* small details */

.card-details{
    margin-top:25px;
    display:flex;
    justify-content:center;
    gap:35px;
    flex-wrap:wrap;
    position:relative;
    z-index:1;
}

.card-details div{
    background:white;
    border:2px solid burlywood;
    padding:14px 22px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    font-weight:600;
    color:#0b1f3a;
    transition:0.3s;
}

.card-details div:hover{
    background:white;
    color:black;
    transform:translateY(-5px);
}

</style>

</head>

<body>

<header>
        <nav>
            <div class="logo">
    <img src="web logo3.png" alt="Explore India Logo">
    <h1>Explore India</h1>
</div>
            
                <ul>

    <li><a href="index.html">Home</a></li>

    <li><a href="about.html">About Us</a></li>

    <li class="dropdown">

        <a href="#">Destinations</a>

        <div class="dropdown-content">

            <a href="kerala.html">Kerala</a>

            <a href="kashmir.html">Kashmir</a>

            <a href="goa.html">Goa</a>

            <a href="agra.html">Agra</a>

            <a href="jaipur.html">Jaipur</a>

            <a href="ooty.html">Ooty</a>

            <a href="manali.html">Manali</a>

            <a href="ladakh.html">Ladakh</a>

            <a href="kodaikanal.html">Kodaikanal</a>

            <a href="valparai.html">Valparai</a>

        </div>

    </li>

    <li><a href="packages.html">Packages</a></li>

    <li><a href="contact.php">Contact</a></li>

</ul>
          
</nav>
    </header>

<div class="hero">
  CONTACT US
</div>

<div class="visiting-card-section">

    <h2>Our Premium Visiting Card</h2>

    <p>
        Discover our official Explore India tourism visiting card designed
        with elegance, professionalism and modern travel vibes.
    </p>

    <div class="card-container">

        <img src="vc.png" alt="Explore India Visiting Card">

        <div class="card-details">

            <div><i class="fa-solid fa-globe" style="color: rgb(116, 192, 252);"></i>  Trusted Tourism Service</div>

            <div><i class="fa-solid fa-plane-departure" style="color: rgb(30, 48, 80);"></i>  Premium Travel Experience</div>

            <div><i class="fa-brands fa-sistrix " style="color: rgb(230, 24, 24);"></i>  Chennai Based Agency</div>

        </div>

    </div>

</div>

<div class="section">

  <!-- MAP FIXED (WORKING LINK) -->
 <div class="map">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.1811820963554!2d80.2707!3d13.0827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267c2f0b5a6d7%3A0x5c8d9c9b0b0c1a1!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v0000000000000">
  </iframe>
</div>

  <!-- FORM -->
  <div class="form-box">

    <h2>Book Your Trip</h2>

<form method="POST">

<div class="row">

<div class="input-box">
<label>Full Name  <span>*</span> </label>
<input type="text" name="fullname" placeholder="Enter your name" required>
</div>

<div class="input-box">
<label>Email Address  <span>*</span> </label>
<input type="email" name="email" placeholder="Enter your email" required>
</div>

</div>

<div class="row">

<div class="input-box">
<label>Phone Number  <span>*</span></label>
<input type="tel" name="phone" required>
</div>

<div class="input-box">
<label>No. of Persons  <span>*</span></label>
<input type="number" name="persons" placeholder="Persons" min="1" required>
</div>

</div>

<div class="row">

<div class="input-box">
<label>Travel Date  <span>*</span> </label>
<input type="date" name="travel_date" required>
</div>

<div class="input-box">
<label>Select Destination  <span>*</span></label>

<select name="destination" required>
<option value="">Choose Destination</option>
<option value="kerala">Kerala</option>
<option value="goa">Goa</option>
<option value="kashmir">Kashmir</option>
<option value="manali">Manali</option>
<option value="ladakh">Ladakh</option>
<option value="ooty">Ooty</option>
<option value="kodaikanal">Kodaikanal</option>
<option value="agra">Agra</option>
<option value="valparai">Valparai</option>
<option value="jaipur">Jaipur</option>
</select>
</div>
</div>

<div class="input-box">
<label>Additional Message</label>
<textarea name="message" placeholder="Write your message..."></textarea>
</div>

<button type="submit">Book Now</button>

</form>

  </div>

</div>

<div class="info">

<h1>Stay Connected With Us</h1>

<p><i class="fa-brands fa-sistrix fa-beat" style="color: rgb(230, 24, 24);"></i> Chennai, Tamil Nadu</p>

<p><i class="fa-solid fa-phone fa-beat" style="color: rgb(240, 8, 8);"></i> +91 9363741751</p>

<p><i class="fa-solid fa-envelope fa-beat" style="color: rgb(255, 255, 255);"></i> exploreindia@gmail.com</p>

</div>

<footer>
  @ 2026 Explore India Tourism Website
</footer>

</body>
</html>