<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Home'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<!-- Hero Section -->
<section id="hero" class="hero section dark-background top-hero">

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
                            <span class="stat-number">100+</span>
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
    <!-- Section Title -->
    <div class="container section-title">
        <h2>About Us</h2>
        <p>Who we are</p>
    </div><!-- End Section Title -->
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
                                    <div class="number">100+</div>
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

<!-- Features Section -->
<section id="services" class="features section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Services</h2>
        <p>Services we provide</p>
    </div><!-- End Section Title -->
    <div class="container">

        <div class="row g-4">
            <div class="col-lg-4">
                <ul class="nav nav-tabs flex-column" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#features-tab-1" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi-person-gear"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>IT Consulting</h4>
                                    <p>Empowering Your Digital Vision</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi-code-slash"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Software & App Development</h4>
                                    <p>Turning Ideas Into Reality</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi-cloud-arrow-up"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Cloud & DevOps</h4>
                                    <p>Accelerating Digital Transformation</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi-cpu"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>Data & AI Solutions</h4>
                                    <p>Unlocking Insights That Matter</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi-diagram-3"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>CRM / ERP Solutions</h4>
                                    <p>Streamlining Business Operations</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6" role="tab">
                            <div class="d-flex align-items-center">
                                <div class="icon-box">
                                    <i class="bi-ui-checks-grid"></i>
                                </div>
                                <div class="ms-3">
                                    <h4>QA & Automation</h4>
                                    <p>Ensuring Excellence Every Time</p>
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
                                    <h3>IT Consulting</h3>
                                    <p>Our IT consulting service guides your business through strategic technology decisions, ensuring growth, efficiency, and a competitive edge in the evolving market.</p>
                                    <p class="highlight">We align technology solutions with your business goals, optimizing processes and reducing risks while improving innovation and operational performance.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Strategic technology planning</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Business process optimization</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Risk and compliance guidance</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Innovation-driven solutions</span>
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
                                    <h3>Software & App Development</h3>
                                    <p>We create custom software and mobile applications tailored to your unique needs, delivering high performance, security, and excellent user experiences.</p>
                                    <p class="highlight">From concept to deployment, our agile development process ensures rapid delivery without compromising quality or scalability.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Custom application design</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Agile development process</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>High-performance architecture</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Scalable and secure solutions</span>
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
                                    <h3>Cloud & DevOps</h3>
                                    <p>Our cloud and DevOps solutions streamline operations, enhance scalability, and reduce costs through automation and modern infrastructure strategies.</p>
                                    <p class="highlight">We help businesses migrate, manage, and optimize cloud environments while improving deployment speed and system reliability.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Cloud migration support</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Continuous integration & delivery</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Automated infrastructure management</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Cost optimization strategies</span>
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
                                    <h3>Data & AI Solutions</h3>
                                    <p>Our AI-powered solutions help businesses leverage data for smarter decisions, predictive analytics, and personalized customer experiences.</p>
                                    <p class="highlight">From data collection to visualization, we ensure secure, accurate, and meaningful insights to drive business growth.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Predictive analytics tools</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Data visualization dashboards</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Machine learning solutions</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Secure data processing</span>
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

                    <div class="tab-pane fade" id="features-tab-5" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>CRM / ERP Solutions</h3>
                                    <p>We implement CRM and ERP platforms like Salesforce and SAP to centralize business data and enhance productivity.</p>
                                    <p class="highlight">Our solutions help automate workflows, improve customer engagement, and provide real-time visibility across operations.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Salesforce & SAP expertise</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Automated workflow systems</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Centralized data management</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Real-time performance tracking</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/details/5.webp'); ?>" alt="" class="img-fluid" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="features-tab-6" role="tabpanel">
                        <div class="content-box">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h3>QA & Automation</h3>
                                    <p>Our QA and automation services identify bugs early, ensuring top-quality software performance before and after launch.</p>
                                    <p class="highlight">Automated testing boosts speed, reduces costs, and maintains consistent quality in your digital products.</p>
                                    <ul class="features-list">
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Automated test scripting</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Manual QA testing</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Performance and load testing</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Continuous quality monitoring</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="image-box">
                                        <img src="<?= base_url('assets/img/details/6.webp'); ?>" alt="" class="img-fluid" loading="lazy">
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

<!-- How We Work Section -->
<section id="how-we-work" class="how-we-work section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>How We Work</h2>
        <p>Our Proven Process to Deliver Scalable Digital Solutions</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-search"></i>
                </div>
                <div class="step-number">Step 1</div>
                <h3>Discover Needs</h3>
                <p>We begin by understanding your business challenges, goals, and technical needs through collaborative discussions and in-depth requirements gathering.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <div class="step-number">Step 2</div>
                <h3>Plan Strategy</h3>
                <p>Our team creates a custom solution roadmap, timelines, and milestones tailored to your objectives, industry standards, and future scalability.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-gear"></i>
                </div>
                <div class="step-number">Step 3</div>
                <h3>Build Solutions</h3>
                <p>We design, develop, and test the solution using modern technologies, agile methodologies, and continuous feedback to ensure optimal delivery.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="bi bi-rocket-takeoff"></i>
                </div>
                <div class="step-number">Step 4</div>
                <h3>Deliver & Support</h3>
                <p>We launch with precision and offer ongoing maintenance, enhancements, and support to ensure long-term success and performance of your solution.
                </p>
            </div>
        </div>

    </div>

