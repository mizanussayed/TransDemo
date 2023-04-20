<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Lexicology Translation Bureau | Contact</title>


<?php
include('./arabic/header_ar.php')
?>
</head>
<body>
<?php
include('./arabic/navbar_ar.php')
?>
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact.jpg'); background-position: center; background-size:cover;">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2> نحن جاهزون دائمًا
لمساعدتك</h2>
    <ol>
        <li><a href="index_ar">الرئيسية</a></li>
        <li>
اتصل بنا</li>
    </ol>

    </div>
</div>

<section id="contact" class="contact">
<div class="container mb-2">
<div class="row">

<div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
    <div class="info infoArabic">
    <div class="address">
        <i class="bi bi-geo-alt"></i>
        <h4>العنوان</h4>
          <p>
                    مبنى رقم 7005 سابقا الركن الفرنسي <br>
                    -مكتب رقم 8 الدور الاول<br>
                    ابي بكر الرازي مع شارع الضباب - حي السليمانية - الرياض - المملكة العربية السعودية <br> 
          </p>
    </div>

    <div class="email">
        <i class="bi bi-envelope"></i>
        <h4> البريد الإلكتروني </h4>
        <p><a href="mailto:info@lexicologytranslation.com">  info@lexicologytranslation.com </a> </P> 
    </div>

    <div class="phone">
        <i class="bi bi-phone"></i>
        <h4>هاتف</h4>
         <p> <a href="callto:+966554237826">966554237826+</a></p>
         <p> <a href="callto:+966547888187">966547888187+</a></p>
    </div>

    </div>

</div>

<div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
    <div class="row">
        <div class="col-md-6 form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="الاسم الخاص بك" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="email" class="form-control" name="email" id="email" placeholder="بريدك الالكتروني" required>
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
    </div>
    <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
    </div>
    <div class="input-group mt-3 contact-file-div">
        <label class="input-group-text" for="sampleFile">اختر ملف</label>
        <span class="form-control" id="fileSpan">لم يتم اختيار ملف</span>
        <input type="file" class="form-control" name="sampleFile" id="sampleFile" style="display:none" onchange="fileInputChange()" multiple>
    </div>


    <div class="my-3">
        <div class="loading">تحميل</div>
        <div class="error-message"></div>
        <div class="sent-message">تم ارسال رسالتك. شكرًا لك!</div>
    </div>
    <div class="text-center"><button type="submit">إرسال رسالة</button></div>
    </form>

</div>

</div>

<div class="row pt-4">
 <div class="col-md-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d906.2500044592057!2d46.70135606953661!3d24.692526117105533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f034a8bc1f4c3%3A0x836aec89f7a7dbf5!2zTGV4aWNvbG9neSBDZXJ0aWZpZWQgVHJhbnNsYXRpb24gT2ZmaWNlINmF2YPYqtioINi52YTZiNmFINin2YTZhdi52KfYrNmFINmE2YTYqtix2KzZhdip!5e0!3m2!1sen!2sbd!4v1681569574142!5m2!1sen!2sbd" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
</div>

</div>
</section>
<?php
include('./arabic/footer_ar.php')
?>

</main>
</body>

</html>