<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Atlantis Search Group</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Atlantis Search Group" name="keywords">

        <meta content="Atlantis Search Group attract and identify a range of talented industry professionals that match a variety of job descriptions 
        within the Structural Design industry" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css");
        </style>
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>8:00 am - 5:00pm</h2>
                                <p>Mon - Fri</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2><img src="img/usa.png" alt="Icon" style="width: 20px; height:20px">+1703-537-5081,</h2>
                                <h2> <img src="img/uk.png" alt="Icon" style="width: 20px; height:20px">+44-113-328-0567 ,</h2>
                                <h2>  <img src="img/canada.png" alt="Icon" style="width: 20px; height:20px">+1703-537-5081</h2>
                                <p>For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                   
                    <img src="/img/logo-removebg-preview.png" alt="logo"  height="100px ">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="service" class="nav-item nav-link">Service</a>
                        <a href="feature" class="nav-item nav-link">Feature</a>
                        {{-- <a href="advisor" class="nav-item nav-link">Advisor</a> --}}
                        <a href="" class="nav-item nav-link">Apply</a> 
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog" class="dropdown-item">Blog Page</a>
                                <a href="single" class="dropdown-item">Single Page</a>
                            </div>
                        </div> --}}
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
   <!-- Contact Start -->
   <div class="contact">
    <div class="container">
        <div class="section-header">
            <p class=" mt-5" >Send resume</p>
            <h2>Submit your resume</h2>
        </div>
        <div class="row align-items-center">
        
            <div class="col-md-7">
                <div class="contact-form">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                  @endif
                  @if(Session::has('danger'))
                  <div class="alert alert-danger text-center">
                      {{Session::get('danger')}}
                  </div>
                @endif   
                @if(Session::has('success'))
                <div class="alert alert-success text-center">
                    {{Session::get('success')}}
                </div>
                @endif   
        
                    <form  method="post" action="{{route('Apply.store') }}" name="" id="" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <input type="text" name="name" class="form-control" id="" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="phone" id="" placeholder="your phone" required="required" data-validation-required-message="Please enter your phone">
                            <p class="help-block text-danger"></p>
                        </div>                     
                        

                        <div class="form-group">
                            <input type="file" name="file" placeholder="Choose file" id="file">
                              @error('file')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                        </div>

                        <div class="">
                            <button class="btn" type="submit"  value="" id="">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Our Offices</h2>
                                <p><i class="fa fa-map-marker-alt"></i>USA, UK, Canada</p>

                                <p><i class="fa fa-phone-alt">
                                    </i>+1703-537-5081,+441133280567, +1703-537-5081
                                
                                </p>
                                <p><i class="fa fa-envelope"></i>Tumelo@atlantissearchgroup.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Quick Links</h2>
                                <a href="">Terms of use</a>
                                <a href="">Privacy policy</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-newsletter">
                        <h2>Newsletter</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                        </p> --}}
                        <div class="form">
                            <input class="form-control" placeholder="Email goes here">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="/">Atlantis Search Group</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="https://www.linkedin.com/in/kirinyetbrian/"> Kirinyet Brian</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
