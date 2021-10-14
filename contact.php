<?php
	$sql=mysql_connect("localhost","bloodon1_mood704","chaitanya123");
	$sql1=mysql_select_db("bloodon1_mood704",$sql);
	if(isset($_POST['submit'])) {

	$a=$_POST['name'];
	$b=$_POST['email'];
	$c=$_POST['subject'];
	$d=$_POST['message'];
	
mail("wingzacademy.com@gmail.com","wingzacademy.com","name=$a \n\n email=$b \n\n Subject=$c \n\n message=$d");
mail($b,"wingzacademy.com","Thank for registering with wingzacademy we will get back to you shortly.");	

$message = 'Thank for registering with wingzacademy we will get back to you shortly.';


	
			//$i = "INSERT INTO hospital (name, phone, address, city, pin_code, date, time, message,image) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g','$h','$image')";
			//$j = mysql_query($i) or die(mysql_error());
			
	echo "<script>alert('Your Query is Successfully Send !!!');</script>";
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <title>Wingz Academy | Contact</title>

 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

 <link rel="stylesheet" href="css/animate.css" />
<link rel="shortcut icon" type="image/jpg" href="images/logo_t.png" />
 <link rel="stylesheet" href="css/owl.carousel.min.css" />
 <link rel="stylesheet" href="css/owl.theme.default.min.css" />
 <link rel="stylesheet" href="css/magnific-popup.css" />

 <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
 <link rel="stylesheet" href="css/jquery.timepicker.css" />

 <link rel="stylesheet" href="css/flaticon.css" />
 <link rel="stylesheet" href="css/style.css" />
 <style>
 .map_div{
     text-align:center;
     margin:0 auto;
     width:100%;
     height:200px;
 }
     @media(max-width:1400px)
     {
         iframe{
             height:200px;
             width:100%;
         }
     }
     
 </style>
</head>

<body>
 <nav class="
        navbar navbar-expand-lg navbar-dark
        ftco_navbar
        bg-dark
        ftco-navbar-light
      " id="ftco-navbar">
  <div class="container">
   <a class="navbar-brand" href="index.html">
    <img src="images/logo_t.png" style="width: 70px; height: 70px" /><span>Wingz</span>Academy</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span>
    Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
     <li class="nav-item">
      <a href="index.html" class="nav-link">Home</a>
     </li>
     <li class="nav-item">
      <a href="about.html" class="nav-link">About</a>
     </li>
     <li class="nav-item">
      <a href="course.html" class="nav-link">Course</a>
     </li>
     <li class="nav-item">
      <a href="Gallery.html" class="nav-link">Gallery</a>
     </li>
     <!-- <li class="nav-item">
      <a href="blog.html" class="nav-link">Blog</a>
     </li> -->
     <li class="nav-item active">
      <a href="contact.html" class="nav-link">Contact</a>
     </li>
    </ul>
   </div>
  </div>
 </nav>
 <!-- END nav -->

 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC01126.jpg')">
  <div class="overlay"></div>
  <div class="container">
   <div class="
            row
            no-gutters
            slider-text
            align-items-end
            justify-content-center
          ">
    <div class="col-md-9 ftco-animate pb-5 text-center">
     <p class="breadcrumbs">
      <span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
      <span>Contact us <i class="fa fa-chevron-right"></i></span>
     </p>
     <h1 class="mb-0 bread">Contact us</h1>
    </div>
   </div>
  </div>
 </section>

 <section class="ftco-section">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-12">
     <div class="wrapper">
      <div class="row no-gutters">
       <div class="
                    col-lg-8 col-md-7
                    order-md-last
                    d-flex
                    align-items-stretch
                  ">
        <div class="contact-wrap w-100 p-md-5 p-4">
         <h3 class="mb-4">Get in touch</h3>
         <form method="POST" id="contactForm" name="contactForm" class="contactForm">
          <div class="row">
           <div class="col-md-6">
            <div class="form-group">
             <label class="label" for="name">Full Name</label>
             <input type="text" class="form-control" name="name" id="name"
              placeholder="Name" />
            </div>
           </div>
           <div class="col-md-6">
            <div class="form-group">
             <label class="label" for="email">Email Address</label>
             <input type="email" class="form-control" name="email" id="email"
              placeholder="Email" />
            </div>
           </div>
           <div class="col-md-12">
            <div class="form-group">
             <label class="label" for="subject">Subject</label>
             <input type="text" class="form-control" name="subject" id="subject"
              placeholder="Subject" />
            </div>
           </div>
           <div class="col-md-12">
            <div class="form-group">
             <label class="label" for="#">Message</label>
             <textarea name="message" class="form-control" id="message" cols="30"
              rows="4" placeholder="Message"></textarea>
            </div>
           </div>
           <div class="col-md-12">
            <div class="form-group">
             <input type="submit" name="submit" class="btn btn-primary" />
             <div class="submitting"></div>
            </div>
           </div>
          </div>
         </form>
        </div>
       </div>
       <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
        <div class="info-wrap bg-primary w-100 p-md-5 p-4">
         <h3>Let's get in touch</h3>
         <p class="mb-4">
          We're open for any suggestion or just to have a chat
         </p>
         <div class="dbox w-100 d-flex align-items-start">
          <div class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
           <span class="fa fa-map-marker"></span>
          </div>
          <div class="text pl-3">
           <p>
            <span>Address:</span> Address - 685, Russell Chowk,
            Jabalpur. 482001
           </p>
          </div>
         </div>
         <div class="dbox w-100 d-flex align-items-center">
          <div class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
           <span class="fa fa-phone"></span>
          </div>
          <div class="text pl-3">
           <p>
            <span>Phone:</span>
            <a href="tel://1234567920">+91 7987819240 </a>
           </p>
          </div>
         </div>
         <div class="dbox w-100 d-flex align-items-center">
          <div class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
           <span class="fa fa-paper-plane"></span>
          </div>
          <div class="text pl-3">
           <p>
            <span>Email:</span>
            <a href="wingsacademy.jbp@gmail.com">wingsacademy.jbp@
             gmail.com</a>
           </p>
          </div>
         </div>
         <div class="dbox w-100 d-flex align-items-center">
          <div class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        ">
           <span class="fa fa-globe"></span>
          </div>
          <div class="text pl-3">
           <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-12 mt-5 map_div">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.1920046325386!2d79.93475941480365!3d23.163191384881944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981ae0c318d0e13%3A0x5e9e71910eccbd94!2s685%2C%20Maharshi%20Dayanand%20Saraswati%20Chowk%2C%20Napier%20Town%2C%20Jabalpur%2C%20Madhya%20Pradesh%20482001!5e0!3m2!1sen!2sin!4v1624804429731!5m2!1sen!2sin" width="1100" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
   </div>
  </div>
 </section>
 <footer class="ftco-footer ftco-no-pt">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p style="text-transform:capitalize;">
            communication is your ticket to success. start your journey towards success through our programs.
          </p>
          <ul
            class="ftco-footer-social list-unstyled float-md-left float-lft"
          >
            <!-- <li class="ftco-animate">
              <a href="#"><span class="fa fa-youtube"></span></a>
            </li> -->
            <!-- <li class="ftco-animate">
              <a href="#"><span class="fa fa-facebook"></span></a>
            </li> -->
            <li class="ftco-animate">
              <a
                href="https://instagram.com/wingzacademy.jbp?utm_medium=copy_link"
                ><span class="fa fa-instagram"></span
              ></a>
            </li>
            <li class="ftco-animate">
              <a href="https://www.linkedin.com/in/mukta-dengra-ab405b62"
                ><span class="fa fa-linkedin"></span
              ></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Help Desk</h2>
          <ul class="list-unstyled">
            <li><a href="contact.html" class="py-2 d-block">Customer Care</a></li>
            <!-- <li><a href="#" class="py-2 d-block">Legal Help</a></li> -->
            <li><a href="contact.html" class="py-2 d-block">Services</a></li>
            <li><a href="contact.html" class="py-2 d-block">Privacy and Policy</a></li>
            <!-- <li><a href="#" class="py-2 d-block">Refund Policy</a></li> -->
            <li><a href="contact.html" class="py-2 d-block">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">Our Courses</h2>
          <ul class="list-unstyled">
            <li><a href="course.html" class="py-2 d-block"> Spoken English</a></li>
            <li>
              <a href="course.html" class="py-2 d-block"
                >PERSONALITY DEVELOPMENT MODULE</a
              >
            </li>
            <li>
              <a href="course.html" class="py-2 d-block">Campus Preparatory Module</a>
            </li>
            <li><a href="course.html" class="py-2 d-block">IELTS TRAINING</a></li>
            <li><a href="course.html" class="py-2 d-block">Evening Club</a></li>
            <li><a href="course.html" class="py-2 d-block">SUNDAY School</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li>
                <span class="icon fa fa-map-marker"></span
                ><span class="text">
                  Address - 685, Russell Chowk, Jabalpur. 482001</span
                >
              </li>
              <li>
                <a href="tel:+917987819240">
                  <span class="icon fa fa-phone"></span
                  ><span class="text"> +91 7987819240</span></a
                >
              </li>
              <li>
                <a href="mailto: wingsacademy.jbp@gmail.com?subject = Feedback&body = Message"
                  ><span class="icon fa fa-paper-plane"></span
                  ><span class="text"> wingsacademy.jbp@ gmail.com</span>
                  </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved |
          <!-- This template is made with -->
          <!-- <i class="fa fa-heart" aria-hidden="true"></i> by -->
          <a href="#" target="_blank">Wingz Academy</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>

 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen">
  <svg class="circular" width="48px" height="48px">
   <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
   <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
    stroke="#F96D00" />
  </svg>
 </div>

 <script src="js/jquery.min.js"></script>
 <script src="js/jquery-migrate-3.0.1.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.easing.1.3.js"></script>
 <script src="js/jquery.waypoints.min.js"></script>
 <script src="js/jquery.stellar.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/jquery.animateNumber.min.js"></script>
 <script src="js/bootstrap-datepicker.js"></script>
 <script src="js/scrollax.min.js"></script>
 <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
 <script src="js/google-map.js"></script>
 <script src="js/main.js"></script>
</body>

</html>