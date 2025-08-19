<section id="contactsec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-md-flex justify-content-between align-items-center gap-5 mb-4">
                <h1 class="cs-header">Let's talk about a project, collaboration or an idea you may have</h1>
                <a href="#" class="cr">
                    <svg viewBox='0 0 200 200' width='200' height='200' xmlns='http://www.w3.org/2000/svg' class="cr__svg" aria-labelledby="cr1-title cr1-desc">
                        <title id="cr1-title">Come quick and click this</title>
                        <desc id="cr1-desc">A rotating cr with text placed around a circle with an arrow inside</desc>
                        <path id="cr-circle" class="cr__path" d="M 20, 100 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0" stroke="none" fill="none" />
                        <path class="cr__arrow" d="M 75 100 L 125 100 L 110 85 M 125 100 L 110 115" fill="none" />
                        <text class="cr__text">
                            <textPath href="#cr-circle" stroke="none">
                                one stop digital solutions.
                            </textPath>
                        </text>
                    </svg>
                </a>

            </div>
            <div class="col-12 col-md-7">
                <form action="#" method="post" id="contactform" class="php-email-form">
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