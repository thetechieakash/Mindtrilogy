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
        <h1>Our Services</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="current"><?= $pageTitle ?? 'Services' ?></li>
            </ol>
        </nav>
    </div>
</div>
<div class="swiper text-slide-wrapper">
    <div class="clients-slider swiper init-swiper">
        <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 6000,
                "autoplay": {
                    "delay": 1,
                    "disableOnInteraction": false
                },
                "centeredSlides": true,
                "slideToClickedSlide": true,
                "slidesPerView": "auto",
                "spaceBetween": 40,
                "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 20
                    },
                    "640": {
                        "slidesPerView": 3,
                        "spaceBetween": 20
                    },
                    "992": {
                        "slidesPerView": 4,
                        "spaceBetween": 30
                    },
                    "1200": {
                        "slidesPerView": 6,
                        "spaceBetween": 40
                    }
                }
            }
        </script>

        <div class="swiper-wrapper text-slide-row">
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">IT Consulting</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Software & Apps</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Cloud & DevOps</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Data & AI Solutions</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">CRM / ERP</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">QA & Automation</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">IT Consulting</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Software & Apps</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Cloud & DevOps</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Data & AI Solutions</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">CRM / ERP</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">QA & Automation</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">IT Consulting</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Software & Apps</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Cloud & DevOps</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">Data & AI Solutions</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">CRM / ERP</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
            <div class="swiper-slide text-slide">
                <div class="text-slide-item">
                    <h6 class="text-slide-title">QA & Automation</h6>
                    <div class="text-slide-thumb">
                        <img src="<?= base_url('assets/img/icon/multi-line-shape.png') ?>" alt="image">
                    </div>
                </div>
            </div><!-- End Client Item -->
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row justify-content-center align-items-center mx-2 mx-md-0">
            <a class="services-items-inner col-xl-4 col-lg-4 col-md-6" href="<?= base_url('services/IT_Consulting')?>">
                <img src="<?= base_url('assets/img/services/svgs/5.svg'); ?>" alt="svg">
                <div>
                    <p>IT Consulting</p>
                    <ul>
                        <li><i class="fa-regular fa-square-check"></i>IT Strategy</li>
                        <li><i class="fa-regular fa-square-check"></i>Digital Transformation</li>
                        <li><i class="fa-regular fa-square-check"></i>Tech Assessments</li>
                    </ul>
                    <div class="go-corner">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </a>

            <a class="services-items-inner col-xl-4 col-lg-4 col-md-6" href="#">
                <img src="<?= base_url('assets/img/services/svgs/8.svg'); ?>" alt="svg">
                <div>
                    <p>Software & Apps</p>
                    <ul>
                        <li><i class="fa-regular fa-square-check"></i>Web Development</li>
                        <li><i class="fa-regular fa-square-check"></i>Mobile Apps</li>
                        <li><i class="fa-regular fa-square-check"></i>Custom Solutions</li>
                    </ul>
                    <div class="go-corner">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </a>

            <a class="services-items-inner col-xl-4 col-lg-4 col-md-6" href="#">
                <img src="<?= base_url('assets/img/services/svgs/19.svg'); ?>" alt="svg">
                <div>
                    <p>Cloud & DevOps</p>
                    <ul>
                        <li><i class="fa-regular fa-square-check"></i>Cloud Migration</li>
                        <li><i class="fa-regular fa-square-check"></i>CI/CD Pipeline</li>
                        <li><i class="fa-regular fa-square-check"></i>Infrastructure as Code</li>
                    </ul>
                    <div class="go-corner">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </a>


            <a class="services-items-inner col-xl-4 col-lg-4 col-md-6" href="#">
                <img src="<?= base_url('assets/img/services/svgs/23.svg'); ?>" alt="svg">
                <div>
                    <p>Data & AI Solutions</p>
                    <ul>
                        <li><i class="fa-regular fa-square-check"></i>Business Intelligence</li>
                        <li><i class="fa-regular fa-square-check"></i>Machine Learning</li>
                        <li><i class="fa-regular fa-square-check"></i>Data Engineering</li>
                    </ul>
                    <div class="go-corner">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </a>


            <a class="services-items-inner col-xl-4 col-lg-4 col-md-6" href="#">
                <img src="<?= base_url('assets/img/services/svgs/7.svg'); ?>" alt="svg">
                <div>
                    <p>CRM / ERP</p>
                    <ul>
                        <li><i class="fa-regular fa-square-check"></i>Salesforce</li>
                        <li><i class="fa-regular fa-square-check"></i>SAP</li>
                        <li><i class="fa-regular fa-square-check"></i>Zoho, HubSpot, etc.</li>
                    </ul>
                    <div class="go-corner">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </a>


            <a class="services-items-inner col-xl-4 col-lg-4 col-md-6" href="#">
                <img src="<?= base_url('assets/img/services/svgs/21.svg'); ?>" alt="svg">
                <div>

                    <p>QA & Automation</p>
                    <ul>
                        <li><i class="fa-regular fa-square-check"></i>Manual Testing</li>
                        <li><i class="fa-regular fa-square-check"></i>Automation Tools</li>
                        <li><i class="fa-regular fa-square-check"></i>Performance Testing</li>
                    </ul>
                    <div class="go-corner">
                        <div class="go-arrow">
                            →
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>
<section id="staffaugmentation" class="services section light-background">
    <div class="container">

        <div class="stats-highlight">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support Available</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="testimonials" class="testimonials section">
    <div class="container section-title">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 testimonial-thumb">
                <img src="<?= base_url('assets/img/sections/testimonial-thumb-01.png') ?>" class="" alt="">
            </div>
            <div class="col-12 col-md-7">
                <h1 class="about-slider-text fst-italic">What our clients and partners say about us</h1>
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
                                    <span>Their expertise and dedication truly transformed our project. We experienced faster delivery, seamless collaboration, solutions that exceeded our expectations.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="assets/img/users/user3.webp" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Aarav Mehta</h3>
                                        <h4>CTO, FinEdge Solutions</h4>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>Working with this team has been a game-changer. Their innovative approach helped us scale efficiently while keeping costs under control.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="assets/img/users/user1.webp" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Sneha Reddy</h3>
                                        <h4>Product Manager, EduSphere</h4>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>They understood our vision and turned it into reality. The professionalism, communication, and quality of work were outstanding.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="assets/img/users/user4.webp" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Rohan Kapoor</h3>
                                        <h4>CEO, HealthBridge Technologies</h4>
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
                                    <img src="assets/img/users/user2.webp" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Neha Joshi</h3>
                                        <h4>Operations Head, RetailSync</h4>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item about-tes-item">
                                <p>
                                    <i class="bi bi-quote about-quote-icon-left"></i>
                                    <span>We trust them with our most critical projects. Their solutions bring measurable value and long-term impact to our business.</span>
                                </p>
                                <div class="d-flex text-start align-items-center">
                                    <img src="assets/img/users/user5.webp" class="testimonial-img" alt="">
                                    <div>
                                        <h3>Vikram Shah</h3>
                                        <h4>Founder, MedAI Labs</h4>
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

</section>
<?= $this->include('user/components/ContactForm.php'); ?>
<?= $this->endSection(); ?>

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>

<?= $this->endSection(); ?>