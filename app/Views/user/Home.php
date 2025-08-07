<!-- Layout init  -->
<?= $this->extend('user\layout\Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Home'; ?>
<?= $this->endSection() ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div class="hero-background">
        <!-- <img src="<?= base_url('assets/img/bg/bg-14.webp'); ?>" alt="" data-aos-duration="1000"> -->
        <video loop muted autoplay>
            <!-- <source src="https://mindtrilogy.com/assets/videos/vid2_2.mp4" type="video/mp4"> -->
            <source src="<?= base_url('assets/video/large.mp4'); ?>" type="video/mp4">
        </video>
        <div class="overlay"></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <span class="hero-badge">Digital Excellence</span>
                    <h1>Empowering Innovation Through Smart Technology</h1>
                    <p>We help businesses grow by delivering scalable software, cloud, data, and AI solutions. From consulting to execution, we’re your end-to-end digital transformation partner.</p>
                    <div class="hero-actions">
                        <a href="#services" class="btn-primary">Explore Services</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-secondary glightbox">
                            <i class="bi bi-play-circle"></i>
                            <span>Watch Demo</span>
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support Available</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="feature-card">
                                <i class="bi-people"></i>
                                <span>Dedicated Teams</span>
                            </div>
                            <div class="feature-card">
                                <i class="bi-cloud-check"></i>
                                <span>Cloud & DevOps</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <i class="bi-cpu"></i>
                                <span>AI-Powered Solutions</span>
                            </div>
                            <div class="feature-card">
                                <i class="bi-shield-lock"></i>
                                <span>Secure Development</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content">
                    <h2>Driving Digital Growth Through Trusted Expertise</h2>
                    <p class="lead">We are a technology consulting company that builds scalable, secure, and intelligent digital solutions to empower growing businesses worldwide.</p>
                    <p>Our vision is to become a globally recognized technology partner by delivering innovative, future-ready digital solutions that help clients accelerate growth, improve efficiency, and stay ahead of the competition in an ever-evolving tech landscape.</p>
                    <p>With a team of seasoned experts, we specialize in IT consulting, software development, cloud engineering, and AI-powered solutions. Our client-first approach and technical excellence ensure digital success across industries — from startups to enterprises.</p>

                    <div class="stats-container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="number">8+</div>
                                    <div class="label">Years Experience</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="number">450+</div>
                                    <div class="label">Projects Completed</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-item">
                                    <div class="number">25</div>
                                    <div class="label">Team Members</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cta-wrapper">
                        <a href="#portfolio" class="btn btn-primary">Discover Our Work</a>
                        <a href="#team" class="btn btn-outline">Meet Our Team</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img src="<?= base_url('assets/img/about/about-square-8.webp'); ?>" alt="About Us" class="img-fluid main-image">
                    <div class="floating-card">
                        <div class="card-content">
                            <i class="bi bi-award"></i>
                            <div class="text">
                                <h5>Excellence Award</h5>
                                <span>Digital Innovation 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /About Section -->

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

</section><!-- /Clients Section -->

<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section light-background">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Featured Services</h2>
        <p>Featured Srvices</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="services-content" data-aos-duration="900">
                    <span class="subtitle">Scalable Solutions</span>
                    <h2>Custom Technology Services That Drive Growth</h2>
                    <p data-aos-duration="800">From strategy to execution, we deliver end-to-end digital solutions including software development, cloud, AI, and automation — tailored to your goals, timelines, and technologies to maximize business impact.</p>
                    <div class="mt-4" data-aos-duration="1100">
                        <a href="#" class="btn-consultation"><span>Request a Consultation</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-image">
                    <img src="<?= base_url('assets/img/services/services-9.webp'); ?>" alt="Business Services" class="img-fluid">
                    <div class="shape-circle"></div>
                    <div class="shape-accent"></div>
                </div>
            </div>
        </div>

        <div class="row mt-5" data-aos-duration="1000">
            <div class="col-12">
                <div class="services-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "slidesPerView": 3,
                            "spaceBetween": 20,
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "navigation": {
                                "nextEl": ".swiper-nav-next",
                                "prevEl": ".swiper-nav-prev"
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "slidesPerView": 3
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-bar-chart-fill"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Financial Strategy Development</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">01</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Market Expansion Advisory</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">02</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Risk Management Solutions</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">03</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-lightbulb-fill"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Innovation &amp; Digital Transformation</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">04</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Talent Management Strategy</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">05</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="swiper-navigation">
                    <button class="swiper-nav-prev"><i class="bi bi-chevron-left"></i></button>
                    <button class="swiper-nav-next"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Featured Services Section -->

<!-- How We Work Section -->
<section id="how-we-work" class="how-we-work section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>How We Work</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-search"></i>
                </div>
                <div class="step-number">Step 1</div>
                <h3>Research &amp; Planning</h3>
                <p>Nulla facilisi morbi tempus iaculis urna id. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <div class="step-number">Step 2</div>
                <h3>Creative Solutions</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-gear"></i>
                </div>
                <div class="step-number">Step 3</div>
                <h3>Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-rocket-takeoff"></i>
                </div>
                <div class="step-number">Step 4</div>
                <h3>Launch &amp; Support</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
            </div>
        </div>

    </div>

</section><!-- /How We Work Section -->

<!-- Features Section -->
<section id="features" class="features section">

    <div class="container">

        <div class="row g-4">
            <div class="col-lg-4">
                <ul class="nav nav-tabs flex-column" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#features-tab-1" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Vestibulum ante ipsum</h4>
                                    <p>Proin iaculis purus consequat</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi bi-heart"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Curabitur aliquet quam</h4>
                                    <p>Nulla quis lorem ut libero</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi bi-house-heart"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Luna stride flared</h4>
                                    <p>Sed ut perspiciatis unde omnis</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi bi-person-heart"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Quisque Velit Nisi</h4>
                                    <p>Duis aute irure dolor in</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi bi-briefcase"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Curabitur Aliquet</h4>
                                    <p>Excepteur sint occaecat cupidatat</p>
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
                                    <h3>Nullam Lacinia Consectetur</h3>
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec velit
                                        neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                                    <p class="highlight">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Curabitur aliquet quam id dui posuere blandit</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Nulla quis lorem ut libero malesuada feugiat</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Vestibulum ac diam sit amet quam vehicula</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Donec rutrum congue leo eget malesuada</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/misc/misc-square-6.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Sed Porttitor Lectus Nibh</h3>
                                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.
                                        Vestibulum ante ipsum primis in faucibus.</p>
                                    <p class="highlight">Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero
                                        malesuada feugiat.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Vivamus suscipit tortor eget felis porttitor</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Curabitur aliquet quam id dui posuere</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Nulla quis lorem ut libero malesuada</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Vestibulum ac diam sit amet quam</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/misc/misc-square-13.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Praesent Sapien Massa</h3>
                                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                    <p class="highlight">Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula
                                        elementum sed sit amet dui.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Curabitur non nulla sit amet nisl</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Vestibulum ac diam sit amet quam</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Donec rutrum congue leo eget</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Nulla quis lorem ut libero</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/misc/misc-square-3.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Curabitur Aliquet Quam</h3>
                                    <p>Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit
                                        amet dui. Curabitur aliquet quam id dui posuere blandit.</p>
                                    <p class="highlight">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur
                                        non nulla sit amet nisl tempus.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Nulla quis lorem ut libero malesuada</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Curabitur aliquet quam id dui</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Vestibulum ac diam sit amet</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Donec rutrum congue leo</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/misc/misc-square-5.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="features-tab-5" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>Vestibulum Ante Ipsum</h3>
                                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut
                                        lacinia in, elementum id enim.</p>
                                    <p class="highlight">Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula
                                        elementum sed sit amet dui.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Vivamus suscipit tortor eget felis</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Curabitur aliquet quam id dui</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Nulla quis lorem ut libero</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Vestibulum ac diam sit amet</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/misc/misc-square-3.webp'); ?>" alt="" class="img-fluid" loading="lazy">
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

<!-- Services Section -->
<section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Services</h2>
        <p>CHECK OUR SERVICES</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 col-md-6">
                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Web Development</a></h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec rutrum congue leo eget malesuada.</p>
                        <div class="service-meta">
                            <span class="badge popular">Most Popular</span>
                            <span class="price">Starting at $2,999</span>
                        </div>
                        <a href="service-details.html" class="btn-cta">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details.html">UI/UX Design</a></h3>
                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                        <div class="service-meta">
                            <span class="price">Starting at $1,899</span>
                        </div>
                        <a href="service-details.html" class="btn-cta">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card compact">
                    <div class="service-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Digital Marketing</a></h3>
                        <p>Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                        <a href="service-details.html" class="btn-cta">
                            <span>Explore</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card compact">
                    <div class="service-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Security Solutions</a></h3>
                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar vel. Sed porttitor lectus nibh vestibulum ac diam sit.</p>
                        <a href="service-details.html" class="btn-cta">
                            <span>Discover</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card compact">
                    <div class="service-icon">
                        <i class="bi bi-cloud-upload"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Cloud Services</a></h3>
                        <p>Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                        <a href="service-details.html" class="btn-cta">
                            <span>Get Quote</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>

        </div>

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

</section><!-- /Services Section -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 justify-content-center">

            <!-- Basic Plan -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-item">
                    <div class="pricing-icon">
                        <i class="bi bi-star"></i>
                    </div>
                    <h3>Standard</h3>
                    <div class="price">
                        <span class="currency">$</span>9<span class="period">/month</span>
                    </div>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                    <ul class="features-list">
                        <li>
                            <i class="bi bi-check2"></i>
                            Vestibulum ante ipsum primis
                        </li>
                        <li>
                            <i class="bi bi-check2"></i>
                            Fusce vulputate eleifend
                        </li>
                        <li>
                            <i class="bi bi-check2"></i>
                            Nullam ac tortor vitae
                        </li>
                    </ul>
                    <a href="#" class="btn-pricing">Buy Now</a>
                </div>
            </div><!-- End Basic Plan -->

            <!-- Professional Plan -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-item featured">
                    <div class="pricing-badge">Recommended</div>
                    <div class="pricing-icon">
                        <i class="bi bi-stars"></i>
                    </div>
                    <h3>Professional</h3>
                    <div class="price">
                        <span class="currency">$</span>29<span class="period">/month</span>
                    </div>
                    <p class="description">Maecenas tempus tellus eget condimentum rhoncus semper.</p>
                    <ul class="features-list">
                        <li>
                            <i class="bi bi-check2"></i>
                            Donec quam felis ultricies
                        </li>
                        <li>
                            <i class="bi bi-check2"></i>
                            Aenean massa imperdiet
                        </li>
                        <li>
                            <i class="bi bi-check2"></i>
                            Cras dapibus vivamus
                        </li>
                    </ul>
                    <a href="#" class="btn-pricing">Buy Now</a>
                </div>
            </div><!-- End Professional Plan -->

            <!-- Ultimate Plan -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-item">
                    <div class="pricing-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h3>Ultimate</h3>
                    <div class="price">
                        <span class="currency">$</span>49<span class="period">/month</span>
                    </div>
                    <p class="description">Etiam rhoncus maecenas tempus tellus eget condimentum.</p>
                    <ul class="features-list">
                        <li>
                            <i class="bi bi-check2"></i>
                            Phasellus viverra nulla
                        </li>
                        <li>
                            <i class="bi bi-check2"></i>
                            Quisque rutrum aenean
                        </li>
                        <li>
                            <i class="bi bi-check2"></i>
                            Etiam ultricies nisi vel
                        </li>
                    </ul>
                    <a href="#" class="btn-pricing">Buy Now</a>
                </div>
            </div><!-- End Ultimate Plan -->

        </div>

    </div>

</section><!-- /Pricing Section -->

<!-- Faq Section -->
<section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="faq-wrapper">

                    <div class="faq-item faq-active">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Vestibulum ante ipsum primis in faucibus orci luctus?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Nulla facilisi morbi tempus iaculis urna id volutpat?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Praesent sapien massa, convallis a pellentesque nec?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                </div>

            </div>
        </div>

    </div>

</section><!-- /Faq Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section light-background">

    <div class="container">

        <div class="cta-wrapper">
            <div class="cta-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>

            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="cta-content p-5">
                        <span class="badge-custom">Premium Offer</span>
                        <h2 class="mt-4 mb-4">Transform Your Experience With Our Solution</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                        <div class="row benefits-row mb-5">
                            <div class="col-md-6">
                                <div class="benefit-item">
                                    <div class="icon-box">
                                        <i class="bi bi-lightning-charge-fill"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h5>Quick Setup</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="benefit-item">
                                    <div class="icon-box">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h5>Full Security</h5>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="action-buttons">
                            <a href="#" class="btn btn-primary">Start Now</a>
                            <a href="#" class="btn btn-outline">Learn More</a>
                            <div class="guarantee-badge">
                                <i class="bi bi-patch-check-fill"></i>
                                <span>30-Day Money Back</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="cta-image-container">
                        <img src="<?= base_url('assets/img/illustration/illustration-3.webp'); ?>" alt="Illustration" class="img-fluid main-image">
                        <div class="floating-element element-1">
                            <i class="bi bi-star-fill"></i>
                            <span>4.9 Rating</span>
                        </div>
                        <div class="floating-element element-2">
                            <i class="bi bi-people-fill"></i>
                            <span>10k+ Users</span>
                        </div>
                        <div class="pattern-dots"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Call To Action Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <div class="container">

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
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 1
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/person/person-m-9.webp" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/person/person-f-5.webp" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/person/person-f-12.webp" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/person/person-m-12.webp" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/person/person-m-13.webp" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center mt-4">
                    <ul class="portfolio-filters isotope-filters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-photography">Photography</li>
                        <li data-filter=".filter-design">Design</li>
                        <li data-filter=".filter-automotive">Automotive</li>
                        <li data-filter=".filter-nature">Nature</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container isotope-container">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/portfolio-portrait-1.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Capturing Moments</h4>
                            <p>Photography</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/portfolio-portrait-1.webp'); ?>" class="glightbox" title="Capturing Moments"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/portfolio-2.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Woodcraft Design</h4>
                            <p>Web Design</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/portfolio-2.webp'); ?>" class="glightbox" title="Woodcraft Design"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-automotive">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/portfolio-portrait-2.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Classic Beauty</h4>
                            <p>Automotive</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/portfolio-portrait-2.webp'); ?>" class="glightbox" title="Classic Beauty"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-nature">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/portfolio-portrait-4.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Natural Growth</h4>
                            <p>Nature</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/portfolio-portrait-4.webp'); ?>" class="glightbox" title="Natural Growth"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/portfolio-5.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Urban Stories</h4>
                            <p>Photography</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/portfolio-5.webp'); ?>" class="glightbox" title="Urban Stories"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/portfolio-6.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Digital Experience</h4>
                            <p>Web Design</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/portfolio-6.webp'); ?>" class="glightbox" title="Digital Experience"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->

<!-- Team Section -->
<section id="team" class="team section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="team-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                    },
                    "breakpoints": {
                        "576": {
                            "slidesPerView": 2
                        },
                        "992": {
                            "slidesPerView": 3
                        },
                        "1200": {
                            "slidesPerView": 4
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('ssets/img/person/person-m-3.webp'); ?>" class="img-fluid" alt="" loading="lazy">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Marcus Wilson</h3>
                            <span>Chief Technology Officer</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                        </div>
                    </div><!-- End Team Card -->
                </div><!-- End slide item -->

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/person/person-f-5.webp'); ?>" class="img-fluid" alt="" loading="lazy">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Sophia Reynolds</h3>
                            <span>Product Designer</span>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div><!-- End Team Card -->
                </div><!-- End slide item -->

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/person/person-m-8.webp'); ?>" class="img-fluid" alt="" loading="lazy">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Daniel Chen</h3>
                            <span>Marketing Specialist</span>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div><!-- End Team Card -->
                </div><!-- End slide item -->

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/person/person-f-9.webp'); ?>" class="img-fluid" alt="" loading="lazy">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Olivia Thompson</h3>
                            <span>Lead Developer</span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        </div>
                    </div><!-- End Team Card -->
                </div><!-- End slide item -->

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/person/person-m-12.webp'); ?>" class="img-fluid" alt="" loading="lazy">
                            <div class="team-overlay">
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>Jason Parker</h3>
                            <span>UI/UX Designer</span>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                        </div>
                    </div><!-- End Team Card -->
                </div><!-- End slide item -->

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>

</section><!-- /Team Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="contact-main-wrapper">
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="contact-content">
                <div class="contact-cards-container">
                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Location</h4>
                            <p>8721 Broadway Avenue, New York, NY 10023</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="036a6d656c43667b626e736f66606c6e73626d7a2d606c6e">[email&#160;protected]</a></p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Call</h4>
                            <p>+1 (212) 555-7890</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Open Hours</h4>
                            <p>Monday-Friday: 9AM - 6PM</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <h3>Get in Touch</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing.</p>

                    <form action="forms/contact.php" method="post" class="php-email-form">
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
                            <div class="social-links">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Contact Section -->
<?= $this->endSection(); ?>