<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Contact Us'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>

<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/bg/bg-14.webp') ?>);">
    <div class="container position-relative">
        <h1>Contact Us</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url('Contact') ?>">Home</a></li>
                <li class="current">Contact Us</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->
<section class="mt-100px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="contact-page-sec">Have any question?</h1>
                <h1 class="contact-page-sec">Get in touch</h1>
                <p>Have a question or feedback? Get in touch with us using the form below. We're happy to help and will reply as quickly as we can.</p>
                <div class="row">
                    <div class="contact-list-item">
                        <div class="contact-icon">
                            <img src="<?= base_url('assets/img/icon/location-pin.png') ?>" alt="image">
                        </div>
                        <div class="contact-list-content">
                            <a href="#">AJC Bose road, Kolkata, 100005, West Bengal, India</a>
                        </div>
                    </div>
                    <div class="contact-list-item">
                        <div class="contact-icon">
                            <img src="<?= base_url('assets/img/icon/phone-call.png') ?>" alt="image">
                        </div>
                        <div class="contact-list-content">
                            <a href="tel:+911234567890">+91 123 456 7890</a>
                        </div>
                    </div>
                    <div class="contact-list-item">
                        <div class="contact-icon">
                            <img src="<?= base_url('assets/img/icon/email.png') ?>" alt="image">
                        </div>
                        <div class="contact-list-content">
                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form action="#" method="post" id="contactform" class="php-email-form">
                    <h4 class="text-white">Quick Contact</h4>
                    <p class="text-white">Feel free to contact us!</p>
                    <!-- <h3 class="contact-form-title">Contact form</h3> -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>

                    <div class="form-submit">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Google map area start -->
<div class="rs-map-one mt-100px">
    <div class="rs-google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.0003983200418!2d88.34604387443245!3d22.541657834105486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276561af736df%3A0x32589994002c17db!2sAcharya%20Jagdish%20Chandra%20Bose%20Rd%2C%20Kolkata%2C%20West%20Bengal%2C%20India!5e0!3m2!1sen!2sbd!4v1757072191872!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Google map area end-->
<?= $this->endSection(); ?>

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>
<?= $this->endSection(); ?>