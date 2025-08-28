<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Service'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/bg/bg-14.webp') ?>);">
    <div class="container position-relative">
        <h1>IT Consulting</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="current">IT Consulting</li>
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
                    <img src="https://bootstrapmade.com/content/demo/Passion/assets/img/services/services-7.webp" alt="" class="img-fluid">
                    <div class="service-badge">
                        <span>Premium Service</span>
                    </div>
                </div>

                <div class="service-content">
                    <div class="service-header">
                        <h2>Empowering Businesses Through Smart IT</h2>
                        <p class="service-intro">Our IT consulting services help businesses align technology with their goals. We provide expert advice, tailored strategies, and reliable solutions that boost performance, reduce risks, and unlock growth. With innovation at the core, we transform challenges into opportunities.</p>
                    </div>

                    <div class="service-features">
                        <h4>What You'll Get</h4>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Expert Guidance</h5>
                                        <p>Gain insights for smarter growth.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Secure Solutions</h5>
                                        <p>Protect data with advanced security.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Scalable Systems</h5>
                                        <p>Build technology that grows seamlessly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Dedicated Support</h5>
                                        <p>Always here to assist you.</p>
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
                                    <h5>Initial Consultation</h5>
                                    <p>We begin by understanding your business needs, challenges, and goals to design the most effective IT strategy tailored for you.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">02</div>
                                <div class="step-content">
                                    <h5>Strategic Planning</h5>
                                    <p>Our team outlines clear technology roadmaps, ensuring cost efficiency, scalability, and alignment with your company’s long-term objectives.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">03</div>
                                <div class="step-content">
                                    <h5>Implementation Support</h5>
                                    <p>We guide seamless deployment of chosen solutions, providing hands-on support to minimize disruption and maximize operational efficiency.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">04</div>
                                <div class="step-content">
                                    <h5>Continuous Optimization</h5>
                                    <p>Regular reviews and improvements keep your systems secure, efficient, and adaptable to evolving business and market demands.</p>
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
                            <a href="<?= base_url('services/IT_Consulting/IT_Strategy') ?>" class="menu-item ">
                                <i class="bi bi-arrow-right"></i>
                                <span>IT Strategy</span>
                            </a>
                            <a href="<?= base_url('services/IT_Consulting/Digital_Transformation') ?>" class="menu-item">
                                <i class="bi bi-arrow-right"></i>
                                <span>Digital Transformation</span>
                            </a>
                            <a href="<?= base_url('services/IT_Consulting/Tech_Assessments') ?>" class="menu-item">
                                <i class="bi bi-arrow-right"></i>
                                <span>Tech Assessments</span>
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

                    <div class="contact-card">
                        <div class="contact-content">
                            <h4>Need Help?</h4>
                            <p>Our team is here to guide you at every step. Whether you have questions, need expert advice, or want tailored solutions, we’re just a message away.</p>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span><a class="text-white" href="tel:+911234567890">+91 123 456 7890</a></span>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <span><a class="text-white" href="mailto:example@gmail.com">example@gmail.com</a></span>
                                </div>
                            </div>
                            <a href="<?= base_url('contact'); ?>" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>

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