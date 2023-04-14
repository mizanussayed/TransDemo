<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>lexicologytranslation - Contact</title>
<meta content="" name="description">
<meta content="" name="keywords">

<?php
include "Components/header.php"
?>
</head>
<body>
<?php
include "Components/Navbar.php"
?>
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Contact Us</h2>
    <ol>
        <li><a href="index.php">Home</a></li>
        <li>Contact Us</li>
    </ol>

    </div>
</div>

<section id="contact" class="contact">
<div class="container">

<div class="section-title" data-aos="fade-up">
<h2>Contact</h2>
<p>Contact Us</p>
</div>

<div class="row">

<div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
    <div class="info">
    <div class="address">
        <i class="bi bi-geo-alt"></i>
        <h4>Location:</h4>
        <p>A108 Adam Street, New York, NY 535022</p>
    </div>

    <div class="email">
        <i class="bi bi-envelope"></i>
        <h4>Email:</h4>
        <p>info@example.com</p>
    </div>

    <div class="phone">
        <i class="bi bi-phone"></i>
        <h4>Call:</h4>
        <p>+1 5589 55488 55s</p>
    </div>

    </div>

</div>

<div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
    <div class="row">
        <div class="col-md-6 form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
    </div>
    <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
    </div>
    <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
    </div>
    <div class="text-center"><button type="submit">Send Message</button></div>
    </form>

</div>

</div>
<div class="row">
<div class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.378414635264!2d90.39037217451695!3d23.733881489411846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e90a449e4f%3A0xb7092a9c25197fa4!2z4Kai4Ka-4KaV4Ka-IOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnw!5e0!3m2!1sbn!2sbd!4v1681453081660!5m2!1sbn!2sbd" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>

</div>
</section>
<?php
include "Components/Footer.php"
?>

</main>
</body>

</html>