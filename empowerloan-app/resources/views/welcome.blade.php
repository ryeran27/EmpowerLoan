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
                <a href="#">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="{{ asset('landing/assets/img/new_logo1.jpg') }}" alt="Creative Tim Logo">
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
                        <a href="{{ route('login') }}">
                        <i class="fa fa-sign-in"></i>
                        Get Started
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-check-square"></i>
                        Donate
                        </a>
                    </li>
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
                            <h5 class="text-justify">Microfinance web-app provider EmpowerLoan gives microfinance institutions (MFIs) a platform to run their businesses and offer for their customers more effectively. The web-app is made to assist MFIs in streamlining their procedures and automating many of their operations so they can concentrate more on providing their clients with excellent service and expanding their business.</h5>
                        </div>
                        <div class="buttons">
                            <a href="{{ route('login') }}" class="btn btn-fill btn-info" data-button="info">Get Started</a>
                            <a href="#" class="btn btn-fill btn-warning" data-button="warning">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-gray section-clients">
            <div class="container text-justify">
                <h4 class="header-text">Benefits</h4>
                <p>
                    <strong>Enhanced Efficiency:</strong> The EmpowerLoan web-app assists MFIs in streamlining their processes and automating many of their responsibilities. As a result, less time and money are needed to manage their businesses.<br><br>

                    <strong>Increased Customer Service:</strong> MFIs may provide their consumers quicker, more convenient service using the web-app's loan application and mobile app, increasing client retention and satisfaction.<br><br>

                    <strong>Improved Reporting:</strong> The reporting capabilities of the program enable MFIs to provide thorough reports on their loan portfolio, savings accounts, and financial transactions, giving them insights into their operational performance and identifying potential areas for development.<br><br>

                    <strong>Scalability:</strong> The EmpowerLoan platform is made to be scalable, enabling MFIs to expand their client base and increase revenue without substantially increasing overhead.<br>
                </p>
                
            </div>
        </div>
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
                                <p>EmpowerLoan's web-app offers a rapid and easy loan origination process that enables microfinance organizations to process loan applications with ease.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blue">
                            <div class="icon">
                                <i class="pe-7s-bell"></i>
                            </div>
                            <h4>Loan portfolio management</h4>
                            <p>EmpowerLoan's web-app helps microfinance organizations effectively track repayments and handle defaults for their loan portfolios.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blue">
                            <div class="icon">
                                <i class="pe-7s-graph1"></i>
                            </div>
                            <h4>Accounting and reporting</h4>
                            <p>EmpowerLoan's web-app has accounting and reporting tools that assist microfinance organizations in meeting regulatory obligations and give them information about their financial performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
