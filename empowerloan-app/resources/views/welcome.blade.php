@extends('layouts.landing_page.main')

@section('content')
<body class="landing-page landing-page1">
    <nav class="navbar navbar-transparent navbar-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
                </button>
                <a href="http://www.creative-tim.com">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="{{ asset('landing/assets/img/new_logo.png') }}" alt="Creative Tim Logo">
                        </div>
                        <div class="brand">
                            Ryan Lee
                        </div>
                    </div>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="example" >
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                        <i class="fa fa-facebook-square"></i>
                        Like
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-twitter"></i>
                        Tweet
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-pinterest"></i>
                        Pin
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="wrapper">
        <div class="parallax filter-gradient blue" data-color="blue">
            <div class="parallax-background">
                <img class="parallax-background-image" src="{{ asset('landing/assets/img/template/bg3.jpg') }}">
            </div>
            <div class= "container">
                <div class="row">
                    <div class="col-md-5 hidden-xs">
                        <div class="parallax-image">
                            <img class="phone" src="{{ asset('landing/assets/img/template/iphone3.png') }}" style="margin-top: 20px"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <div class="description">
                            <h2>Empower Loan</h2>
                            {{-- <br> --}}
                            <h5 class="text-justify">Microfinance software provider EmpowerLoan gives microfinance institutions (MFIs) a platform to run their businesses and offer for their customers more effectively. The software is made to assist MFIs in streamlining their procedures and automating many of their operations so they can concentrate more on providing their clients with excellent service and expanding their business.</h5>
                        </div>
                        <div class="buttons">
                            {{-- <button class="btn btn-fill btn-neutral">
                            <i class="fa fa-apple"></i> Appstore
                            </button>
                            <button class="btn btn-simple btn-neutral">
                            <i class="fa fa-android"></i>
                            </button>
                            <button class="btn btn-simple btn-neutral">
                            <i class="fa fa-windows"></i>
                            </button> --}}
                            <a href="{{ route('login') }}" class="btn btn-fill btn-info" data-button="info">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-gray section-clients">
            <div class="container text-justify">
                <h4 class="header-text">Benefits</h4>
                <p>
                    <strong>Enhanced Efficiency:</strong> The EmpowerLoan software assists MFIs in streamlining their processes and automating many of their responsibilities. As a result, less time and money are needed to manage their businesses.<br><br>

                    <strong>Increased Customer Service:</strong> MFIs may provide their consumers quicker, more convenient service using the software's loan application and mobile app, increasing client retention and satisfaction.<br><br>

                    <strong>Improved Reporting:</strong> The reporting capabilities of the program enable MFIs to provide thorough reports on their loan portfolio, savings accounts, and financial transactions, giving them insights into their operational performance and identifying potential areas for development.<br><br>

                    <strong>Scalability:</strong> The EmpowerLoan platform is made to be scalable, enabling MFIs to expand their client base and increase revenue without substantially increasing overhead.<br>
                </p>
                <!-- <div class="logos">
                    <ul class="list-unstyled">
                        <li ><img src="assets/img/logos/adobe.png"/></li>
                        <li ><img src="assets/img/logos/zendesk.png"/></li>
                        <li ><img src="assets/img/logos/ebay.png"/></i>
                        <li ><img src="assets/img/logos/evernote.png"/></li>
                        <li ><img src="assets/img/logos/airbnb.png"/></li>
                        <li ><img src="assets/img/logos/zappos.png"/></li>
                    </ul>
                </div> -->
            </div>
        </div>
        {{-- <div class="section section-presentation">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="description">
                            <h4 class="header-text">It's beautiful</h4>
                            <p>And your app is also probably social, awesome, easy-to-use and vital to users. This is the place to enlist all the good things that your app has to share. Focus on the benefits that the uers will receive. Try to combine imaginery with text and show meaningful printscreens from your app, that will make it clear what exactly the basic functions are. </p>
                            <p>Try to make it very clear for the people browsing the page that this product will enrich their life and will make a nice addition to the homescreen.
                            <p>
                        </div>
                        
                    </div>
                    <div class="col-md-5 col-md-offset-1 hidden-xs">
                        <img src="{{ asset('landing/assets/img/template/mac.png') }}"/>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="section section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="description-carousel" class="carousel fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="{{ asset('landing/assets/img/template/examples/home_33.jpg') }}" alt="">
                                </div>
                                <div class="item active">
                                    <img src="{{ asset('landing/assets/img/template/examples/home_22.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('landing/assets/img/template/examples/home_11.jpg') }}" alt="">
                                </div>
                            </div>
                            <ol class="carousel-indicators carousel-indicators-blue">
                                <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <h4 class="header-text">Easy to integrate</h4>
                        <p>
                            With all the apps that users love! Make it easy for users to share, like, post and tweet their favourite things from the app. Be sure to let users know they continue to remain connected while using your app!
                        </p>
                        <a href="http://www.creative-tim.com/product/awesome-landing-page" id="Demo3" class="btn btn-fill btn-info" data-button="info">Get Free Demo</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="section section-features">
            <div class="container">
                <h4 class="header-text text-center">Features</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blue">
                            <div class="icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="text">
                                <h4>Loan origination</h4>
                                <p>EmpowerLoan's software offers a rapid and easy loan origination process that enables microfinance organizations to process loan applications with ease.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blue">
                            <div class="icon">
                                <i class="pe-7s-bell"></i>
                            </div>
                            <h4>Loan portfolio management</h4>
                            <p>EmpowerLoan's software helps microfinance organizations effectively track repayments and handle defaults for their loan portfolios.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blue">
                            <div class="icon">
                                <i class="pe-7s-graph1"></i>
                            </div>
                            <h4>Accounting and reporting</h4>
                            <p>EmpowerLoan's software has accounting and reporting tools that assist microfinance organizations in meeting regulatory obligations and give them information about their financial performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
