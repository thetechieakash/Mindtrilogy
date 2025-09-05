<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Softwere & Apps'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/bg/bg-14.webp') ?>);">
    <div class="container position-relative">
        <h1>Softwere &amp; Apps</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('services'); ?>">Services</a></li>
                <li class="current">Softwere &amp; Apps</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Service Details Section -->
<section id="service-details" class="service-details section">

    <div class="container">

        <div class="row gy-5">

            <div class="col-lg-8">
                <div class="service-hero">
                    <img src="<?= base_url('assets/img/services/softapps.webp') ?>" alt="" class="img-fluid">
                    <div class="service-badge">
                        <span>Premium Service</span>
                    </div>
                </div>

                <div class="service-content">
                    <div class="service-header">
                        <h2>Building Smart, Scalable Applications</h2>
                        <p class="service-intro">We deliver custom-built web and mobile applications designed to enhance performance, scalability, and user experience. Our solutions combine innovation, agility, and security to support business growth.</p>
                    </div>

                    <div class="service-features">
                        <h4>What You'll Get</h4>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Modern Web Apps</h5>
                                        <p>Fast, responsive, and secure web applications tailored to your business needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Mobile First</h5>
                                        <p>Seamless iOS and Android apps that engage users anywhere.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Custom Solutions</h5>
                                        <p>Tailored software built to match unique workflows and industry requirements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Future Ready</h5>
                                        <p>Scalable, cloud-ready systems designed for long-term success.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-process">
                        <h4>Our Process</h4>
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">01</div>
                                <div class="step-content">
                                    <h5>Planning</h5>
                                    <p>We gather requirements, understand your goals, and design a roadmap for your project.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">02</div>
                                <div class="step-content">
                                    <h5>Designing</h5>
                                    <p>User-friendly wireframes and UI designs crafted to deliver great experiences.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">03</div>
                                <div class="step-content">
                                    <h5>Development</h5>
                                    <p>Agile development with best coding practices for reliability and scalability.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">04</div>
                                <div class="step-content">
                                    <h5>Deployment</h5>
                                    <p>Seamless launch with support, monitoring, and future improvements.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-gallery">
                        <h4>Project Showcase</h4>
                        <div class="row gy-3">
                            <div class="col-md-4">
                                <img src="https://bootstrapmade.com/content/demo/Passion/assets/img/services/services-2.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="https://bootstrapmade.com/content/demo/Passion/assets/img/services/services-8.webp" alt="" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4">
                                <img src="https://bootstrapmade.com/content/demo/Passion/assets/img/services/services-11.webp" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-sidebar">

                    <div class="service-menu">
                        <h4>Our Services</h4>
                        <div class="menu-list">
                            <!-- active -->
                            <a href="<?= base_url('services/Softwere_Apps/Web_Development') ?>" class="menu-item ">
                                <i class="bi bi-arrow-right"></i>
                                <span>Web Development</span>
                            </a>
                            <a href="<?= base_url('services/Softwere_Apps/Mobile_Apps') ?>" class="menu-item">
                                <i class="bi bi-arrow-right"></i>
                                <span>Mobile Apps</span>
                            </a>
                            <a href="<?= base_url('services/Softwere_Apps/Custom_Solutions') ?>" class="menu-item">
                                <i class="bi bi-arrow-right"></i>
                                <span>Custom Solutions</span>
                            </a>
                        </div>
                    </div>

                    <div class="service-info">
                        <h4>Service Details</h4>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">Duration:</span>
                                <span class="info-value">3-6 months</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Team Size:</span>
                                <span class="info-value">2-6 specialists</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Delivery:</span>
                                <span class="info-value">Bi-weekly reports</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Support:</span>
                                <span class="info-value">24/7 monitoring</span>
                            </div>
                        </div>
                    </div>

                    <?= $this->include('user/components/Helpbox'); ?>

                </div>
            </div>

        </div>

    </div>


</section><!-- /Service Details Section -->
<?= $this->endSection(); ?>

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>
<?= $this->endSection(); ?>