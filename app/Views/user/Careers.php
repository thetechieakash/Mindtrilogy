<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Careers'; ?>
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
        <h1>Careers</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="current">Careers</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Page Title -->
<section>
    <div class="container section-title pb-4">
        <h2>Join Our Growing Team</h2>
        <p>Be part of an innovative and collaborative workplace where your skills matter. We empower talent, encourage growth, and provide opportunities to shape the future.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h3 class="formheader">Search Jobs</h3>
                <form class="row  g-3 align-items-center" id="getcareers">
                    <div class="col-12 col-md-6">
                        <label class="visually-hidden" for="keyword">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="keyword" placeholder="Job title">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                        <select class="form-select" id="inlineFormSelectPref">
                            <option selected>Choose Location...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-2 text-center">
                        <button type="submit" class="btn cstm btn-outline">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-8">
                <div class="card job-card">
                    <div class="card-body">
                        <a href="#" class="job-title">Software Engineert</a>
                        <p class="job-add">Bangalore/Bengaluru, Delhi / NCR, Mumbai (All Areas)</p>
                        <p class="job-info">Design, develop, and maintain scalable applications while collaborating with cross-functional teams.</p>
                    </div>
                </div>
                <div class=" card job-card">
                    <div class="card-body">
                        <a href="#" class="job-title">UI/UX Designer</a>
                        <p class="job-add">All area</p>
                        <p class="job-info">Create engaging, user-friendly designs that elevate digital experiences across platforms.</p>
                    </div>
                </div>
                <div class=" card job-card">
                    <div class="card-body">
                        <a href="#" class="job-title">Project Manager</a>
                        <p class="job-add">All area</p>
                        <p class="job-info">Oversee projects from initiation to delivery, ensuring quality and timely execution.</p>
                    </div>
                </div>
                <div class=" card job-card">
                    <div class="card-body">
                        <a href="#" class="job-title">Business Analyst</a>
                        <p class="job-add">All area</p>
                        <p class="job-info">Analyze client needs, define requirements, and bridge communication between stakeholders and developers.</p>
                    </div>
                </div>
                <div class=" card job-card">
                    <div class="card-body">
                        <a href="#" class="job-title">Digital Marketing Specialist</a>
                        <p class="job-add">All area</p>
                        <p class="job-info">Plan and execute campaigns, manage social media, and optimize strategies for growth</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-3">
                <form action="#" method="post" id="contactform" class="php-email-form">
                    <h4 class="text-white">Apply Job</h4>
                    <div class="form-group mt-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="tel" class="form-control" name="mob" id="mob" placeholder="Mobile no." required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="file" class="form-control" name="cv" id="formFileMultiple" accept="application/pdf" />
                    </div>
                    <div class="form-submit text-end mt-3">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>

<!-- Js Library -->
<?= $this->section('jslib'); ?>
<?= $this->endSection(); ?>

<!-- Custom Js code -->
<?= $this->section('customjs'); ?>

<?= $this->endSection(); ?>