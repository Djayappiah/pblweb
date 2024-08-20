@extends('frontend.layout.main')
@section('content')


<div class="page-title-area item-bg2 jarallax" data-jarallax="{" speed":="" 0.3}"="">
    <div class="container">
        <div class="page-title-content">
            <h2>Our Current Accounts</h2>
            <p>Explore Our Options <i class="fas fa-arrow-down" style="color: yellow"></i></p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="single-blog.html">
                            <img src="{{ asset('/frontend/images/about-img1.jpg') }}" alt="image">
                        </a>

                        <div class="date">
                            <i class="far fa-user"></i> Current Accounts
                        </div>
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">Current Accounts</a></h3>


                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="single-blog.html">
                            <img src="{{ asset('/frontend/images/about-img1.jpg') }}" alt="image">
                        </a>

                        <div class="date">
                            <i class="far fa-user"></i> University Staff Current Accounts
                        </div>
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html">University Staff Current Accounts(USCA)</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="blog-image">
                        <a href="single-blog.html">
                            <img src="{{ asset('/frontend/images/about-img1.jpg') }}" alt="image">
                        </a>

                        <div class="date">
                            <i class="far fa-calendar-alt"></i> Foreign Currency & Foreign  Exchange Accounts
                        </div>
                    </div>

                    <div class="blog-post-content">
                        <h3><a href="single-blog.html"></a>Foreign Currency & Foreign  Exchange Accounts</h3>


                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

                        <a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="row">
          

            <div class="col-lg-12 col-md-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required="" data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-map"><img src="images/bg-map.png" alt="image"></div>
</section>

@endsection