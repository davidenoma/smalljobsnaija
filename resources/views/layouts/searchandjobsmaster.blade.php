<!DOCTYPE html>
<html>

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100008897-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-100008897-2');
    </script>
    <script language="javascript">
        function SelectRedirect(){
        // ON selection of section this function will work
        //alert( document.getElementById('s1').value);
        
        switch(document.getElementById('s1').value)
        {
        case "PHP":
        window.location="../php_tutorial/site_map.php";
        break;
        
        case "ASP":
        window.location="../asp-tutorial/site_map.php";
        break;
        
        case "MySQL":
        window.location="../sql_tutorial/site_map.php";
        break;
        case "JS":
        window.location="site_map.php";
        break;
        
        case "HTML":
        window.location="../html_tutorial/site_map.php";
        break;
        
        /// Can be extended to other different selections of SubCategory //////
        default:
        window.location="../"; // if no selection matches then redirected to home page
        break;
        }// end of switch 
        }
        ////////////////// 
        </script>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Noma Integrated Technology">
        <meta name="description" content="Quickly find top talents who search for jobs near me to meet your needs! " >
        <meta name="keywords" content="search for jobs, work for home, vacancy for job, google for jobs, online jobs for students,hot nigerian jobs, jobs near me, jobs in lagos, jobs in Nigeria,
        jobs near me, jobs in nigeria, online jobs, jobs, job vacancy, job openings near me jobs in dubai, career, jobs in canada, job hunting, 
        looking for a job, online jobs for teens, jobs for students, apply for jobs, apply for jobs online, post jobs for free, vacancy for teachers, earn money online without investment for students, jobs for writers, jobs for computer science, jobs for nurses, websites for jobs, 
        "> 
        <meta property="og:title" content="Small Jobs Naija" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://smalljobsnaija.com" />
    <meta property="og:image" content="/assets/img/logo-crop.png" />
    <meta property="og:description" content="Quickly find top talents who search for jobs near me to meet your needs!" />
    
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <script data-ad-client="ca-pub-1334157382323517" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
    <link rel="stylesheet" href="/assets/fonts/font-awesome.css">
    

    
    <link rel="stylesheet" href="/assets/keller/css/plugins/slick.css">

    
    <link rel="stylesheet" href="/assets/keller/css/style.css">
    {{-- <link rel="stylesheet" href="/assets/css/style.min.css"> --}}
    <title>  @yield('title') </title>
    @yield('styles')

</head>
<body>
    <header class="header" style="background-color: #008000">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="/"><img src="/assets/img/small-jobs-logo.svg" alt="Small Jobs Naija Logo" width="100" height="100"></a>
                    </div>
                </div><!-- Header Logo End -->

                <!-- Offcanvas Toggle Start -->
                <div class="col-auto d-lg-none d-flex align-items-center">
                    <button class="offcanvas-toggle">
                        <span></span>
                    </button>
                </div>
                <!-- Offcanvas Toggle End -->

                <!-- Header Links Start -->
                <div class="header-links col-auto order-lg-3">
                    <a href="/login" >Login</a>
                    <span>or</span>
                    <a href="/registration" >Sign up</a>
                </div><!-- Header Links End -->

                <!-- Header Menu Start -->
                <nav id="main-menu" class="main-menu col-lg-auto order-lg-2">
                    <ul>
                        <li class="has-children"><a href="/">Home</a>
                            
                        </li>
                        <li class="has-children"><a href="/about">About</a>
                         
                        </li>
                        <li><a href="/forumtopics">Forums</a>
                            
                        </li>
                        <li><a href="/faqs">Frequently Asked Questions</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQ'S</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul> --}}
                        </li>
                        <li><a href="/blog">Blog</a>
                            
                        </li>
                        <li><a href="mailto:admin@smalljobsnaija.com">Contact us</a></li>
                    </ul>
                </nav>
                <!-- Header Menu End -->

            </div>

        </div>
    </header>
    <div id="offcanvas" class="offcanvas-section">
        <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
        <div class="offcanvas-wrap">
            <div class="inner">

                <!-- Offcanvas user Start -->
                <div class="offcanvas-user">
                    <a href="/login" >Login</a>
                    <span>or</span>
                    <a href="/registration" >Sign up</a>
                </div>
                <!-- Offcanvas user End -->

                <!-- Offcanvas Menu Start -->
                <div class="offcanvas-menu">
                    <nav>
                        <ul>
                            <li class="has-children"><a href="/">Home</a>
                                
                            </li>
                            <li class="has-children"><a href="/about">About</a>
                             
                            </li>
                            <li><a href="/forumtopics">Forums</a>
                                
                            </li>
                            <li><a href="/faqs">Frequently Asked Questions</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="/blog">Blog</a>
                                
                            </li>
                            <li><a href="mailto:admin@smalljobsnaija.com">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Offcanvas Menu End -->

            </div>
        </div>
    </div>
    <!--Offcanvas Section End-->
    <!--OffCanvas Overlay-->
    <div class="offcanvas-overlay"></div>

