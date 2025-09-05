<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Details'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
    <div class="container position-relative">
        <h1>Life at Mindtrilogy</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="current">Life at Mindtrilogy</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Culture Highlights -->
<section class="culture-highlights py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="text-center">
                <h2 >Where ideas thrive, teams grow, and innovation drives us forward.</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="life-card">
                    <div class="life-content">
                        <i class="fas fa-users fa-2x mb-3"></i>
                        <h5 class="heading">Teamwork</h5>
                        <p class="para">We grow together and achieve success as one team.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="life-card">
                    <div class="life-content">
                        <i class="fas fa-lightbulb fa-2x mb-3"></i>
                        <h5 class="heading">Innovation</h5>
                        <p class="para">We embrace creativity and push boundaries to deliver solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="life-card">
                    <div class="life-content">
                        <i class="fas fa-seedling  fa-2x mb-3"></i>
                        <h5 class="heading">Growth</h5>
                        <p class="para">Personal and professional development is at our core.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="life-card">
                    <div class="life-content">
                        <i class="fas fa-globe fa-2x mb-3"></i>
                        <h5 class="heading">Diversity</h5>
                        <p class="para">We celebrate cultures, ideas, and perspectives from around the world.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">
    <div class="container section-title">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 testimonial-thumb">
                <img src="<?= base_url('assets/img/sections/testimonial-thumb-01.png') ?>" class="" alt="">
            </div>
            <div class="col-12 col-md-7">
                <h1 class="about-slider-text fst-italic">Employee Stories</h1>
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "navigation": {
                                "nextEl": ".swiper-button-next",
                                "prevEl": ".swiper-button-prev"
                            },
                            "slidesPerView": 1,
                            "spaceBetween": 1
                        }
                    </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>Working here has been an incredible journey of learning and collaboration.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="<?= base_url('assets/img/users/user11.webp'); ?>" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Ravi Nair</h3>
                                        <h4>Chief Technology Officer</h4>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>I feel empowered to share my ideas and take ownership of projects.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="<?= base_url('assets/img/users/user6.webp'); ?>" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Priya Desai</h3>
                                        <h4>Head of Product</h4>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>The culture here inspires me to be my best self every day.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="<?= base_url('assets/img/users/user12.webp'); ?>" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Ankit Sharma</h3>
                                        <h4>Lead Software Engineer</h4>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>From day one, they felt like an extension of our team. Reliable, skilled, and committed to driving results.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="<?= base_url('assets/img/users/user7.webp'); ?>" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Megha Kapoor</h3>
                                        <h4>UI/UX Designer</h4>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>I have worked most critical projects. Their solutions bring measurable value and long-term impact to people business.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="<?= base_url('assets/img/users/user10.webp'); ?>" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Amit Sinha</h3>
                                        <h4>Business Development Manager</h4>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                    <div class="icon-set">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Testimonials Section -->

<!-- Features Section -->
<section id="services" class="features section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Perks & Benefits</h2>
    </div><!-- End Section Title -->
    <div class="container">

        <div class="row g-4">
            <div class="col-lg-4">
                <ul class="nav nav-tabs flex-column" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#features-tab-1" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Flexible Hours</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Remote Work</h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Learning Support</h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Wellbeing Focus</h4>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Flexible Hours</h3>
                                    <p class="highlight">Work on a schedule that fits your lifestyle while ensuring productivity and balance.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Freedom to manage time</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Support for work-life balance</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>No rigid 9–5 rule</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Encourages personal growth</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/details/1.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Remote Work</h3>
                                    <p class="highlight">Enjoy the flexibility of working from anywhere without compromising collaboration or results.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Work from home option</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Global collaboration tools</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Reduced commute stress</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Hybrid work culture</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/details/2.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Learning Support</h3>
                                    <p class="highlight">We invest in your growth through continuous learning opportunities and skill-building programs.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Access to online courses</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Training and workshops</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Mentorship programs</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Certification support</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/details/3.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Wellbeing Focus</h3>
                                    <p class="highlight">Your health and happiness matter to us, with initiatives that keep you balanced and energized.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Health & wellness programs</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Mental health support</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Fitness & sports activities</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Regular wellbeing check-ins</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/details/4.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- /Features Section -->

<section id="contactsec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-md-flex justify-content-between align-items-center gap-5 mb-4">
                <h1 class="cs-header">Want to join our team</h1>
                <a href="<?= base_url('careers'); ?>" class="cr">
                    <svg viewBox='0 0 200 200' width='200' height='200' xmlns='http://www.w3.org/2000/svg' class="cr__svg" aria-labelledby="cr1-title cr1-desc">
                        <title id="cr1-title">Come quick and click this</title>
                        <desc id="cr1-desc">A rotating cr with text placed around a circle with an arrow inside</desc>
                        <path id="cr-circle" class="cr__path" d="M 20, 100 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0" stroke="none" fill="none" />
                        <path class="cr__arrow" d="M 75 100 L 125 100 L 110 85 M 125 100 L 110 115" fill="none" />
                        <text class="cr__text">
                            <textPath href="#cr-circle" stroke="none">
                                one stop digital solutions.
                            </textPath>
                        </text>
                    </svg>
                </a>

            </div>
            <div class="col-12 col-md-7">
                <form action="#" method="post" id="contactform" class="php-email-form">
                    <h4 class="text-white">Apply Job</h4>
                    <div class="form-group mt-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="tel" class="form-control" name="mob" id="mob" placeholder="Mobile no." required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" class="form-control" name="cv" id="formFileMultiple" accept="application/pdf" />
                    </div>
                    <div class="form-submit text-end mt-3">
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