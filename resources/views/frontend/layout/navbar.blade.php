  <!-- Start Navbar Area -->
<div class="navbar-area currency-transfer-provider-navbar" style="color:white">
    <div class="luvion-responsive-nav">
        <div class="container">
            <div class="luvion-responsive-menu">
                <div class="logo">
                    <a href="{{route('welcome')}}">
                        <img src="{{asset('frontend/images/PBL logo-white.png')}}" alt="logo">
                        <img src="{{asset('frontend/images/PBL logo-white.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="luvion-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('welcome')}}">
                    <img src="{{asset('frontend/images/PBL logo-white.png')}}" width="180" alt="logo">
                    <img src="{{asset('frontend/images/PBL logo-white.png')}}" width="180" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="color:white">
                        <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link">Home</a></li>


                        <li class="nav-item"><a href="#" class="nav-link">Personal <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{ route('current') }}" class="nav-link">Current Accounts</a></li>

                                <li class="nav-item"><a href="{{ route('savings') }}" class="nav-link">Savings Accounts</a></li>

                                <li class="nav-item"><a href="{{ route('investment') }}" class="nav-link">Investment Accounts</a></li>

                                <li class="nav-item"><a href="index-4.html" class="nav-link">Loan Calculator</a></li>

                                <li class="nav-item"><a href="index-4.html" class="nav-link">Remittance</a></li>
                               
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">Business <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{ route('business.current') }}" class="nav-link">Current Accounts</a></li>

                                <li class="nav-item"><a href="{{ route('business.savings') }}" class="nav-link">Savings & Investments</a></li>

                                <li class="nav-item"><a href="{{ route('business.trade.finance') }}" class="nav-link">Trade Finance</a></li>

                                <li class="nav-item"><a href="{{ route('business.credit') }}" class="nav-link">Credit Facilities</a></li>

                                <li class="nav-item"><a href="{{ route('business.treasury') }}" class="nav-link">Treasury Services</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">About Us <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index.html" class="nav-link">Vision &amp; Mission</a></li>

                                <li class="nav-item"><a href="{{ route('about.values') }}" class="nav-link">Values & Promise</a></li>

                                <li class="nav-item"><a href="index-3.html" class="nav-link">Board of Directors</a></li>

                                <li class="nav-item"><a href="{{ route('about.coe') }}" class="nav-link">Code of Ethics</a></li>

                                <li class="nav-item"><a href="index-5.html" class="nav-link">Senior Management</a></li>

                                <li class="nav-item"><a href="index-6.html" class="nav-link">Shareholders</a></li>

                                <li class="nav-item"><a href="index-7.html" class="nav-link">Subsidiary</a></li>

                                <li class="nav-item"><a href="index-8.html" class="nav-link">Sustainability</a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item"><a href="index-3.html" class="nav-link">Open Account</a></li>

                    </ul>



                    <div class="others-options d-flex align-items-center" style="float: right;">
                       
                        <div class="options-item">
                            <a href="sign-up.html" class="btn btn-primary" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg></a>
                        </div>
                    </div>
                </div>
                
            </nav>
        </div>
    </div>

    <div class="luvion-nav">
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-md navbar-light">
               

              

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="color:white">



                    </ul>



                    <div class="others-options d-flex align-items-center" style="float: right;margin-top:2rem;">
                        
                        <div class="options-item" >
                            <div class="navbar-list">
                                <ul  style="display: flex; flex-direction:row;">
                                    <li><a href="{{route('digital.banking')}}" style="color:white; cursor:grab">Digital Banking</a></li>
                                    <li><a href="https://online.prudentialbank.com.gh/netWise/banking" style="color:white">Internet Banking</a></li>
                                </ul>
                            </div>                         </div>
                    </div>
                </div>
                
            </nav>
        </div>
    </div>

    
</div>
{{-- <div class="navbar-area currency-transfer-provider-navbar" style="color:white;margin-top:5%;background-color:rgba(0, 0, 0, 0.085)">
    <div class="luvion-responsive-nav">
        <div class="container">
            <div class="luvion-responsive-menu">
                <div class="logo">
                    <a href="{{route('welcome')}}">
                        <img src="{{asset('frontend/images/pbllogo.png')}}" alt="logo">
                        <img src="{{asset('frontend/images/pbllogo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="luvion-nav" style="float: right;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
              

             

              

                <div class="navbar-list">
                    <ul  style="display: flex; flex-direction:row;">
                        <li >Digital Banking</a></li>
                        <li><a href="https://online.prudentialbank.com.gh/netWise/banking">Internet Banking</a></li>
                    </ul>
                </div> 
            </nav>
        </div>
    </div>

    {{-- <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="options-item">
                            <div class="dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="globe-icon">
                                        <i class="fa-solid fa-globe"></i>
                                    </div>

                                    <span class="lang-name"></span>

                                    <div class="chevron-down-icon">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                        <img src="{{asset('frontend/images/uk.png')}}" alt="flag">
                                        EN
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{asset('frontend/images/china.png')}}" alt="flag">
                                        简体中文
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{asset('frontend/images/uae.png')}}" alt="flag">
                                        العربيّة
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="options-item">
                            <a href="login.html" class="login-btn">Log in</a>
                        </div>
                        <div class="options-item">
                            <a href="sign-up.html" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> --}}

<!-- End Navbar Area -->