{{-- THe modal for login and Sign Up Take notee! --}}
    {{-- <div class="loginSignupModal modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <ul class="loginSignupNav nav">
                        <li><a class="nav-link active" data-toggle="tab" href="#login">Login</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#signup">Sign up</a></li>
                    </ul>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login">
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="email" placeholder="Email"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Password"></div>
                                    <div class="col-12 mb-3">
                                        <div class="row justify-content-between mb-n2">
                                            <div class="col-auto mb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                    <label class="custom-control-label" for="remember-me">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2"><a href="#">Forgot Password?</a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Login"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Login With</p>
                                        <div class="login-reg-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="signup">
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="text" placeholder="Your Name"></div>
                                    <div class="col-12 mb-3"><input type="email" placeholder="Your Email Address"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Choose a Password"></div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Sign Up"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Register With</p>
                                        <div class="login-reg-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "SmallJobNaija",
          "url": "https://smalljobsnaija.com",
          "address": "",
          "sameAs": [
            "https://www.facebook.com/nomatechnology",
            "https://twitter.com/@smalljobsnaija",
            "https://www.linkedin.com/company/noma-technology",
            "https://instagram.com/nomatechnology"
          ]
        }
      </script>

        @yield('content')

        <footer class="footer" style="background-color: white; color: #008000;padding-top: 0">
            <div class="wrapper">
                <div class="container" style="color:#008000;padding-top:0">
                    <div class="row" >
                        <div class="col-md-4 center" style="color:#008000;padding-top:0">
                            <a href="#" class="brand">
                                <img src="/assets/img/small-jobs-logo.svg" alt="Small Jobs Naija Logo" width="150" height="150" >
                            </a>
                            <p style="color:#008000;opacity:100"> 
                                We help you find talents for small jobs near you. 
                                <br> 
                                <br>
                                Small Jobs helps to showcase and find talents for jobs near you like writing, styling, 
                                painting, designing, teaching and others.
                                <br> 
                                <br>
                                Find Talents and Post Jobs for free
                              
                            </p>
                        </div>
                        
                        <div class="col-md-4 center" style="color:#008000;opacity:100" >
                            <h2>Navigation</h2>
                       
                                    <nav>
                                        <ul class="list-unstyled" style="color:#008000;padding-top:0;opacity:100">
                                            <li>
                                                <a style="color:#008000" href="/">Home</a>
                                            </li>
                                             <li>
                                                <a style="color:#008000" href="/forumtopics">Forums</a>
                                            </li>
                                            <li>
                                                <a style="color:#008000" href="/blog">Blog</a>
                                            </li>
                                            <li>
                                                <a style="color:#008000" href="/faqs">Frequently Asked Questions</a>
                                            </li>
                                            <li>
                                                <a style="color:#008000" href="/termsofservice">Terms of Service</a>
                                            </li>
                                            <li>
                                                <a style="color:#008000" href="/privacypolicy">Privacy Policy</a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </nav>                    
                        </div>
                        
                        <div class="col-md-4 center" >
                            <h2>Social Links</h2>
                            
                            <a href="https://facebook.com/nomatechnology" style="color:#008000;"><i class="fa fa-facebook-official fa-3x " aria-hidden="true"></i></a></i>
                             <a href="https://instagram.com/nomatechnology" style="color:#008000;"> <i class="fa fa-instagram fa-3x  "></i></a>
                            <a href="https://twitter.com/smalljobsnaija" style="color:#008000;"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></i>
                                                        <address>
                                <figure>
                                    <a href="https://nomatechnology.com" style="color:#008000;"> Noma Integrated Technology Solutions</a>
                                   <br>
                                    <i class="fa fa-copyright" aria-hidden="true"></i>2016
                                </figure>
                                
                                
                                <strong>Email:</strong> <a href="mailto:admin@smalljobsnaija.com " style="color:#008000;">admin@smalljobsnaija.com</a>
                                <br>
                                
                              
                                
                            </address>
                        </div>
                     
                    </div>
                   
                </div>
               
                
            </div>
        </footer>
            <!-- Google Map API JS -->
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>

    <!-- Vendors JS -->
    <script src="/assets/keller/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/assets/keller/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="/assets/keller/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="/assets/keller/js/plugins/slick.min.js"></script>
    <script src="/assets/keller/js/plugins/jquery.waypoints.min.js"></script>
    <script src="/assets/keller/js/plugins/jquery.counterup.min.js"></script>
    <script src="/assets/keller/js/plugins/jquery.parallax.js"></script>
    <script src="/assets/keller/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/keller/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="/assets/keller/js/plugins/jquery.scrollUp.min.js"></script>

    <!-- Main Activation JS -->
    <script src="/assets/keller/js/main.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp8XdPDEu9dRjuZQRfgIFyPBRMLm5JcOE&libraries=places"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script>
      jQuery(function () {
       Codebase.helpers('table-tools');
    });
    </script>
    <script>
      var searchInput = 'search_input';
    
      $(document).ready(function(){
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById('location')),{
      types : ['geocode'],
      
    })
    autocomplete.setComponentRestrictions(
                {'country': ['ng']});
      });
    </script>
    
</body>

</html>