</section><!-- /How We Work Section -->

<!-- Services Section -->
<section id="staffaugmentation" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Staff Augmentation</h2>
        <p>CHECK OUR SERVICES</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 col-md-6">
                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="bi-person-badge"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="<?= base_url('service'); ?>">Hire Dedicated Developers</a></h3>
                        <p>We provide skilled, dedicated developers who work exclusively on your projects, ensuring full focus, high productivity, and timely delivery.</p>
                        <div class="service-meta">
                            <span class="badge popular">Most Popular</span>
                        </div>
                        <a href="#" class="btn-cta">
                            <span>Hire Now</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi-people"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="<?= base_url('service'); ?>">Remote Teams</a></h3>
                        <p>Build remote teams tailored to your needs, combining global talent, flexible collaboration, and cost-efficient operations for maximum business impact.</p>
                        <a href="<?= base_url('service'); ?>" class="btn-cta">
                            <span>Build Your Team</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi-laptop"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="<?= base_url('service'); ?>">Hire by Technology</a></h3>
                        <p>Choose experts in specific technologies to match your project requirements, ensuring precise skills, quality code, and faster product development.</p>
                        <a href="#" class="btn-cta">
                            <span>Find Experts</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="service-bg"></div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi-diagram-3"></i>
                    </div>
                    <div class="service-content">
                        <h3><a href="<?= base_url('service'); ?>">Engagement Models</a></h3>
                        <p>Select from flexible engagement models like fixed price, hourly, or dedicated to suit your budget, timeline, and project complexity.</p>
                        <a href="<?= base_url('service'); ?>" class="btn-cta">
                            <span>Explore Models</span>
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
                        <div class="stat-number">100+</div>
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


<!-- Featured Services Section -->
<section id="industries" class="featured-services section light-background">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Industries</h2>
        <p>Empowering Growth</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="services-content" data-aos-duration="900">
                    <span class="subtitle">Across Sectors</span>
                    <h2>Innovative Solutions for Every Industry</h2>
                    <p data-aos-duration="800">We deliver tailored technology solutions designed to meet the unique needs of diverse industries. From healthcare to manufacturing, our expertise drives innovation, efficiency, and sustainable growth for businesses in competitive markets worldwide.</p>
                    <div class="mt-4" data-aos-duration="1100">
                        <a href="#" class="btn-consultation"><span>Explore Industries</span><i class="bi bi-arrow-right"></i></a>
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
                                    <i class="bi-heart-pulse"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Healthcare</a></h4>
                                    <p>Transform healthcare with secure, efficient, and innovative digital solutions that enhance patient care, streamline workflows, and ensure compliance with industry standards.</p>
                                    <div class="service-number">01</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi-cash-stack"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Finance</a></h4>
                                    <p>Deliver secure, scalable, and compliant financial technology solutions to improve transactions, boost operational efficiency, and protect customer data.</p>
                                    <div class="service-number">02</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi-bag-check"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">eCommerce</a></h4>
                                    <p>Build engaging, fast, and secure eCommerce platforms that enhance customer experience, improve conversions, and scale with your business growth.</p>
                                    <div class="service-number">03</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi-mortarboard"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Education</a></h4>
                                    <p>Create innovative e-learning solutions that improve accessibility, engagement, and outcomes for students, educators, and institutions worldwide.</p>
                                    <div class="service-number">04</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi-newspaper"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Publishing & Media</a></h4>
                                    <p>Provide cutting-edge media solutions to manage, publish, and distribute content across platforms for maximum reach and engagement.</p>
                                    <div class="service-number">05</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi-gear"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Manufacturing</a></h4>
                                    <p>Enhance manufacturing processes with automation, data-driven insights, and smart solutions for greater productivity and reduced costs.</p>
                                    <div class="service-number">06</div>
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

<!-- Faq Section -->
<section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Answers to Common Questions About Our Services and Process</p>
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
                            <h4>What services do you offer?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>We provide IT consulting, software development, cloud solutions, AI, CRM/ERP, and QA services tailored for businesses of all sizes.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>How do I get started?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Simply contact us through our form, book a free consultation, or request a quote directly from the website.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Do you offer custom pricing?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Yes, we tailor pricing based on project scope, timelines, and complexity. Flexible packages are available.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Can I hire remote developers?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Absolutely. We offer staff augmentation and dedicated remote teams based on your tech requirements.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Is support included in plans?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>All plans include support. Higher tiers get priority response, dedicated managers, and faster resolution times.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->

                </div>

            </div>
        </div>

    </div>

