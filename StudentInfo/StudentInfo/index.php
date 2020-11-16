<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewpoint" contact="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/all.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">

<title>studentInfo</title>
</head>
<body>
 <!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5">
  <a class="navbar-brand" href="index.php">Student Info</a>
  <span class="navbar-text">Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
     <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
     <li class="nav-item custom-nav-item"><a href="https://www.dsce.edu.in/" class="nav-link">College</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Courses</a></li>
     <!-- <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment</a></li> -->
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Profile</a></li>
     <!-- <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li> -->
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" 
         data-target="#stuLoginModalCenter">Login</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" 
         data-target="#stuRegModalCenter">SignUp</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Admin</a></li>
    </ul>
  </div>
</nav>
 <!-- End Navigation -->
 <!-- Start video background -->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <img src="image/background.jpg" alt="Background" class="bg" width=1505 height=630 style="opacity: 0.6;">
    <!-- <video playsingle autoplay muted loop>
      <source src="video/banvid.mp4">
    </video> -->
    <div class="vid-overlay"></div>
  </div>
  
  <div class="vid-content">
    <h1 class="my-content">Welcome to Student Info</h1>
    <small class="my-content">Learn and Implement</small> <br>
    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>
</div>
</div>
<!-- End video background -->

<!-- Start Text Banner --
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
    </div>
  </div>
</div>
 -- End Text Banner -->

 <!-- Start most popular course -->
<div class="container mt-5">
   <h1 class="text-center">Popular Course</h1>
   <!-- Start most popular course 1st card deck -->
   <div class="card-deck mt-4">
     <a href="#" class="btn" style="text-align: left;
     padding:0px; margin:0px;">
     <div class="card">
       <img src="#" class="card-img-top" alt="guitar" />
       <div class="card-body">
         <h5 class="card-title">Learn guitar Easy Way</h5>
         <p class="card-text">Lorem ipsum dolor sit amet
           consectetur adipisicing elit. Facilis, nemo.</p>
       </div>
       <div class="card-footer">
         <p class="card-text d-inline">Price: ,<small><del>&
           #8377 2000 </del></small> <span
           class="font-weight-bolder">&#8377 200<span></p>
           <a class="btn btn-primary text-white font-weight-bolder
           float-right" href="#">Enroll</a>
       </div>
     </div>
     </a>
   </div>
 <!-- End most popular course 1st card deck -->
 <div class="text-center m-2">
   <a class="btn btn-danger btn-sm" href="#">View all Courses</a>
 </div>
</div>
<!-- End most popular course -->

<!-- Start Contact Us -->
<div class="container mt-4" id="contact"> <!-- Start Contact
 Us Container -->
  <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us
   Heading -->
   <div class="row"> <!-- start Contact Us row-->
     <div class="col-mod-8"> <!-- Start Contact Us 1st Column -->
       <form action="" method="post">
         <input type="text" class="form-control" name="name"
         placeholder="Name"><br>
         <input type="text" class="form-control" name="subject"
         placeholder="Subject"><br>
         <input type="email" class="form-control" name="email"
         placeholder="E-mail"><br>
         <textarea class="form-control" name="message"
         placeholder="How can we help you?" style="height:150px;
         "></textarea><br>
         <input class="btn btn-primary" type="submit"
         value="Send" name="submit"><br><br>
       </form>
     </div> <!-- End contact Us 1st Column -->

     <div class="col-md-4 stripe text-white text-center"> <!--
       Start Contact Us 2nd Column -->
       <h4>Student Info</h4>
       <p>Student Info,
         near vijaya bank, kumarswamy layout,
         bangalore - 560078<br />
         Phone: +00000000 <br />
         www.Student Info.com </p>
     </div> <!-- End contact Us 2nd Column -->
   </div> <!-- End Contact Us row -->
</div> <!-- End Contact Us Container -->
<!-- End COntact Us -->

<!-- Start Students Testimonial -->
<div class="container-fluid mt-5" style="background-color: 
  #4B7289" id="Feedback">
  <h1 class="text-center testyheading p-4"> Student's Feedback</h1>
  <div class="row">
    <div class="col-md-12">
      <div id="testimonial-slider" class="owl-carousel">
        <div class="testimonial">
          <p class="description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Expedita, dignissimos blanditiies.
          </p>
        </div>
        <img src="image/stu/student2.jpg" alt=""/>
      </div>
      <div class="testimonial-prof">
        <h4>Sonam</h4>
        <small>Web Developer</small>
      </div>
    </div>
  </div>
</div> <!-- End Students Testimonial -->

<!-- Strat Student registration Model -->
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- start student registration form -->
      <form>
  <div class="form-group">
   <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><input type="text"
   class="form-control" placeholder="Name" name="stuname" id="stuname">
  </div>
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label><input type="email"
    class="form-control" placeholder="Email" name="stuemail" id="stuemail">
    <small class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New password</label>
    <input type="password" class="form-control" placeholder="password" name="stupass" id="stupass">
  </div>
</form>
<!-- End student registration form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Student registration Model -->

<!-- Strat Student Login Model -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- start student Login form -->
      <form id="stuLoginForm">
        <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="stuLogemail" class="pl-2 font-weight-bold">
            Email
          </label>
          <input type="email"
                 class="form-control" 
                 placeholder="Email" 
                 name="stuLogemail" 
                 id="stuLogemail"/>
        </divclass="form-group">
          <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">password</label>
          <input type="password" class="form-control" placeholder="password" name="stuLogpass" id="stuLogpass">
        </div>
      </form>
         <!-- End student Login form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
        <!-- End Student Login Model -->

<!-- Strat Admin Login Model -->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- start student Login form -->
      <form id="adminLoginForm">
        <div class="form-group">
          <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label><input type="email"
             class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
        </divclass="form-group">
          <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">password</label>
          <input type="password" class="form-control" placeholder="password" name="adminLogpass" id="adminLogpass">
        </div>
      </form>
         <!-- End student Login form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
        
<!-- End Student Login Model -->



<!-- Start Footer --
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">   
    <a href="#login" 
       data-toggle="modal" 
       data-target="#adminLoginModalCenter">
       Admin Login
    </a>
  </small>
</footer>
  -- End Footer -->

<!-- jquery and Bootstrap JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Font Awesome JS -->
<script src="js/all.min.js"></script>

<!-- Student Ajax Call Javascript -->
<script type="text/javascript" src="js/ajaxrequest.js"></script>

</body>
</html>