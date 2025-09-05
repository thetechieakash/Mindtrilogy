<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Cloud & Devops'; ?>
<?= $this->endSection() ?>

<!-- Css library  -->
<?= $this->section('csslib'); ?>
<?= $this->endSection(); ?>

<!-- Main content  -->
<?= $this->section('content'); ?>
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/bg/bg-14.webp') ?>);">
    <div class="container position-relative">
        <h1>Cloud &amp; Devops</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('services'); ?>">Services</a></li>
                <li class="current">Cloud &amp; Devops</li>
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
                    <img src="<?= base_url('assets/img/services/cloud-devops.webp') ?>" alt="" class="img-fluid">
                    <div class="service-badge">
                        <span>Premium Service</span>
                    </div>
                </div>

                <div class="service-content">
                    <div class="service-header">
                        <h2>Empowering Growth with Cloud & DevOps</h2>
                        <p class="service-intro">Cloud & DevOps services accelerate innovation by streamlining infrastructure, automating workflows, and ensuring scalability. We help businesses modernize operations, reduce downtime, and deliver faster, more reliable digital experiences.</p>
                    </div>

                    <div class="service-features">
                        <h4>What You'll Get</h4>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Faster Delivery</h5>
                                        <p>Speed up releases with automation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Cost Savings</h5>
                                        <p>Optimize infrastructure expenses.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>High Security</h5>
                                        <p>Protect systems with best practices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h5>Scalable Systems</h5>
                                        <p>Grow seamlessly with demand.</p>
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
                                    <h5>Assessment</h5>
                                    <p>We evaluate your current infrastructure and identify gaps for cloud adoption or DevOps transformation.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">02</div>
                                <div class="step-content">
                                    <h5>Planning</h5>
                                    <p>Define roadmap, choose cloud providers, and design CI/CD or IaC solutions tailored to your business.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">03</div>
                                <div class="step-content">
                                    <h5>Implementation</h5>
                                    <p>Deploy and configure cloud platforms, pipelines, and automation tools with minimal downtime.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">04</div>
                                <div class="step-content">
                                    <h5>Optimization</h5>
                                    <p>Monitor, fine-tune, and scale to improve performance, cost, and security continuously.</p>
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
                            <a href="<?= base_url('services/Cloud_Devops/Cloud_Migration') ?>" class="menu-item ">
                                <i class="bi bi-arrow-right"></i>
                                <span>Cloud Migration</span>
                            </a>
                            <a href="<?= base_url('services/Cloud_Devops/CI_CD_Pipeline') ?>" class="menu-item">
                                <i class="bi bi-arrow-right"></i>
                                <span>CI/CD Pipeline</span>
                            </a>
                            <a href="<?= base_url('services/Cloud_Devops/Infrastructure_as_Code') ?>" class="menu-item">
                                <i class="bi bi-arrow-right"></i>
                                <span>Infrastructure as Code</span>
                            </a>
                        </div>
                    </div>

                    <div class="service-info">
                        <h4>Service Details</h4>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">Duration:</span>
                                <span class="info-value">2-6 months</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Team Size:</span>
                                <span class="info-value">3-6 specialists</span>
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