</section><!-- /Faq Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">
    <div class="container section-title">
        <h2>Testimonials</h2>
        <p>Hear from our clients about how we’ve helped them achieve success.</p>
    </div>
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
                            <span>Their cloud and DevOps expertise helped us scale quickly and stay ahead of competitors.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/users/user3.webp" class="testimonial-img" alt="">
                        <h3>Aarav Mehta</h3>
                        <h4>CTO, FinEdge Solutions</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Outstanding delivery quality and excellent communication throughout our custom software development project.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/users/user1.webp" class="testimonial-img" alt="">
                        <h3>Sneha Reddy</h3>
                        <h4>Product Manager, EduSphere</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>They delivered a fully secure healthcare platform with flawless execution and support.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/users/user4.webp" class="testimonial-img" alt="">
                        <h3>Rohan Kapoor</h3>
                        <h4>CEO, HealthBridge Technologies</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Their CRM integration improved our workflow and customer experience dramatically.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/users/user2.webp" class="testimonial-img" alt="">
                        <h3>Neha Joshi</h3>
                        <h4>Operations Head, RetailSync</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>The AI models they built gave us insights we never imagined possible.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/users/user5.webp" class="testimonial-img" alt="">
                        <h3>Vikram Shah</h3>
                        <h4>Founder, MedAI Labs</h4>
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
        <p>Transforming Ideas Into Reality</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center mt-2">
                    <ul class="portfolio-filters isotope-filters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-photography">Design</li>
                        <li data-filter=".filter-design">Features</li>
                        <li data-filter=".filter-automotive">Cool</li>
                        <li data-filter=".filter-nature">UI &amp; UX</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container isotope-container">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/1.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Smooth UI</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/1.webp'); ?>" class="glightbox" title="Capturing Moments"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/2.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Woodcraft Design</h4>
                            <p>Web Design</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/2.webp'); ?>" class="glightbox" title="Woodcraft Design"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-automotive">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/4.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Classic Beauty</h4>
                            <p>Automotive</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/4.webp'); ?>" class="glightbox" title="Classic Beauty"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-nature">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/6.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Natural Growth</h4>
                            <p>Nature</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/6.webp'); ?>" class="glightbox" title="Natural Growth"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/5.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Urban Stories</h4>
                            <p>Photography</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/5.webp'); ?>" class="glightbox" title="Urban Stories"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url('assets/img/portfolio/3.webp'); ?>" class="img-fluid" alt="Portfolio Image" loading="lazy">
                        <div class="portfolio-info">
                            <h4>Digital Experience</h4>
                            <p>Web Design</p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/portfolio/3.webp'); ?>" class="glightbox" title="Digital Experience"><i class="bi bi-zoom-in"></i></a>
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
        <p>Driven by Experts. Built by Passion</p>
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
                            <img src="<?= base_url('assets/img/users/user11.webp'); ?>" class="img-fluid" alt="" loading="lazy">
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
                            <h3>Ravi Nair</h3>
                            <span>Chief Technology Officer</span>
                            <p>Leads our tech strategy with deep expertise in scalable software architecture, DevOps, and enterprise cloud integrations.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/users/user6.webp'); ?>" class="img-fluid" alt="" loading="lazy">
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
                            <h3>Priya Desai</h3>
                            <span>Head of Product</span>
                            <p>Drives product vision, user experience, and agile development to ensure each solution meets business and customer goals.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/users/user12.webp'); ?>" class="img-fluid" alt="" loading="lazy">
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
                            <h3>Ankit Sharma</h3>
                            <span>Lead Software Engineer</span>
                            <p>Expert in full-stack development, Ravi ensures high-quality coding standards and oversees project delivery across teams.</p>
                        </div>
                    </div><!-- End Team Card -->
                </div><!-- End slide item -->

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/users/user7.webp'); ?>" class="img-fluid" alt="" loading="lazy">
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
                            <h3>Megha Kapoor</h3>
                            <span>UI/UX Designer</span>
                            <p>Designs intuitive, user-friendly interfaces that blend functionality with aesthetics to improve product engagement and usability.</p>
                        </div>
                    </div><!-- End Team Card -->
                </div><!-- End slide item -->

                <div class="swiper-slide">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="<?= base_url('assets/img/users/user10.webp'); ?>" class="img-fluid" alt="" loading="lazy">
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
                            <h3>Amit Sinha</h3>
                            <span>Business Development Manager</span>
                            <p>Builds strong client relationships, identifies growth opportunities, and helps align our solutions with client business objectives.</p>
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
        <p>Let’s Build Something Great Together</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="contact-main-wrapper">
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3123.6137305387574!2d88.3486188!3d22.541652899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276561af736df%3A0x32589994002c17db!2sAcharya%20Jagdish%20Chandra%20Bose%20Rd%2C%20Kolkata%2C%20West%20Bengal!5e1!3m2!1sen!2sin!4v1755000102201!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="contact-content">
                <div class="contact-cards-container">
                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Location</h4>
                            <p>AJC Bose road,Kolkata,100005</p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p><a href="mailto:info@mindtrilogy.com">info@mindtrilogy.com</a></p>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Call</h4>
                            <p>+91 123 456 7890</p>
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
                    <p>We'd love to hear from you! Whether you have questions, project ideas, or just want to explore possibilities, our team is here to help you every step of the way.</p>

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

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>
<?= $this->endSection(); ?>