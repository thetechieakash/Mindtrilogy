<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Web Development'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/bg/bg-14.webp') ?>);">
    <div class="container position-relative">
        <h1>Web Development</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('services'); ?>">Services</a></li>
                <li><a href="<?= base_url('services/Softwere_Apps'); ?>">Softwere &amp; Apps</a></li>
                <li class="current">Web Development</li>
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
                        <img src="<?= base_url('assets/img/services/sec/webdev1.webp') ?>" alt="image">
                    </div>
                    <div class="services-details-thumb">
                        <img src="<?= base_url('assets/img/services/sec/webdev2.webp') ?>" alt="image">
                    </div>
                </div>
                <div class="services-details-wrapper">
                    <div class="services-details-left">
                        <div class="services-details-content">
                            <h3 class="services-details-title rs-split-text-enable split-in-left">Services Details</h3>
                            <p class="services-details-description">We provide responsive, scalable, and secure web development solutions tailored to your business. Our focus is on building fast, modern websites that deliver outstanding performance and engaging user experiences.</p>
                        </div>
                    </div>
                    <div class="services-details-right">
                        <div class="services-details-list">
                            <div class="rs-list-item">
                                <ul>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Works seamlessly across devices.
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Optimized speed for smooth browsing.
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Built with data protection in mind.
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        Grows alongside your business.
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
        <p>We follow a streamlined, transparent, and collaborative approach to ensure your website is delivered on time with quality and precision.</p>
    </div>
    <div class="container">

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="step-number">Step 1</div>
                <h3>Discovery</h3>
                <p>Understanding your goals, target audience, and unique needs to create the right foundation.</p>
                <div class="step-arrow">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <i class="fas fa-pencil-ruler"></i>
                </div>
                <div class="step-number">Step 2</div>
                <h3>Design</h3>
                <p>Creating engaging wireframes and intuitive UI for a smooth user experience.</p>
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
                <p>Writing clean, scalable, and secure code using modern frameworks.</p>
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
                <p>Deploying your website with testing, optimization, and ongoing support.</p>
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
                    <p class="about-description">We know clients often have important questions before starting. Here are answers to some of the most common ones.</p>
                    <div class="about-content-bottom">
                        <div class="rs-accordion-three">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionExampleOne">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="accordion-title">What types of websites do you build?</span>
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
                                                We build business websites, eCommerce platforms, portfolios, custom portals, and more—tailored to meet your business objectives.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="accordion-title">How long does it take to build a website?</span>
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
                                            <div class="accordion-body">On average, 1–3 months depending on complexity, features, and design requirements.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span class="accordion-title">Do you provide maintenance after launch?</span>
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
                                            <div class="accordion-body">Yes, we offer continuous support, updates, and performance monitoring to ensure your site runs smoothly.</div>
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