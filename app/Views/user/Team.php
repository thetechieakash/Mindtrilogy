<!-- Layout init  -->
<?= $this->extend('user/layout/Layout.php'); ?>

<!-- Page title  -->
<?= $this->section('pageTitle'); ?>
<?= esc($pageTitle) ?? 'Team'; ?>
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
        <h1>Leadership Team</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="current">Team</li>
            </ol>
        </nav>
    </div>
</div>
<section>
    <div class="container section-title">
        <h2>Brains Behind the Vision</h2>
    </div>
    <div class="container">
        <!-- Swiper Carousel -->
        <div class="swiper leadership-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide team-slide" data-target="leader1">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user11.webp'); ?>" alt="CEO">
                        <div class="team-details">
                            <h5 class="mt-2">Ravi Nair</h5>
                            <p class="text-muted">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader2">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user6.webp'); ?>" alt="CTO">
                        <div class="team-details">
                            <h5 class="mt-2">Priya Desai</h5>
                            <p class="text-muted">Head of Product</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader3">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user12.webp'); ?>" alt="Security Lead">
                        <div class="team-details">
                            <h5 class="mt-2">Ankit Sharma</h5>
                            <p class="text-muted">Lead Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader4">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user7.webp'); ?>" alt="CEO">
                        <div class="team-details">
                            <h5 class="mt-2">Megha Kapoor</h5>
                            <p class="text-muted">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader5">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user10.webp'); ?>" alt="">
                        <div class="team-details">
                            <h5 class="mt-2">Amit Sinha</h5>
                            <p class="text-muted">Business Development Manager</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader1">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user11.webp'); ?>" alt="CEO">
                        <div class="team-details">
                            <h5 class="mt-2">Ravi Nair</h5>
                            <p class="text-muted">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader2">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user6.webp'); ?>" alt="CTO">
                        <div class="team-details">
                            <h5 class="mt-2">Priya Desai</h5>
                            <p class="text-muted">Head of Product</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader3">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user12.webp'); ?>" alt="Security Lead">
                        <div class="team-details">
                            <h5 class="mt-2">Ankit Sharma</h5>
                            <p class="text-muted">Lead Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader4">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user7.webp'); ?>" alt="CEO">
                        <div class="team-details">
                            <h5 class="mt-2">Megha Kapoor</h5>
                            <p class="text-muted">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide team-slide" data-target="leader5">
                    <div class="team-slide-el">
                        <img src="<?= base_url('assets/img/users/user10.webp'); ?>" alt="">
                        <div class="team-details">
                            <h5 class="mt-2">Amit Sinha</h5>
                            <p class="text-muted">Business Development Manager</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Leader Details -->
        <div class="leader-details mt-4 text-center">
            <div id="leader1" class="detail active">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/img/users/user11.webp'); ?>" class="img-fluid rounded" alt="Leader 1">
                    </div>
                    <div class="col-md-7">
                        <h2>Ravi Nair</h2>
                        <h6 class="text-success fw-bold">Chief Technology Officer</h6>
                        <p>Leads our tech strategy with deep expertise in scalable software architecture, DevOps, and enterprise cloud integrations.</p>
                        <table>
                            <tr>
                                <td class="detail-flag">Experience:</td>
                                <td class="detail-flag-info">10 Years</td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Email:</td>
                                <td class="detail-flag-info"><a href="mailto:info@company.com">info@company.com</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Phone:</td>
                                <td class="detail-flag-info"><a href="tel:++91123456789">+91 123 456 789</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Website:</td>
                                <td class="detail-flag-info"><a href="yourdomain.com" target="_blank"> yourdomain.com</a></td>
                            </tr>
                        </table>
                        <div class="social-links mt-3">
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="leader2" class="detail d-none">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/img/users/user6.webp'); ?>" class="img-fluid rounded" alt="Leader 1">
                    </div>
                    <div class="col-md-7">
                        <h2>Priya Desai</h2>
                        <h6>Head of Product</h6>
                        <p>Drives product vision, user experience, and agile development to ensure each solution meets business and customer goals.</p>
                        <table>
                            <tr>
                                <td class="detail-flag">Experience:</td>
                                <td class="detail-flag-info">10 Years</td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Email:</td>
                                <td class="detail-flag-info"><a href="mailto:info@company.com">info@company.com</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Phone:</td>
                                <td class="detail-flag-info"><a href="tel:++91123456789">+91 123 456 789</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Website:</td>
                                <td class="detail-flag-info"><a href="yourdomain.com" target="_blank"> yourdomain.com</a></td>
                            </tr>
                        </table>
                        <div class="social-links mt-3">
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="leader3" class="detail d-none">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/img/users/user12.webp'); ?>" class="img-fluid rounded" alt="Leader 1">
                    </div>
                    <div class="col-md-7">
                        <h2>Ankit Sharma</h2>
                        <h6 class="text-success fw-bold">Lead Software Engineer</h6>
                        <p>Expert in full-stack development, Ravi ensures high-quality coding standards and oversees project delivery across teams.</p>
                        <table>
                            <tr>
                                <td class="detail-flag">Experience:</td>
                                <td class="detail-flag-info">10 Years</td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Email:</td>
                                <td class="detail-flag-info"><a href="mailto:info@company.com">info@company.com</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Phone:</td>
                                <td class="detail-flag-info"><a href="tel:++91123456789">+91 123 456 789</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Website:</td>
                                <td class="detail-flag-info"><a href="yourdomain.com" target="_blank"> yourdomain.com</a></td>
                            </tr>
                        </table>
                        <div class="social-links mt-3">
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="leader4" class="detail d-none">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/img/users/user7.webp'); ?>" class="img-fluid rounded" alt="Leader 1">
                    </div>
                    <div class="col-md-7">
                        <h2>Megha Kapoor</h2>
                        <h6 class="text-success fw-bold">UI/UX Designer</h6>
                        <p>Designs intuitive, user-friendly interfaces that blend functionality with aesthetics to improve product engagement and usability.</p>
                        <table>
                            <tr>
                                <td class="detail-flag">Experience:</td>
                                <td class="detail-flag-info">10 Years</td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Email:</td>
                                <td class="detail-flag-info"><a href="mailto:info@company.com">info@company.com</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Phone:</td>
                                <td class="detail-flag-info"><a href="tel:++91123456789">+91 123 456 789</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Website:</td>
                                <td class="detail-flag-info"><a href="yourdomain.com" target="_blank"> yourdomain.com</a></td>
                            </tr>
                        </table>
                        <div class="social-links mt-3">
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="leader5" class="detail d-none">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/img/users/user10.webp'); ?>" class="img-fluid rounded" alt="Leader 1">
                    </div>
                    <div class="col-md-7">
                        <h2>Amit Sinha</h2>
                        <h6 class="text-success fw-bold">Business Development Manager</h6>
                        <p>Builds strong client relationships, identifies growth opportunities, and helps align our solutions with client business objectives.</p>
                        <table>
                            <tr>
                                <td class="detail-flag">Experience:</td>
                                <td class="detail-flag-info">10 Years</td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Email:</td>
                                <td class="detail-flag-info"><a href="mailto:info@company.com">info@company.com</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Phone:</td>
                                <td class="detail-flag-info"><a href="tel:++91123456789">+91 123 456 789</a></td>
                            </tr>
                            <tr>
                                <td class="detail-flag">Website:</td>
                                <td class="detail-flag-info"><a href="yourdomain.com" target="_blank"> yourdomain.com</a></td>
                            </tr>
                        </table>
                        <div class="social-links mt-3">
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-7">
                <h4 class="exp-heading">Biography</h4>
                <p class="exp-para">Our leadership team brings deep expertise and vision to drive sustainable growth. With decades of experience across industries, we focus on innovation, collaboration, and delivering real value to clients worldwide.</p>
                <div class="team-highlight">
                    <div class="team-item">
                        <div class="team-number">10+</div>
                        <div class="team-label">Years Experience</div>
                    </div>
                    <div class="team-item">
                        <div class="team-number">90%</div>
                        <div class="team-label">Customer Satisfaction</div>
                    </div>
                    <div class="team-item">
                        <div class="team-number">100+</div>
                        <div class="team-label">Projects Completed</div>
                    </div>
                </div>
                <h4 class="exp-heading">Working Skills</h4>
                <p class="exp-para">We combine strong technical capabilities with people-driven skills to ensure success at every level. From problem-solving to customer engagement, our team adapts quickly to evolving challenges.</p>
                <div class="progress-wrapper">
                    <div class="progress-container">
                        <div class="progress-top">
                            <h6>Technical Skills</h6>
                            <span>95%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-top">
                            <h6>Analytical Skills</h6>
                            <span>90%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-top">
                            <h6>Soft Skills</h6>
                            <span>80%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-top">
                            <h6>Customer Service Skills</h6>
                            <span>70%</span>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <form action="#" method="post" id="contactform" class="php-email-form">
                    <h4 class="text-white">Quick Contact</h4>
                    <p class="text-white">Feel free to contact us!</p>
                    <!-- <h3 class="contact-form-title">Contact form</h3> -->
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
<script>
    var swiper = new Swiper(".leadership-carousel", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3, // Center + side slides visible
        spaceBetween: 50,
        initialSlide: 0,
        slideToClickedSlide: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1.5,
            slideShadows: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            600: {
                slidesPerView: 3
            }
        },
        loop: true,
    });
    // On init → show the correct details
    swiper.on('init', function() {
        let activeSlide = swiper.slides[swiper.activeIndex];
        let target = activeSlide.dataset.target;
        document.querySelectorAll('.leader-details .detail').forEach(d => d.classList.add('d-none'));
        document.getElementById(target).classList.remove('d-none');
    });

    // On slide change → update details
    swiper.on('slideChange', function() {
        let realIndex = swiper.realIndex; // Always correct even with loop
        let target = swiper.slides[swiper.activeIndex].dataset.target;

        document.querySelectorAll('.leader-details .detail').forEach(d => d.classList.add('d-none'));
        document.getElementById(target).classList.remove('d-none');
    });

    // Run init manually (since Swiper 7+ doesn’t auto fire)
    swiper.init();
</script>
<?= $this->endSection(); ?>