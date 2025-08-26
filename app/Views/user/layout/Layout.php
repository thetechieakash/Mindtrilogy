<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $this->renderSection('pageTitle'); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="robots" content="noindex, nofollow">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/logo/favicon.png'); ?>" rel="icon">
    <link href="<?= base_url('assets/img/logo/favicon.png'); ?>" rel="apple-touch-icon">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('vendor/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- <link href="<?= base_url('vendor/bootstrap-icon/bootstrap-icons.css'); ?>" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url('vendor/glightbox/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?= $this->renderSection('csslib'); ?>

    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/custom.css') . '?v1.3.2'; ?>" rel="stylesheet">
    <?= $this->renderSection('custompagecss'); ?>

</head>

<body class="index-page">

    <header id="header" class="header fixed-top">

        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:example@email.com">example@email.com</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        <a href="tel:+911234567890">+91 123 456 7890</a>
                    </i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="<?= base_url('assets/img/logo/logo66.png'); ?>" class="" alt="">
                    <!-- <h1 class="sitename">Passion</h1> -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <?php
                        $url = uri_string();
                        ?>
                        <li><a href="<?= empty($url) ? "#hero" : base_url(); ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#about">
                                <span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                            <ul>
                                <li><a href="<?= base_url('about_us') ?>">Who We Are</a></li>
                                <li><a href="<?= base_url('team') ?>">Leadership Team</a></li>
                                <li><a href="<?= base_url('approach') ?>">Our Approach</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Life at Mindtrilogy</a></li>
                            </ul>
                        </li>

                        <!-- Megamenu 2 -->
                        <li class="megamenu-2">
                            <a href="#services">
                                <span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>

                            <!-- Mobile Megamenu -->
                            <ul class="mobile-megamenu">

                                <li class="dropdown"><a href="#">
                                        <span>IT Consulting</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">IT Strategy</a></li>
                                        <li><a href="#">Digital Transformation</a></li>
                                        <li><a href="#">Tech Assessments</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">
                                        <span>Software & Apps</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">Web Development</a></li>
                                        <li><a href="#">Mobile Apps</a></li>
                                        <li><a href="#">Custom Solutions</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">
                                        <span>Cloud & DevOps</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">Cloud Migration</a></li>
                                        <li><a href="#">CI/CD Pipeline</a></li>
                                        <li><a href="#">Infrastructure as Code</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">
                                        <span>Data & AI Solutions</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">Business Intelligence</a></li>
                                        <li><a href="#">Machine Learning</a></li>
                                        <li><a href="#">Data Engineering</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">
                                        <span>CRM / ERP</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">Salesforce</a></li>
                                        <li><a href="#">SAP</a></li>
                                        <li><a href="#">Zoho, HubSpot, etc.</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">
                                        <span>QA & Automation</span>
                                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">Manual Testing</a></li>
                                        <li><a href="#">Automation Tools</a></li>
                                        <li><a href="#">Performance Testing</a></li>
                                    </ul>
                                </li>


                            </ul><!-- End Mobile Megamenu -->

                            <!-- Desktop Megamenu -->
                            <div class="desktop-megamenu">

                                <div class="tab-navigation">
                                    <ul class="nav nav-tabs flex-column" id="2190-megamenu-tabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="2190-tab-1-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-1" type="button" role="tab" aria-controls="2190-tab-1" aria-selected="true">
                                                <i class="bi-person-gear"></i>
                                                <span>IT Consulting</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="2190-tab-2-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-2" type="button" role="tab" aria-controls="2190-tab-2" aria-selected="false">
                                                <i class="bi-code-slash"></i>
                                                <span>Software & Apps</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="2190-tab-3-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-3" type="button" role="tab" aria-controls="2190-tab-3" aria-selected="false">
                                                <i class="bi-cloud-arrow-up"></i>
                                                <span>Cloud & DevOps</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="2190-tab-4-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-4" type="button" role="tab" aria-controls="2190-tab-4" aria-selected="false">
                                                <i class="bi-cpu"></i>
                                                <span>Data & AI Solutions</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="2190-tab-5-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-5" type="button" role="tab" aria-controls="2190-tab-5" aria-selected="false">
                                                <i class="bi-diagram-3"></i>
                                                <span>CRM / ERP</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="2190-tab-6-tab" data-bs-toggle="tab" data-bs-target="#2190-tab-6" type="button" role="tab" aria-controls="2190-tab-6" aria-selected="false">
                                                <i class="bi-ui-checks-grid"></i>
                                                <span>QA & Automation</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">

                                    <!-- IT Consulting Tab -->
                                    <div class="tab-pane fade show active" id="2190-tab-1" role="tabpanel" aria-labelledby="2190-tab-1-tab">
                                        <div class="content-grid">
                                            <div class="product-section">
                                                <div class="product-list">
                                                    <a href="#" class="product-link">
                                                        <i class="bi-diagram-3"></i>
                                                        <div>
                                                            <span>IT Strategy</span>
                                                            <small>Align tech with business goals</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-lightning-charge"></i>
                                                        <div>
                                                            <span>Digital Transformation</span>
                                                            <small>Modernize systems and workflows</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-bar-chart-line"></i>
                                                        <div>
                                                            <span>Tech Assessments</span>
                                                            <small>Evaluate infrastructure and tools</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="featured-banner">
                                            <div class="banner-content">
                                                <img src="<?= base_url('assets/img/misc/misc-7.webp'); ?>" alt="Enterprise Solutions" class="banner-image">
                                                <div class="banner-info">
                                                    <h5>Enterprise Package</h5>
                                                    <p>Comprehensive business management solution with advanced features and 24/7 support.</p>
                                                    <a href="#" class="cta-btn">Get Started <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Software & Apps Tab -->
                                    <div class="tab-pane fade" id="2190-tab-2" role="tabpanel" aria-labelledby="2190-tab-2-tab">
                                        <div class="content-grid">
                                            <div class="product-section">
                                                <!-- <h4>Code &amp; Build</h4> -->
                                                <div class="product-list">
                                                    <a href="#" class="product-link">
                                                        <i class="bi-window-sidebar"></i>
                                                        <div>
                                                            <span>Web Development</span>
                                                            <small>Build responsive web platforms</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-phone"></i>
                                                        <div>
                                                            <span>Mobile Apps</span>
                                                            <small>Native & cross-platform mobile apps</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-puzzle"></i>
                                                        <div>
                                                            <span>Custom Solutions</span>
                                                            <small>Tailored software for unique needs</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="featured-banner">
                                            <div class="banner-content">
                                                <img src="<?= base_url('assets/img/misc/misc-12.webp'); ?>" alt="Development Tools" class="banner-image">
                                                <div class="banner-info">
                                                    <h5>Developer Suite</h5>
                                                    <p>Complete toolkit for modern development teams with integrated CI/CD pipelines.</p>
                                                    <a href="#" class="cta-btn">Explore Tools <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Cloud & DevOps Tab -->
                                    <div class="tab-pane fade" id="2190-tab-3" role="tabpanel" aria-labelledby="2190-tab-3-tab">
                                        <div class="content-grid">
                                            <div class="product-section">
                                                <div class="product-list">
                                                    <a href="#" class="product-link">
                                                        <i class="bi-cloud-upload"></i>
                                                        <div>
                                                            <span>Cloud Migration</span>
                                                            <small>Move systems to the cloud</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-arrow-repeat"></i>
                                                        <div>
                                                            <span>CI/CD Pipeline</span>
                                                            <small>Automate code deployment workflows</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-terminal"></i>
                                                        <div>
                                                            <span>Infrastructure as Code</span>
                                                            <small>Scripted and scalable infrastructure</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="featured-banner">
                                            <div class="banner-content">
                                                <img src="assets/img/misc/misc-5.webp" alt="Creative Suite" class="banner-image">
                                                <div class="banner-info">
                                                    <h5>Creative Pro</h5>
                                                    <p>Everything you need for creative projects, from concept to final production.</p>
                                                    <a href="#" class="cta-btn">Start Creating <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Data & AI Solutions Tab -->
                                    <div class="tab-pane fade" id="2190-tab-4" role="tabpanel" aria-labelledby="2190-tab-4-tab">
                                        <div class="content-grid">
                                            <div class="product-section">
                                                <div class="product-list">
                                                    <a href="#" class="product-link">
                                                        <i class="bi-graph-up"></i>
                                                        <div>
                                                            <span>Business Intelligence</span>
                                                            <small>Data-driven business decision-making</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-cpu"></i>
                                                        <div>
                                                            <span>Machine Learning</span>
                                                            <small>Predictive insights with smart models</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-hdd-network"></i>
                                                        <div>
                                                            <span>Data Engineering</span>
                                                            <small>Build reliable data pipelines</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- CRM / ERP Tab -->
                                    <div class="tab-pane fade" id="2190-tab-5" role="tabpanel" aria-labelledby="2190-tab-5-tab">
                                        <div class="content-grid">
                                            <div class="product-section">
                                                <div class="product-list">
                                                    <a href="#" class="product-link">
                                                        <i class="fab fa-salesforce pt-3"></i>
                                                        <div>
                                                            <span>Salesforce</span>
                                                            <small>CRM automation and customization</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-building"></i>
                                                        <div>
                                                            <span>SAP</span>
                                                            <small>Enterprise resource planning solutions</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-stack"></i>
                                                        <div>
                                                            <span>Zoho, HubSpot, etc.</span>
                                                            <small>Flexible CRM tools integration</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- QA & Automation Tab -->
                                    <div class="tab-pane fade" id="2190-tab-6" role="tabpanel" aria-labelledby="2190-tab-6-tab">
                                        <div class="content-grid">
                                            <div class="product-section">
                                                <div class="product-list">
                                                    <a href="#" class="product-link">
                                                        <i class="bi-check2-square"></i>
                                                        <div>
                                                            <span>Manual Testing</span>
                                                            <small>Hands-on functional test coverage</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-gear-wide-connected"></i>
                                                        <div>
                                                            <span>Automation Tools</span>
                                                            <small>Speed testing with automation tools</small>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="product-link">
                                                        <i class="bi-speedometer2"></i>
                                                        <div>
                                                            <span>Performance Testing</span>
                                                            <small>Ensure speed and reliability</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div><!-- End Desktop Megamenu -->

                        </li><!-- End Megamenu 2 -->

                        <li class="dropdown">
                            <a href="#staffaugmentation">
                                <span>Staff Augmentation</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                            <ul>
                                <li><a href="#">Hire Dedicated Developers</a></li>
                                <li><a href="#">Remote Teams</a></li>
                                <li><a href="#">Hire by Technology</a></li>
                                <li><a href="#">Engagement Models</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#industries">
                                <span>Industries</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                            <ul>
                                <li><a href="#">Healthcare</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Publishing & Media</a></li>
                                <li><a href="#">Manufacturing</a></li>
                            </ul>
                        </li>

                        <li><a href="#contact">Contact</a></li>

                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <main class="main">
        <!-- Main content slot -->
        <?= $this->renderSection('content'); ?>

    </main>

    <footer id="footer" class="footer position-relative dark-background pb-4 pb-md-0">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="row justify-justify-content-evenly align-items-center">
                    <div class="col-12 col-md-9 footer-about">
                        <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                            <img src="<?= base_url('assets/img/logo/logo66.png'); ?>" class="" alt="">
                        </a>
                        <p>We are committed to delivering innovative digital solutions that drive results. With expert teams and a client-first approach, we help businesses thrive in the modern tech landscape.</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-start justify-content-md-evenly gy-4">
                    <div class="col-lg-2 col-md-4 col-6 footer-links">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="<?= base_url('about_us') ?>">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Industries</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 footer-links">
                        <h4>Insights</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">News & Updates</a></li>
                            <li><a href="#">Whitepapers</a></li>
                            <li><a href="#">Webinars</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 footer-links">
                        <h4>Work / Case Studies</h4>
                        <ul>
                            <li><a href="#">Case Studies</a></li>
                            <li><a href="#">Success Stories</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 footer-links">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 footer-contact text-center text-md-start ">
                        <h4>Contact Us</h4>
                        <p>AJC Bose road</p>
                        <p>Kolkata,100005</p>
                        <p>West Bengal, India</p>
                        <p class="mt-4"><strong>Phone:</strong> <span><a class="text-white" href="tel:+911234567890">+91 123 456 7890</a></span></p>
                        <p><strong>Email:</strong>
                            <span><a class="text-white" href="mailto:example@gmail.com">example@gmail.com</a></span>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="px-md-5 copyright text-center mt-4 d-flex flex-column flex-md-row justify-content-between">
            <p>&copy; Copyright <strong class="px-1 sitename"><a class="com-name" href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo/favicon.png') ?>" alt="small logo">MINDTRILOGY</a></strong> <span>All Rights Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="javasript:void(0)" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('vendor/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/validate/validate.js'); ?>"></script>
    <script src="<?= base_url('vendor/glightbox/glightbox.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/purecounter_vanilla/purecounter_vanilla.js'); ?>"></script>
    <script src="<?= base_url('vendor/swiper/swiper-bundle.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/isotope/isotope.pkgd.min.js'); ?>"></script>
    <?= $this->renderSection('jslib'); ?>

    <!-- Main JS File -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <?= $this->renderSection('customjs'); ?>
</body>

</html>