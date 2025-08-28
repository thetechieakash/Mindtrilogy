<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Details'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<?= $this->section('custompagecss'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/pages/about.css' . '?v1.1.1'); ?>">
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>

<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
    <div class="container position-relative">
        <h1>About Us</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="current">About us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Page Title -->
<!-- about area start -->
<section class="rs-about-area section-space rs-about-six">

    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-11 mb-5">
                <div class="section-title-wrapper d-flex align-middle justify-content-center">
                    <span class="divider-line"></span>
                    <h2>Where Ideas Meet Innovation</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-xxl-center  g-5">
            <div class="col-xl-5 col-lg-5">
                <div class="about-thumb rs-image scroll_reveal reveal-active" data-dir="reveal_left">
                    <img src="<?= base_url('assets/img/sections/about-thumb-08.png') ?>" alt="image">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about-content-wrapper mt-lg-5">
                    <p class="about-description">
                        We are a team of passionate innovators and problem-solvers, committed to delivering technology-driven solutions that empower businesses, transform industries, and create lasting value for our clients.
                    </p>
                    <div class="about-content-bottom">
                        <div class="rs-accordion-three">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionExampleOne">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="accordion-title">Our History</span>
                                                <span class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                        <path
                                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                                Since our founding, we’ve grown through innovation and strong client partnerships, becoming a trusted provider of digital solutions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="accordion-title">Our Mission</span>
                                                <span class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                        <path
                                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">
                                                Our mission is to create scalable, reliable, and impactful solutions that empower businesses and drive sustainable growth.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients Section -->
<section id="clients" class="clients section">
    <div>
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

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-1.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-2.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-3.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-4.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-5.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-6.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-1.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-2.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-3.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-4.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-5.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

                <div class="swiper-slide">
                    <div class="client-logo">
                        <img src="<?= base_url('assets/img/clients/clients-6.webp'); ?>" class="img-fluid" alt="">
                    </div>
                </div><!-- End Client Item -->

            </div>

        </div>

    </div>

</section>
<!-- /Clients Section -->
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

</section><!-- /Testimonials Section -->

<!-- about area end -->
<section id="" class="services section light-background">
    <div class="container">
        <div class="stats-highlight">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number counter" data-target="500" data-suffix="+">0</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number counter" data-target="98" data-suffix="%">0</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item ">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support Available</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-number counter" data-target="5" data-suffix="+">0</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Contact form component  -->
<?= $this->include('user/components/ContactForm'); ?>

<?= $this->endSection(); ?>

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>
<script>
    const counters = document.querySelectorAll('.counter');
    const speed = 500;

    // Function to animate one counter
    function animateCounter(counter) {
        const target = +counter.getAttribute('data-target');
        const suffix = counter.getAttribute('data-suffix') || '';
        const count = +counter.innerText.replace(/\D/g, ''); // remove non-digits
        const inc = Math.ceil(target / speed);

        if (count < target) {
            counter.innerText = Math.min(count + inc, target) + suffix;
            setTimeout(() => animateCounter(counter), 10);
        } else {
            counter.innerText = target + suffix;
        }
    }

    // Intersection Observer setup
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                if (counter.hasAttribute('data-target') && !counter.classList.contains('started')) {
                    counter.classList.add('started'); // prevent re-trigger
                    animateCounter(counter);
                }
            }
        });
    }, {
        threshold: 1
    }); // start when 50% visible

    // Observe all counters
    counters.forEach(counter => observer.observe(counter));
</script>
<?= $this->endSection(); ?>