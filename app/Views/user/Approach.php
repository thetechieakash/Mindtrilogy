<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Team'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<?= $this->section('custompagecss'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>

<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
    <div class="container position-relative">
        <h1>Our Approach</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="current">Approach</li>
            </ol>
        </nav>
    </div>
</div>
<section>
    <div class="container section-title pb-4">
        <h2>Our Approach: Turning Ideas into Impact</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="max-text text-center"><i class="fa-solid fa-quote-left quote-primary"></i>We believe great results come from a clear process. Our approach blends strategy, creativity, and technology to deliver solutions that create lasting value for our clients.<i class="fa-solid fa-quote-right quote-primary"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center top-m">
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="aprch-block-wrapper">
                    <h6 class="aprch-block-num">01</h6>
                    <p class="aprch-block-heading">Foundation Step</p>
                    <p class="aprch-block-para">We begin by listening — understand requirements to build a solid foundation.</p>
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="aprch-block-wrapper">
                    <h6 class="aprch-block-num">02</h6>
                    <p class="aprch-block-heading">Strategy & Planning</p>
                    <p class="aprch-block-para">With insights in place, we create a tailored strategy to guide every step of the project.</p>
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="aprch-block-wrapper">
                    <h6 class="aprch-block-num">03</h6>
                    <p class="aprch-block-heading">Design & Development</p>
                    <p class="aprch-block-para">Our team combines creativity and technical expertise to bring ideas to life.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-md-5">
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="aprch-block-wrapper">
                    <h6 class="aprch-block-num">04</h6>
                    <p class="aprch-block-heading">Execution & Delivery</p>
                    <p class="aprch-block-para">We execute with precision, ensuring quality and timely delivery.</p>
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0">
                <div class="aprch-block-wrapper">
                    <h6 class="aprch-block-num">05</h6>
                    <p class="aprch-block-heading">Support & Growth</p>
                    <p class="aprch-block-para">Our work doesn’t stop at launch — we provide ongoing support and scale with your business needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-7">
                <h4 class="exp-heading">Our Philosophy</h4>
                <p class="exp-para">At the heart of everything we do lies a simple belief — true success comes from creating meaningful value. We don’t just deliver projects; we build lasting partnerships rooted in trust, creativity, and collaboration.</p>
                <p class="exp-para">We approach every challenge with curiosity and care, blending innovation with proven strategies to craft solutions that make a real difference. For us, excellence isn’t an option — it’s our standard.</p>
                <h4 class="exp-heading">Our philosophy is guided by three pillars</h4>
                <div>
                    <div class="phil-item">
                        <span>Integrity:</span>
                        <span>Staying true to our commitments and values.</span>
                    </div>
                    <div class="phil-item">
                        <span>Innovation:</span>
                        <span>Continuously exploring new ideas and technologies.</span>
                    </div>
                    <div class="phil-item">
                        <span>Impact:</span>
                        <span>Ensuring our work creates measurable and lasting results.</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 mob-top-m">
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
<?= $this->endSection(); ?>

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>

<?= $this->endSection(); ?>