<x-layout>

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="caption header-text">
                        <h6>Workaholics</h6>
                        <div class="line-dec"></div>
                        <h4>Any Job <em>You Can</em> Possibly <span>Think Of</span></h4>
                        <p>Hire the best freelancers for any job, online.
                            Post a Job, Choose Freelancer, Pay safely, we're here to help

                        <div class="second-button"><a href="#categories">Check our Categories</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="projects section" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Discover Our <em>Categories</em> &amp; <span>Earn</span></h2>
                        <div class="line-dec"></div>
                        <p>Find the talent needed to get your business growing.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-5">
            <div class="row px-5">
                <!-- CATEGORY SECTION -->
                @foreach ($categories as $category)
                <div class="col-md-3 mb-3">
                    <article class="card bg-dark text-center text-white border-0 rounded-0 mb-18">
                        <img class="card-img rounded-0 img-fluid"
                            src="https://source.unsplash.com/random/600x800?{{$category['name']}}"
                            alt="post-thumb">
                        <div class="card-img-overlay">
                            <div class="card-content">
                                <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">{{$category['name']}}</a></h4>
                                <a class="btn btn-outline-light" href="/login">Explore</a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading">
                                <h2>We Provide <em>Different Services</em> &amp;
                                    <span>Features</span> For Your Growth
                                </h2>
                                <div class="line-dec"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{ asset('img/services-01.jpg') }}" alt="discover SEO"
                                        class="templatemo-feature">
                                </div>
                                <h4>Connect to experienced freelancers</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{ asset('img/services-02.jpg') }}" alt="data analysis"
                                        class="templatemo-feature">
                                </div>
                                <h4>powerful workspace</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{ asset('img/services-03.jpg') }}" alt="precise data"
                                        class="templatemo-feature">
                                </div>
                                <h4>Expertise, when you need it</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="{{ asset('img/services-04.jpg') }}" alt="SEO marketing"
                                        class="templatemo-feature">
                                </div>
                                <h4>Manage teamwork &amp; boost productivity</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="infos section" id="infos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <img src="{{ asset('img/left-infos.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <h2>More <em>About Us</em> &amp; What <span>We Offer</span></h2>
                                    <div class="line-dec"></div>
                                    <p>Work with the largest network of independent professionals and get things
                                        done—from quick turnarounds to big transformations.</p>
                                </div>
                                <div class="skills">
                                    <div class="skill-slide marketing">
                                        <div class="fill"></div>
                                        <h6>Satisfaction level</h6>
                                        <span>90%</span>
                                    </div>
                                    <div class="skill-slide digital">
                                        <div class="fill"></div>
                                        <h6>Client's Reviews</h6>
                                        <span>80%</span>
                                    </div>
                                    <div class="skill-slide media">
                                        <div class="fill"></div>
                                        <h6>Freelancer's Reviews</h6>
                                        <span>95%</span>
                                    </div>
                                </div>
                                <p class="more-info">Meet clients you’re excited to work with and take
                                    your career or business to new heights. One of the advantages of utilizing
                                    freelancers is finding
                                    talent with different skills quickly as out needs change.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-us-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div id="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                                        width="100%" height="670px" frameborder="0"
                                        style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form id="contact-form" action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-heading">
                                                <h2><em>Contact Us</em> &amp; Get In <span>Touch</span></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name"
                                                    placeholder="Your Name..." autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="surname" name="surname" id="surname"
                                                    placeholder="Your Surname..." autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="email" id="email"
                                                    pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..."
                                                    required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="subject" name="subject" id="subject"
                                                    placeholder="Subject..." autocomplete="on">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="orange-button">Send
                                                    Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                                <div class="more-info">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-item">
                                                <i class="fa fa-phone"></i>
                                                <h4><a href="#">010-020-0340</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-item">
                                                <i class="fa fa-envelope"></i>
                                                <h4><a href="#">info@workaholis.com</a></h4>
                                                <h4><a href="#">hr@workaholis.com</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-item">
                                                <i class="fa fa-map-marker"></i>
                                                <h4><a href="#">National University of Science and Technology,
                                                        Islamabad, pakistan</a></h4>
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
    </div>
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2022 <a href="#">Workaholics</a>. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</x-layout>
