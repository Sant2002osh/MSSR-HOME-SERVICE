<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">
  <title>MSSR</title>
</head>
<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">MSSR</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
  <ul class="navbar-nav pl-5 custom-nav d-flex justify-content-end">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    <li class="nav-item"><a href="Customer/CustomerLogin.php" class="nav-link">Login</a></li>
  </ul>
</div>

  </nav> <!-- End Navigation -->
  <!-- Start Header aim-->
   <header class="aim back-image" style="background-image:url(images/Banner1.jpeg);" id="home">
    <form action="" class="form">
      <div class="myclass mainHeading">
        <h1 class="text-uppercase text-info">Welcome to MSSR </h1>
        <p  class="font-italic text-white">Customer's Happiness is our Aim</p>
        <a href="Customer/CustomerLogin.php" class="btn btn-success mr-4">Login</a>
        <a href="#reg" class="btn btn-danger mr-4">Sign Up</a>
      </div>
    </form>
   </header>
  <!-- End Header aim-->
  <div class="container">
    <!--Introduction Section-->
    <div class="aim">
      <h3 class="text-center">MSSR Services</h3>
      <p>
        MSSR Services is India's leading chain of multi-brand home and professional service workshops, offering a comprehensive array of solutions. We focus on enhancing your experience by providing world-class maintenance and repair services across various domains, including electronics, electrical work, and home services. Our sole mission is to provide exceptional care for all your appliances, vehicles, and household needs, ensuring everything runs smoothly while keeping our customers happy and satisfied.With well-equipped service centers and highly trained professionals, we deliver quality services at competitive rates, offering excellent value for money. Our services include electrician work, plumbing, carpentry, TV and fridge repair, mobile, laptop, and desktop repair, painting, AC repair, civil construction, as well as bike and car repair. Our state-of-the-art workshops are conveniently located across many cities nationwide. Now, you can easily book any of our services online by completing a quick registration process.
      </p>
    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/mobile.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Mobile </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/tv.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Tv </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/laptop.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Laptop </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/desktop.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Desktop </h4>
      </div>
    </div>
    <div class="row mt-4">
    <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/ac.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">AC </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/fridge.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Fridge </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/bike.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Bike </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/car.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">car </h4>
      </div>
    </div>
    <div class="row mt-4">
    <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/carpender.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">carpentry </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/civil.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Civil </h4>
      </div>    
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/electric.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Electrical </h4>
      </div>
      <div class="col-sm-3 mb-4">
        <a href="#">
          <img src="images/plumbing.jpg" alt="Electronic Appliances" class="img-fluid" style="max-width: 150px; max-height: 150px;">
        </a>
        <h4 class="mt-4">Plumbing </h4>
      </div>
    </div>
  </div> <!-- End Services -->
  <!-- Start Registration  -->
   <section class="userreg" id="reg">
   <?php include('userRegistration.php') ?>
   </section>
  <!-- End Registration  -->
  <!-- Start Happy Customer  -->
  <div class="aim bg-primary" id="Customer">
     <div class="container">
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar12.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Great service, my refrigerator was fixed in no time. Very professional team.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar11.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">Amazing electricians! They fixed all the wiring issues quickly and efficiently.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar13.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">The plumber was quick to resolve our leakage problem. Highly recommend services.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar14.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Exceptional carpentry work. They custom-built furniture exactly aswe wanted.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar5.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Aman Verma</h4>
              <p class="card-text">Great job fixing our AC unit. Fast service and very professional staff.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar6.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Pooja Mehta</h4>
              <p class="card-text">Highly skilled technicians. They repaired my laptop quickly and efficiently.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar7.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Vikram Singh</h4>
              <p class="card-text">The mobile repair service was excellent, and my phone is working perfectly again.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar8.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Riya Kapoor</h4>
              <p class="card-text">Professional car repair services. They fixed my car in no time and it runs like new.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar9.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Neha Sharma</h4>
              <p class="card-text">The painting service was wonderful. Our home looks fantastic with the new colors!</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar10.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Kunal Das</h4>
              <p class="card-text">Very pleased with the civil construction repair work. The team was professional.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar16.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Nitin Rao</h4>
              <p class="card-text">The bike repair service was top-notch, and my bike rides smoothly again.</p>
            </div>
          </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar15.jpeg" class="img-fluid" style="border-radius: 150px; max-width: 150px; max-height: 150px;">
              <h4 class="card-title">Sanjay Patel</h4>
              <p class="card-text">Quick and reliable desktop service. Technician fixed it within an hour.</p>
            </div>
          </div>
        </div> 
      </div>
    </div> 
  </div> 
  <!-- End Happy Customer  -->
   <!--Start Contact Us-->
  <div class="container" id="Contact">
    <h2 class="text-center mb-4">Contact US</h2>
    <div class="row">
      <?php include('contactform.php'); ?>
      <div class="col-md-4 text-center">
        <strong>Headquarter:</strong> <br>
        MSSR Pvt Ltd, <br>
        Ramapuram, Chennai <br>
        TamilNadu - 600089 <br>
        Phone: +91 7092283751 <br>
        <a href="#" target="_blank">www.MSSR.com</a> <br>
        <br><br>
        <strong>Coimbatore Branch:</strong> <br>
        MSSR Pvt Ltd, <br>
        Ashok Nagar, Coimbatore <br>
        TamilNadu - 641001 <br>
        Phone: +91 7092283751 <br>
        <a href="#" target="_blank">www.MSSR.com</a> <br>
      </div> 
    </div> 
  </div> 
  <!-- End Contact Us --> 
  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #0d6efd;">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6">
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fa-brands fa-instagram"></i></i></a>
        </div> 
        <div class="col-md-5 text-right">
          <small> Designed by Santosh &copy; 2024.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> 
        <div class=" col-md-1 footer-iconTop">
        <a href="#home" class="scroll-to-top">
            <i class="fa-solid fa-angle-up"></i>
        </a>
    </div>
      </div> 
    </div> 
  </footer>
  <!-- End Footer -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>                                                                                                                                          