
<?php
//import database

$conn = mysqli_connect("localhost","root","","garbagegodb");


if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $msg = $_POST["msg"];

  $query ="INSERT INTO `message` VALUES ('$name','$email','$phone','$msg');";
  mysqli_query($conn, $query);
  echo "<script>
  alert('Message sent successfully!');
  </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarbageGo</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link type="image/x-icon" rel="icon" href="img/11.ico">
    <link type="text/css" href="css/cover.css">
    <link rel="stylesheet" href="css/features.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link type="image/x-icon" rel="icon" href="img/11.ico">

    <style>
    .scroll-down {
  height: 7%;
  width: 2%;
  border: 2px solid white;
  position: absolute;
  left: 50%;
  color: white;
  bottom: 20px;
  border-radius: 50px;
  cursor: pointer;
}
.scroll-down::before,
.scroll-down::after {
  content: "";
  position: absolute;
  top: 20%;
  left: 50%;
  height: 10px;
  color: white;
  width: 10px;
  transform: translate(-50%, -100%) rotate(45deg);
  border: 5px solid white;
  border-top: transparent;
  border-left: transparent;
  animation: scroll-down 1s ease-in-out infinite;
}
.scroll-down::before {
  top: 30%;
  animation-delay: 0.3s;
  /* animation: scroll-down 1s ease-in-out infinite; */
}

@keyframes scroll-down {
  0% {
    /* top:20%; */
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    opacity: 1;
  }
  100% {
    top: 90%;
    opacity: 0;
  }
}
    </style>


    </head>

<body style="width:100%;">
    <section class="header">
      <div class="container">

      </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#"><img src="img/11.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button> -->
              <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                  <a class="nav-link text-light" href="#hanging-icons">About Us</a>
                  <a class="nav-link text-light" href="#custom-cards">Services</a>
                  <a class="nav-link text-light" href="#contactUs">Contact</a>
                </div>
              </div> -->
            </div>
          </nav>

            <div id="homedisplay" class="container bg-transparent">
              <center> <a class="navbar-brand" href="index.php"><img src="img/11.png" alt=""></a></center>
             <h4 class="deo1 text-center text-light" style="font-size: 30px;margin-top:5%;">-</h4>
             <h1 class="deo text-center text-light">GarbageGo!</h1><br>
             <!-- <p style="position:absolute; visibility:none;">No hassles, no delay</p> -->
            <!-- <center> <a class="navbar-brand" href="#"><img src="img/11.png" alt=""></a></center> -->
         <center style="margin-top: 80px;">
             <a href="login.php" class="btn btn-info" style="margin-right: 10px; padding-left: 25px; width:12% auto; padding-right: 25px;color:white;">Log In</a>
             <a href="signup.php" class="btn btn-light" style="margin-left: 10px; padding-left: 20px;padding-right: 20px; width:12% auto;">Register</a>
         </center>
       </div>
     </div>

    </section>

    <a href="#hanging-icons">
        <div class="scroll-down"></div>
      </a>


    <!--request-->
    <section class="request">

        <h3>Empowering Communities For Sustainable waste management </h3>
<br>
        <p style="width:100%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <center>  <a href="#contactUs" class="btn btn-primary">Know More..</a></center>
        <!-- <a href="login.html" class="hero">For more</a> -->

    </section>
<!-- services ------>
<!-- Services beginning -->
<div class="b-example-divider"></div>
<!-- About us -->
<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">About Us</h2>
    <p class="text-center text-dark p-3">
        Garbage Go is a dedicated platform striving to make a positive impact on waste management and environmental conservation.

     We believe in promoting responsible waste disposal to protect the environment. Our team is passionate about creating a cleaner and greener future for generations to come.
    </p>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <div>
          <h2>Our Vision</h2>
          <p>To be a leading force in transforming waste management and fostering sustainable living practices Jinja Municipality.</p><br><br>

        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
        </div>
        <div>
          <h2>Our Mission</h2>
        <p>  Our mission is to revolutionize waste management and foster a greener, more sustainable Jinja Municipality.
           We are dedicated to providing innovative solutions to the growing waste challenges faced by communities and businesses.</p>

        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
        </div>
        <div>
          <h2>Our Values</h2>
          <p>Environmental Stewardship: We are committed to protecting and preserving the environment through responsible waste management.
          Innovation: We continuously seek innovative solutions to address waste management challenges effectively.</p>

        </div>
      </div>
    </div>
  </div>

<div class="container px-4 py-" id="custom-cards">
  <h2 class="pb-2 border-bottom">Services</h2>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/img03.png');">
        <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1">
          <h2 class="pt-1 mt-5 mb-4 display-6 lh-1 fw-bold">Waste Collection</h2>
          <small style="text-align:justify;">We schedule and manage waste collection services for households, businesses, and communities.
             We coordinate with waste management companies/local authorities to ensure timely and efficient waste disposal.</small>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
            </li>
            <li>
            </li>
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <!-- <small>+200 households</small> -->
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              <small>+200 Households</small>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow" style="background-image: url('img/img02.png');">
        <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1">
          <h2 class="pt-1 mt-4 display-6 lh-1 fw-bold">Waste Management</h2>
          <small style="text-align:justify;">We provide reporting and analytics on waste collection, recyling rates, and environmental impact to users, businesses and local authorities.</small>
          <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>+4 Management Tools</small>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/img01.png');">
        <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1">
          <h2 class="pt-1 mt-5 mb-4 display-6 lh-1 fw-bold">Waste Auditing</h2>
          <small style="text-align:justify;">We conduct waste audits for businesses and institutions to identify opportunities for waste reduction and recycling improvements.</small>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>+120 Firms</small>
            </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</main>

<!--request-->
<!--<section class="request">
    <div>
    <h1>Request and order for our services in any area <br> around Jinja municipality.</h1>
    <a href="login.html" class="hero">REQUEST SERVICE</a>
    </div>
</section>-->



    <script>
        var navLinks = document.getElementById("navLinks")
    </script>

<!--contact us-->


<!-- Contact Info -->
<center>
<div class="mt-1 mb-1" id="contactUs">
    <!-- <div class="col-lg-2"></div> -->
    <section id="contact" class="col-lg-8">
        <h2>Contact Us</h2>
      <p>Have a question or need assistance? Feel free to get in touch with us.</p>
        <form action="" method="post" class="p-5">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required >

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Your Mobile number</label>
            <input type="number" id="contact" name="phone" >

            <label for="message">Your Message</label>
              <textarea id="message" rows="9" name="msg" required></textarea>
                <input type="submit" name="submit" value="Send">
            <button type="reset" value="message" visibility="hidden">Cancel Message</button>
        </form>
    </section>
</div></center>


<script src="js/bootstrap.bundle.min.js"></script>
<script>/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }</script>
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="background-color: 378c99;">
        <p class="col-md-4 mb-0 text-muted">&copy; 2023 Garbage Go, All rights reserved.</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#hanging-icons" class="nav-link px-2 text-muted">About Us</a></li>
          <li class="nav-item"><a href="#custom-cards" class="nav-link px-2 text-muted">Services</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy</a></li>
        </ul>
      </footer>
    </div>
</body>

</html>
