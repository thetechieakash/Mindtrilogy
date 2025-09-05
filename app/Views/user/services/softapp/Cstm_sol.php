<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Custom Solutions'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/bg/bg-14.webp') ?>);">
    <div class="container position-relative">
        <h1>Custom Solutions</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('services'); ?>">Services</a></li>
                <li><a href="<?= base_url('services/Softwere_Apps'); ?>">Softwere &amp; Apps</a></li>
                <li class="current">Custom Solutions</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

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
<section class="rs-services-details-area rs-services-details section-space-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="services-details-thumb-wrapper">
                    <div class="services-details-thumb">
                        <img src="<?= base_url('assets/img/services/sec/cusol1.webp') ?>" alt="image">
                    </div>
                    <div class="services-details-thumb">
                        <img src="<?= base_url('assets/img/services/sec/cusol2.webp') ?>" alt="image">
                    </div>
                </div>
                <div class="services-details-wrapper">
                    <div class="services-details-left">
                        <div class="services-details-content">
                            <h3 class="services-details-title rs-split-text-enable split-in-left">Services Details</h3>
                            <p class="services-details-description">Our custom solutions are built to address your unique business challenges. From automation to integration, we deliver scalable, secure, and future-proof systems that align with your goals and industry needs.</p>
                        </div>
                    </div>
                    <div class="services-details-right">
                        <div class="services-details-list">
                            <div class="rs-list-item">
                                <ul>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Built for your specific requirements.
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Expands as your business evolves.
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Works smoothly with your tools.
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Designed for long-term sustainability.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How We Work Section -->
<section id="how-we-work" class="how-we-work section">
    <div class="container section-title">
        <h2>Our Simple Process</h2>
        <p>We follow a clear, step-by-step approach that ensures smooth execution, from discovery to delivery, helping your business achieve sustainable growth.</p>
    </div>
    <div class="container">

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="step-number">Step 1</div>
                <h3>Consultation</h3>
                <p>We start by analyzing your business goals, challenges, and opportunities to craft a solution roadmap.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="step-number">Step 2</div>
                <h3>Planning</h3>
                <p>We design system architecture, define milestones, and align development strategy with your vision.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="fas fa-code"></i>
                </div>
                <div class="step-number">Step 3</div>
                <h3>Development</h3>
                <p>Using agile practices, we create and refine your solution with continuous feedback and improvements.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="step-number">Step 4</div>
                <h3>Launch</h3>
                <p>Deployment with training, testing, and ongoing support to ensure smooth adoption and efficiency.</p>
            </div>
        </div>

    </div>

</section><!-- /How We Work Section -->
<section class="rs-about-area section-space rs-about-six">

    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-11 mb-5">
                <div class="section-title-wrapper d-flex align-middle justify-content-center">
                    <span class="divider-line"></span>
                    <h2>Answers to Your Key Questions</h2>
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
                    <p class="about-description">We understand businesses have questions before investing in custom solutions. Here’s how we ensure clarity and trust.</p>
                    <div class="about-content-bottom">
                        <div class="rs-accordion-three">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionExampleOne">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="accordion-title">Why should I choose custom solutions?</span>
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
                                                Custom solutions provide flexibility, remove unnecessary features, and are tailored to your workflow, ensuring efficiency.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="accordion-title">How long will it take to develop?</span>
                                                <span class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                        <path
                                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#headingTwo">
                                            <div class="accordion-body">Project timelines vary by complexity, usually between 2–6 months, with transparent updates throughout.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span class="accordion-title">Can it integrate with my current systems?</span>
                                                <span class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                        <path
                                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#headingThree">
                                            <div class="accordion-body">Absolutely. We specialize in building solutions that seamlessly connect with your existing tools, APIs, and databases.</div>
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
<?= $this->include('user/components/ContactForm'); ?>
<?= $this->endSection(); ?>

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>
<?= $this->endSection(); ?>