@extends('frontend.layout.main')
@section('content')

    <!-- Start Main Banner Area -->
    <div class="banner-slider-eight owl-carousel owl-theme">
        <div class="main-banner jarallax" data-jarallax="{" speed":="" 0.3}"="">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <h1>Easy, fee-free banking for entrepreneurs</h1>
                            <p>Get the financial tools and insights to start, build, and grow your business.</p>
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner jarallax bg-8" data-jarallax="{" speed":="" 0.3}"="">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content">
                            <h1>International Currency Transfer Provider</h1>
                            <p>Get the financial tools and insights to start, build, and grow your business.</p>
                            <a href="#" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Featured Boxes Area -->
    <section class="featured-boxes-area">
        <div class="container">
            <div class="featured-boxes-inner">
                <div class="row m-0">
                    <div class="col-lg-2 col-sm-6 col-md-6 p-0" style="width:20%;">
                        <div class="single-featured-box">
                            <div class="icon color-fb7756">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M12.37 5.379l-5.64 5.64c-.655.655-1.515.982-2.374.982-1.855 0-3.356-1.498-3.356-3.356 0-.86.327-1.721.981-2.375l5.54-5.539c.487-.487 1.125-.731 1.765-.731 2.206 0 3.338 2.686 1.765 4.259l-4.919 4.919c-.634.634-1.665.634-2.298 0-.634-.633-.634-1.664 0-2.298l3.97-3.97.828.828-3.97 3.97c-.178.177-.178.465 0 .642.177.178.465.178.642 0l4.919-4.918c1.239-1.243-.636-3.112-1.873-1.874l-5.54 5.54c-.853.853-.853 2.24 0 3.094.854.852 2.24.852 3.093 0l5.64-5.64.827.827zm.637-5.379c.409.609.635 1.17.729 2h7.264v11.543c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-8.062c-.63.075-1 .13-2-.133v10.195h10.189c3.163 0 9.811-7.223 9.811-9.614v-14.386h-9.993zm4.993 6h-3.423l-.793.793-.207.207h4.423v-1zm0 3h-6.423l-1 1h7.423v-1zm0 3h-9.423l-.433.433c-.212.213-.449.395-.689.567h10.545v-1z"/></svg>                            </div>

                            <h3>Tarrif Guide</h3>
                            {{-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> --}}

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-md-6 p-0" style="width:20%;">
                        <div class="single-featured-box">
                            <div class="icon color-facd60">
                                {{-- <i class="flaticon-check-mark"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M24 3.875l-6 1.221 1.716 1.708-5.351 5.358-3.001-3.002-7.336 7.242 1.41 1.418 5.922-5.834 2.991 2.993 6.781-6.762 1.667 1.66 1.201-6.002zm0 16.125v2h-24v-20h2v18h22z"/></svg>
                            </div>

                            <h3> Rates</h3>
                            {{-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> --}}

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-md-6 p-0" style="width:20%;">
                        <div class="single-featured-box">
                            <div class="icon color-1ac0c6">
                                {{-- <i class="flaticon-wallet"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M0 8v-3c0-1.105.895-2 2-2h20c1.104 0 2 .895 2 2v3h-24zm24 3v8c0 1.104-.896 2-2 2h-20c-1.105 0-2-.896-2-2v-8h24zm-15 6h-6v1h6v-1zm3-2h-9v1h9v-1zm9 0h-3v1h3v-1z"/></svg>
                            </div>

                            <h3>Prepaid Card Portal</h3>
                            {{-- <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> --}}

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-md-6 p-0" style="width:20%;">
                        <div class="single-featured-box">
                            <div class="icon">
                                {{-- <i class="flaticon-shield"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M11 9c1.361-5.928 8-7 8-7v-2l4 3.982-4 4.018v-2s-5.102-.104-8 3zm5 1h-10v1h10v-1zm3 .835v2.708c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-20h10.741c1.176-.758 2.35-1.242 3.259-1.541v-.459h-16v24h10.189c3.163 0 9.811-7.223 9.811-9.614v-5.561l-2 2.01zm-13 3.165h10v-1h-10v1zm3.609-7h-3.609v1h3.266l.343-1z"/></svg>
                            </div>

                            <h3>Form Downloads</h3>
                            {{-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> --}}

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-md-6 p-0" style="width:20%;">
                        <div class="single-featured-box">
                            <div class="icon">
                                {{-- <i class="flaticon-shield"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M21.169 19.754c.522-.79.831-1.735.831-2.754 0-2.761-2.238-5-5-5s-5 2.239-5 5 2.238 5 5 5c1.019 0 1.964-.309 2.755-.832l2.831 2.832 1.414-1.414-2.831-2.832zm-4.169.246c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-4.89 2h-7.11l2.599-3h2.696c.345 1.152.976 2.18 1.815 3zm-2.11-5h-10v-17h22v12.11c-.574-.586-1.251-1.068-2-1.425v-8.685h-18v13h8.295c-.19.634-.295 1.305-.295 2zm-2.131-4.372l.945-5.759.965 4.145c.096.425.686.473.847.063l.895-2.328.479.974c.08.169.164.277.438.277h1.208v-.877h-.921l-.836-1.624c-.156-.364-.677-.356-.82.014l-.741 1.895-1.144-5.062c-.052-.232-.242-.346-.43-.346-.2 0-.4.127-.44.373l-.948 5.847-.969-3.6c-.109-.43-.715-.455-.853-.029l-.721 2.545h-.823v.864h1.172c.16 0 .334-.13.38-.284l.406-1.257 1.043 4.206c.117.468.791.437.868-.037z"/></svg>
                            </div>

                            <h3>Annual Reports</h3>
                            {{-- <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p> --}}

                            <a href="features-1.html" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Boxes Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70 pt-0" style="margin-top:6.5%;">
            <div class="section-title">
                <p> LATEST NEWS</p>
            </div>

			<div class="container">
				<div class="section-title">
					<h2>Stay Up To Date</h2>
					<div class="bar"></div>
				</div>

				<div class="row" >
                    @foreach ($blogs as $blog)
                    
                    <div class="col-lg-4 col-md-6">
						<div style="width: 26rem; height: 32rem; padding:0;" class="single-blog-post">
							<div  style="width:100%; height:60%; position: relative;">
								<a href="single-blog.html">
									<img style="width: 100%; height:100%" src="{{Storage::disk('s3')->url('uploads/' . $blog->thumbnail)}}" alt="image">
								</a>

								<div class="date" style="
                                position: absolute;
                                left: 20px;
                                bottom: -20px;
                                background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%);
                                color: #ffffff;
                                padding: 10px 16px 8px;
                                border-radius: 50px;
                                font-size: 13px;">
									<i class="far fa-calendar-alt"></i> {{\Carbon\Carbon::parse($blog->created_at)->format('F d, Y')}}
								</div>
							</div>

							<div class="blog-post-content">
                    
								<h6 style="font-weight: 600"><a href="single-blog.html">{{$blog->title}}</a></h6>
                                <span>by <a href="#">Prudential Bank Ghana</a></span>

                                 <p>{!! substr(strip_tags($blog->body),0,60) !!}{!! strlen($blog->body) > 50 ? "..." : "" !!}</p> 

								<a href="{{ route('blogdetails',  $blog->slug) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>
        <!-- End Blog Area -->

    <!-- Start Services Area -->
    {{-- <section class="services-area ptb-70">
        <div class="container-fluid p-0">
            <div class="overview-box">
                <div class="overview-content">
                    <div class="content left-content">
                        <h2>Freelancers, entrepreneurs, and sole traders</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <ul class="services-list">
                            <li><span><i class="flaticon-check-mark"></i> Free plan available</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Full data privacy compliance</span></li>
                            <li><span><i class="flaticon-check-mark"></i> 100% transparent costs</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Commitment-free</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Real-time spending overview</span></li>
                            <li><span><i class="flaticon-check-mark"></i> Debit Mastercard included</span></li>
                        </ul>
                    </div>
                </div>

                <div class="overview-image">
                    <div class="image">
                        <img src="frontend/images/1.png" alt="image">

                        <div class="circle-img">
                            <img src="frontend/images/circle.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Services Area -->
    <div class="ctp-send-money-online-area ptb-100 jarallax" data-jarallax="{" speed":="" 0.3}"="">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="ctp-send-money-online-content">
                        <h1>Calculate your borrowing power</h1>
                        <ul class="ctp-list">
                            <li> 
                                <img src="{{ asset('frontend/images/circle1.png') }}" alt="image" width="20px"> 
                                Move money on-the-go
                            </li>
                            <li>
                                <img src="{{ asset('frontend/images/circle1.png') }}" alt="image" width="20px"> 
                                Currency wallets
                            </li>
                            <li>
                                <img src="{{ asset('frontend/images/circle1.png') }}" alt="image" width="20px"> 
                                Set rate alerts
                            </li>
                        </ul>
                        <div class="video-view">
                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
                                <i class="fas fa-play"></i> 
                                <span>See how it works</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <form class="ctp-send-money-online-form">
                        <div class="form-header">
                            <span>Exchange Rate</span>
                            <h3>1 GHC = 15.5532 USD</h3>
                        </div>
                        <div class="form-content">
                            {{-- <div class="form-group">
                                <label>Delivery Method</label>
                                <select>
                                    <option>Bank Transfer</option>
                                    <option>Send Money</option>
                                    <option>Interest Money</option>
                                    <option>Invest Money</option>
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label>Interest Rate</label>
                                <input type="text" class="form-control" autocomplete="off" value="100">
                                {{-- <div class="amount-currency-select">
                                    <select>
                                        <option>GBP</option>
                                        <option>USD</option>
                                        <option>EUR</option>
                                        <option>BRL</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="form-group zero">
                                <label>Debt Service Ratio</label>
                                <input type="text" class="form-control" autocomplete="off" value="129.35">
                            </div>
                            <div class="form-group zero">
                                <label>Net Monthly Salary</label>
                                <input type="text" class="form-control" autocomplete="off" value="129.35">
                            </div>
                            <div class="form-group zero">
                                <label>Loan Tenor (months)</label>
                                <input type="text" class="form-control" autocomplete="off" value="129.35">
                                <div class="amount-currency-select">
                                    <select>
                                        <option>USD</option>
                                        <option>GBP</option>
                                        <option>EUR</option>
                                        <option>BRL</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="info">
                                <p><span>Delivery Time:</span> 1 Working Days</p>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Send Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Send Money Online Area -->

      <!-- Start Security Services Area -->
      <div class="security-services-area pt-100 pb-75" style="margin-top:3%; background-color:rgb(37, 36, 36);color:white">
        <div class="container">
            <div class="wrap-section-title">
                {{-- <span>Products</span> --}}
                <h1><strong>Bank at your convenience</strong></h1>
                <p>Take advantage of our wide array of digital<br>banking products and services</br></p>
                
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="security-services-card">
                        <div class="icon">
                            <i class="flaticon-piggy-bank"></i>
                        </div>
                        <h3>Mobiwise</h3>
                        <p>PBL Mobile Baanking Service, Mobiwise makes it easy for you to manage your everyday banking from your location.</p>
                        <a href="#" class="read-more-btn">Read more <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="security-services-card">
                        <div class="icon">
                            <i class="flaticon-data-encryption"></i>
                        </div>
                        <h3>Netwise</h3>
                        <p>PBL Mobile Baanking Service, Mobiwise makes it easy for you to manage your everyday banking from your location.</p>
                        <a href="#" class="read-more-btn">Read more <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="security-services-card">
                        <div class="icon">
                            <i class="flaticon-shield"></i>
                        </div>
                        <h3>DigiPay</h3>
                        <p>PBL Mobile Baanking Service, Mobiwise makes it easy for you to manage your everyday banking from your location.</p>
                        <a href="#" class="read-more-btn">Read more <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
                
            </div>

            <div class="row justify-content-center mt-3">
                <button class="btn btn-primary" style="width:15rem"> View All Services<i class="fa-solid fa-chevron-right px-2"></i></button>
            </div>
        </div>
    </div>
    <!-- End Security Services Area -->

  
     <!-- Start Blog Area -->
		<section class="blog-area ptb-70 pt-0" style="margin-top:6.5%;">
           

			<div class="container">
				<div class="section-title">
					<h2>Featured Products</h2>
					<div class="bar"></div>
				</div>

				<div class="container">
                    <div class="row" >
                        
                        <div class="col-lg-4 col-md-6">
                            <div style="width: 26rem; height: 32rem; padding:0;" class="single-blog-post">
                                <div  style="width:100%; height:60%; position: relative;">
                                    <a href="single-blog.html">
                                        <img style="width: 100%; height:100%" src={{ asset('/frontend/images/about-img1.jpg') }} alt="image">
                                    </a>

                                    <div class="date" style="
                                    position:relative;
                                    float:right;
                                    width:250px;
                                    left: 20px;
                                    bottom: 60px;
                                    background: #001c46;
                                    color: #ffffff;
                                    padding:3%;
                                ">
                                        Remittances
                                    </div>
                                </div>

                                <div class="blog-post-content">

                                    <p>PBL has the following International Money Transfer patterns for inbound...</p> 
                                    <a href="{{ route('blogdetails',  $blog->slug) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6" >
                            <div style="width: 26rem; height: 32rem; padding:0;" class="single-blog-post">
                                <div  style="width:100%; height:60%; position: relative;">
                                    <a href="single-blog.html">
                                        <img style="width: 100%; height:100%" src={{ asset('/frontend/images/about-img1.jpg') }} alt="image">
                                    </a>

                                    <div class="date" style="
                                    position:relative;
                                    float:right;
                                    width:250px;
                                    left: 20px;
                                    bottom: 60px;
                                    background: #001c46;
                                    color: #ffffff;
                                    padding:3%;
                                ">
                                        Current Account
                                    </div>
                                </div>

                                <div class="blog-post-content">

                                    <p>PBL has the following International Money Transfer patterns for inbound...</p> 
                                    <a href="{{ route('blogdetails',  $blog->slug) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div style="width: 26rem; height: 32rem; padding:0;" class="single-blog-post">
                                <div  style="width:100%; height:60%; position: relative;">
                                    <a href="single-blog.html">
                                        <img style="width: 100%; height:100%" src={{ asset('/frontend/images/about-img1.jpg') }} alt="image">
                                    </a>

                                    <div class="date" style="
                                    position:relative;
                                    float:right;
                                    width:250px;
                                    left: 20px;
                                    bottom: 60px;
                                    background: #001c46;
                                    color: #ffffff;
                                    padding:3%;
                                ">
                                        Student Account
                                    </div>
                                </div>

                                <div class="blog-post-content">

                                    <p>PBL has the following International Money Transfer patterns for inbound...</p> 
                                    <a href="{{ route('blogdetails',  $blog->slug) }}" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    
                    </div>
                </div>
			</div>
		</section>
        <!-- End Blog Area -->
    <!-- Start App Download Area -->
    {{-- <section class="app-download-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="app-image">
                        <div class="main-image">
                            <img src="frontend/images/mobile-app1.png" class="wow animate__animated animate__fadeInLeft" alt="image">
                            <img src="frontend/images/mobile-app2.png" class="wow animate__animated animate__fadeInUp" alt="image">
                        </div>

                        <div class="main-mobile-image">
                            <img src="frontend/images/main-mobile.png" class="wow animate__animated animate__fadeInUp" alt="image">
                        </div>

                        <div class="circle-img">
                            <img src="frontend/images/circle.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="app-download-content">
                        <h2>You can find all the thing you need to payout</h2>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                        <div class="btn-box">
                            <a href="#" class="app-store-btn">
                                <i class="flaticon-apple"></i>
                                Download on
                                <span>App Store</span>
                            </a>

                            <a href="#" class="play-store-btn">
                                <i class="flaticon-play-store"></i>
                                Download on
                                <span>Google play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End App Download Area -->

       

    <!-- Start Account Create Area -->
    {{-- <section class="account-create-area">
        <div class="container">
            <div class="account-create-content">
                <h2>Apply for an account in minutes</h2>
                <p>Get your Luvion account today!</p>
                <a href="login.html" class="btn btn-primary">Get Your Luvion Account</a>
            </div>
        </div>
    </section> --}}

    
    <!-- End Account Create Area -->

      <!-- Start FAQ Area -->
      <div class="ctp-faq-area ptb-100">
        <div class="container">
            <div class="section-title ctp-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            
            <div class="ctp-faq-accordion">
                <div class="accordion" id="FaqAccordion">
                    <div class="accordion-item">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is your minimum balance supposed to be?
                        </button>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#FaqAccordion">
                            <div class="accordion-body">
                                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is the rate of interest??
                        </button>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                            <div class="accordion-body">
                                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            When will i receive my account statement?
                        </button>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                            <div class="accordion-body">
                                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What verification do I need to send money? 
                        </button>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                            <div class="accordion-body">
                                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How safe/secure is our net banking a/c?
                        </button>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                            <div class="accordion-body">
                                <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Area -->

    <!-- Start About Area -->
    <section class="about-area ptb-70">
                <div class="container">
                    <div class="section-title ctp-title">
                        <h2>Featured Videos</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="about-image">
                                <img src="{{ asset('frontend/images/about-img1.jpg') }}" alt="image">
    
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-12">
                            <div class="about-image">
                                <img src="{{ asset('frontend/images/about-img1.jpg') }}" alt="image">
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="fas fa-play"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="about-image">
                                <img src="{{ asset('frontend/images/about-img1.jpg') }}" alt="image">
    
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- End About Area -->
   @endsection
