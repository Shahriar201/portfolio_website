<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Portfolio</title>
    <link rel="icon" href="{{ asset('public/frontend') }}/favicon.png" type="image/png">
    <link href="{{ asset('public/frontend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/frontend') }}/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/frontend') }}/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/frontend') }}/css/animate.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

    {{-- Progressbar --}}
    {{-- <style type="text/css">
        /* Make sure that padding behaves as expected */
        * {
            box-sizing: border-box
        }

        /* Container for skill bars */
        .container {
            width: 100%;
            /* Full width */
            background-color: #ddd;
            /* Grey background */
        }

        .skills {
            text-align: right;
            /* Right-align text */
            padding-top: 10px;
            /* Add top padding */
            padding-bottom: 10px;
            /* Add bottom padding */
            color: white;
            /* White text color */
        }

        .html {
            width: 90%;
            background-color: #04AA6D;
        }

        /* Green */
        .css {
            width: 80%;
            background-color: #2196F3;
        }

        /* Blue */
        .js {
            width: 65%;
            background-color: #f44336;
        }

        /* Red */
        .php {
            width: 60%;
            background-color: #808080;
        }

        /* Dark Grey */

    </style> --}}

</head>

<body>

    <!--Header_section-->
    <header id="header_wrapper">
        <div class="container">
            <div class="header_box">
                {{-- <div class="logo"><a href=""><img src="{{ asset('public/upload/logo_images/' . $logo->image) }}" --}}
                {{-- alt="logo"></a></div> --}}
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                            data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="main-nav" class="collapse navbar-collapse navStyle">
                        <ul class="nav navbar-nav" id="mainNav">
                            <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
                            <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
                            {{-- <li><a href="#clients" class="scroll-link">Skill</a></li> --}}
                            <li><a href="#service" class="scroll-link">Experience</a></li>
                            <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>
                            <li><a href="#team" class="scroll-link">Team</a></li>
                            <li><a href="#contact" class="scroll-link">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--Header_section-->

    <!--Hero_Section-->
    <section id="hero_section" class="top_cont_outer">
        <div class="hero_wrapper">
            <div class="container">
                <div class="hero_section">
                    <div class="row">
                        <div class="col-lg-7 col-sm-10">
                            <div class="top_left_cont zoomIn wow animated">
                                <h2><strong>{{ $slider->short_title }}</strong></h2>
                                <p>{{ $slider->long_title }}</p>
                                <a href="#service" class="read_more2">Read more</a>
                            </div>
                        </div>
                        <div style="padding:30px 5px 5px 50px" class="col-lg-5 col-sm-8">
                            <img src="{{ asset('public/upload/slider_images/' . $slider->image) }}"
                                class="zoomIn wow animated" alt=""
                                style="width: 250px; height:280px; border-radius:20px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero_Section-->

    <section id="aboutUs">
        <!--Aboutus-->
        <div class="inner_wrapper">
            <div class="container">
                <h2>About</h2>
                <div class="inner_section">
                    <div class="row">
                        <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right img-circle"><img
                                src="{{ asset('public/upload/about_images/' . $about->image) }}"
                                class="img-circle delay-03s animated wow zoomIn" alt=""></div>
                        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                            <div class=" delay-01s animated fadeInDown wow animated">
                                <h3>{{ $about->title }}</h3><br />
                                <p>{{ $about->description }}</p>
                            </div>
                            <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact"
                                    class="contact_btn">Contact Us</a> </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--Aboutus-->


    {{-- <section class="page_section" id="clients">
        <!--page_section-->
        <h2>My Skills</h2>
        <!--page_section-->
        <div class="row" style="margin-left: 10px;">
            <div class="col-md-6">
                <div class="progressbar">
                    <p>HTML</p>
                    <div class="container">
                        <div class="skills html">90%</div>
                    </div>
    
                    <p>CSS</p>
                    <div class="container">
                        <div class="skills css">80%</div>
                    </div>
    
                    <p>JavaScript</p>
                    <div class="container">
                        <div class="skills js">65%</div>
                    </div>
    
                    <p>PHP</p>
                    <div class="container">
                        <div class="skills php">60%</div>
                    </div>
                </div>
            </div>
            
        </div>
    </section> --}}
    <!--client_logos-->

    <!--Service-->

    <section id="service">
        <div class="container">
            <h2>Experience</h2>
            {{-- <div class="service_wrapper"> --}}
            @foreach ($services as $service)
                <div class="">
                    <div class="col-sm-3">
                        <div class="service_block">
                            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i
                                        class="{{ $service->icon }}"></i></span> </div>
                            <h3 class="animated fadeInUp wow">{{ $service->short_title }}</h3>
                            <p class="animated fadeInDown wow">{{ $service->long_title }}</p>
                        </div>
                    </div>
            @endforeach
            {{-- </div> --}}
        </div>
        </div>
    </section>
    <!--Service-->


    <!-- Portfolio -->
    <section id="Portfolio" class="content">

        <!-- Container -->
        <div class="container portfolio_title">

            <!-- Title -->
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
            <!--/Title -->

        </div>
        <!-- Container -->

        <div class="portfolio-top"></div>

        <!-- Portfolio Filters -->
        <div class="portfolio">

            <div id="filters" class="sixteen columns">
                <ul class="clearfix">
                    <li><a id="all" href="#" data-filter="*" class="active">
                            <h5>All</h5>
                        </a></li>
                    {{-- <li><a class="" href="#" data-filter=".prototype">
          <h5>Prototype</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".design">
          <h5>Design</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".android">
          <h5>Android</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".appleIOS">
          <h5>Apple IOS</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".web">
          <h5>Web App</h5>
          </a></li> --}}
                </ul>
            </div>
            <!--/Portfolio Filters -->

            <!-- Portfolio Wrapper -->
            <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;"
                id="portfolio_wrapper">

                <!-- Portfolio Item -->
                @foreach ($portfolios as $portfolio)
                    <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                        class="portfolio-item one-four   appleIOS isotope-item">
                        <div class="portfolio_img">
                            <a href="https://www.qries.com/">
                                <img src="{{ asset('public/upload/portfolio_images/' . $portfolio->image) }}"
                                    alt="Portfolio 1">
                            </a>
                        </div>
                        <div class="item_overlay">
                            <div class="item_info">
                                <h4 class="project_name">{{ $portfolio->title }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!--/Portfolio Item -->

            </div>
            <!--/Portfolio Wrapper -->

        </div>
        <!--/Portfolio Filters -->

        <div class="portfolio_btm"></div>


        <div id="project_container">
            <div class="clear"></div>
            <div id="project_data"></div>
        </div>


    </section>
    <!--/Portfolio -->


    <section class="page_section team" id="team">
        <!--main-section team-start-->
        <div class="container">
            <h2>Team</h2>
            <h6>{{ $team_title->title }}</h6>
            <div class="team_section clearfix">

                @foreach ($teams as $team)
                    <div class="team_area col-md-4">

                    </div>
                    <div class="team_area">
                        <div class="team_box wow fadeInDown delay-03s">
                            <div class="team_box_shadow"><a href=""></a></div>
                            <img src="{{ asset('public/upload/team_images/' . $team->image) }}" alt="">
                            <ul>
                                <li><a href="{{ $team->twitter }}" target="_blank" class="fa fa-twitter"></a></li>
                                <li><a href="{{ $team->facebook }}" target="_blank" class="fa fa-facebook"></a></li>
                                <li><a href="{{ $team->linkedin }}" target="_blank" class="fa fa-linkedin"></a></li>
                                <li><a href="{{ $team->github }}" target="_blank" class="fa fa-github"></a></li>
                            </ul>
                        </div>
                        <h3 class="wow fadeInDown delay-03s">{{ $team->member_name }}</h3>
                        <span class="wow fadeInDown delay-03s">{{ $team->designation }}</span>
                        <p class="wow fadeInDown delay-03s">{{ $team->description }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--/Team-->
    <!--Footer-->
    <footer class="footer_wrapper" id="contact">
        <div class="container">
            <section class="page_section contact" id="contact">
                <div class="contact_section">
                    <h2>Contact</h2>
                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft">
                        <div class="contact_info">
                            <div class="detail">
                                <h4>UNIQUE Infoway</h4>
                                <p>{{ $contact->address }}</p>
                            </div>
                            <div class="detail">
                                <h4>Call</h4>
                                <p>{{ $contact->mobile_no }}</p>
                            </div>
                            <div class="detail">
                                <h4>Email</h4>
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div>



                        <ul class="social_links">
                            <li class="twitter animated bounceIn wow delay-02s"><a href="{{ $contact->twitter }}"
                                    target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook animated bounceIn wow delay-03s"><a href="{{ $contact->facebook }}"
                                    target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="pinterest animated bounceIn wow delay-04s"><a href="{{ $contact->linkedin }}"
                                    target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="gplus animated bounceIn wow delay-05s"><a href="{{ $contact->instagram }}"
                                    target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 wow fadeInLeft delay-06s">
                        <div class="form">
                            <input class="input-text" type="text" name="" value="Your Name *"
                                onFocus="if(this.value==this.defaultValue)this.value='';"
                                onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <input class="input-text" type="text" name="" value="Your E-mail *"
                                onFocus="if(this.value==this.defaultValue)this.value='';"
                                onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <textarea class="input-text text-area" cols="0" rows="0"
                                onFocus="if(this.value==this.defaultValue)this.value='';"
                                onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                            <input class="input-btn" type="submit" value="send message">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <div class="footer_bottom"><span>Copyright © 2014, Template by <a
                        href="http://webthemez.com">WebThemez.com</a>. </span> </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/jquery.nav.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/wow.js"></script>
    <script type="text/javascript" src="{{ asset('public/frontend') }}/js/custom.js"></script>

</body>

</html>
