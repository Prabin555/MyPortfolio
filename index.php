<?php
try {
  $db = new mysqli("localhost", "root", "", "prabinc");
} catch (Exception $exc) {
  echo $exc->getTraceAsString();
}
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  $is_insert = $db->query("INSERT INTO `contact_form`( `Name`, `Email`, `Message`) VALUES('$name', '$email', '$msg')");
  if ($is_insert == True) {
    echo "<script>alert('Form submitted successfully!');</script>";

  }


}
?>
<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Portfolio Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <style>
@import url('https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Kaisei+Tokumin&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap');
</style>

</head>

<body>
  <!-- Navigation bar start here -->
  <nav id="Top" style="margin-bottom: 20px; background-color: #255171;" class="navbar navbar-dark  navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img style="width: 65px; height: 65px; border-radius: 100%;" src="asset/img/logo/1logo.png" alt="Nav LOGO">
      </a>
      <button class="navbar-toggler mx-xs-2 " style="align-items: end;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      </button>
      <div class=" sidebar offcanvas offcanvas-start" style=" background-color: #255171; color: white;" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header text-white">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> <span
              style="font-family: 'Times New Roman', Times, serif; font-weight: bold; font-size: 3rem;">Prabin</span>
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">

          </button>
        </div>
        <div class="offcanvas-body ">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"
            style="font-size: 1.5em; font-weight: bold; align-items: baseline;  font-family: Old Standard TT serif;">
            <li class="nav-item">
              <a class="nav-link active  ram " aria-current="page" href="Home_page.html "  target="_blank" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ram" href="About_page.html" target="_blank">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ram" href="Service_page.html" target="_blank">Service</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link  ram" href="Work_page.html"  target="_blank">  My work</a>
            </li>
            <li class="nav-item  ram">
              <a class="nav-link" href="Contact_page.html"  target="_blank">  Contact Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ram" href="Note_page.html" target="_blank">Note</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav> <br><br><br>
  <!-- Navigation bar end here -->
  <!-- Home section start here -->
  <div class="container-fluid p-0 overflow-hidden  ">
    <div class="parallax">
    <div class="row px-1 gy-3">
      <div class="col-lg-6  col-12 mt-5">
        <div class="h-100 p-5 text-white"> 
          <h1 class="fs-md-3">
            <a href="#" style="text-decoration: none; font-family: Old Standard TT serif;" class="typewrite text-white" data-period="2000"
              data-type='[ "Hi I am Prabin.",  "I Love Design.", "I Love to Develop." ]'>
              <span class=""></span>
            </a> <br>
          </h1>
          <h2 style="padding-top: 20px;">
            <dl style="font-family: Almari sans;">
              <dt>Skill</dt>
              <dd> -Web Development: HTML, CSS, JavaScript</dd>
              <dd> - Graphic Design: Adobe Photoshop, Canva</dd>
              <dd> -UI/UX Design: Figma, Sketch
              </dd>
            </dl>
          </h2>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <img class="img-fluid" src="asset/img/logo/home.png" alt="">
      </div>
    </div>
    </div>
  </div><br>
  <!-- Home section end here -->

  <!-- About section start here -->
  <div class="container-fluid p-0 overflow-hidden parallax" id="Ram">
    <div class="row  gy-3 ps-4 pe-4">
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-in">
        <img class="img-thumbnail" src="asset/Home_wEBSITE.png" alt="">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 ">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">About Me</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Progress Bar</button>
          </li>
        </ul>
        <div class="tab-content " id="pills-tabContent">
          <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <div class="text-white">
              <h1 class="fw-bolder">About Me</h1>
              <p class="fs-lg-3 border-start border-3 fs-5 px-4" style="font-family: Old Standard TT serif;">Hello and welcome to my corner of the web! I'm Prabin
                Chaudhary, a passionate
                frontend web developer
                dedicated to crafting beautiful and functional digital experiences. I'm always on the lookout for
                exciting projects and
                opportunities to collaborate. Whether you're a fellow developer, a business owner, or someone with a
                bold idea, I'd love to hear from you! Feel free to reach out, and let's create something amazing
                together.</p>
              <button class="btn btn-primary fw-bolder fs-5 " style="height: 50px;">
                <a style="text-decoration: none;" class="text-white" href="asset/Prabin-Chaudhary-cv (3).pdf" download target="_blank">
                  Download CV
                </a>
              </button>
              <hr style="color: white;">
              <hr style="color: white;">
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="text-white">
              <h1 class="text-center text-white">Technical Skill</h1>
              <h4>HTML</h4>
              <div class="progress" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-success" style="width: 90%">90%</div>
              </div>
              <h4>CSS</h4>
              <div class="progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-info text-white" style="width: 80%">80%</div>
              </div>
              <h4>Javascript</h4>
              <div class="progress" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-warning text-white" style="width: 50%">50%</div>
              </div>
              <h4>Graphic Design</h4>
              <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-danger" style="width: 45%">45%</div>
              </div>
              <h4>Github</h4>
              <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-primary" style="width: 30%">30%</div>
              </div>
              <h4>Flutter</h4>
              <div class="progress" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-secondary" style="width: 25%">25%</div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- About section end Here -->

    <!-- service section start here  -->
    <div class=" text-center text-white mt-4" id="service">
          <h1>My service</h1>
        </div>
      <div class="container-fluid gx-0 overflow-hidden mt-3">
        
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 gy-3 ps-4 pe-4 px-lg-5 mt-2">
          <div class="col">
            <div class="service">
              <div class="p-4">
                <i class="fa-sharp fa-solid fa-code fa-2xl" style="color: black;"></i>
              </div>
              <h1 class="text-center text-black">Web Design</h1>
              <p style="padding: 10px;  font-family: Kaisei Tokumin, serif; color:black;" >
              Are you interested in beginner-level courses to learn the basics of web design, or are
               you seeking more advanced courses focusing on specific areas such as user experience design,
               front-end development, or graphic design for the web.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service">
              <div class="p-4">
                <span><i class="fa-solid fa-database fa-2xl" style="color:black;"></i></span>
              </div>
              <h1 class="text-center text-black">Datatbase</h1>
              <p style="padding: 10px;  font-family: Kaisei Tokumin, serif; color:black;" >
              Are you interested in beginner-level courses to learn the basics of Database, 
              or are you seeking more advanced courses focusing on specific areas such
               as user experience design" If you are interested, you can contact me.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service">
              <div class="p-4">
                <span> <img src="asset/video_editing.png" alt=""></span>
              </div>
              <h1 class="text-center text-black">Video Editing</h1>
              <p style="padding: 10px;  font-family: Kaisei Tokumin, serif; color:black;" >
              Are you interested in beginner-level courses to learn the basics of Video Editing, or 
              are you seeking more advanced courses focusing on specific areas 
              such as user  design" If you are interested, you can contact me

              </p>
            </div>
          </div>
        </div>
      </div>
    <!-- service section end here  -->

    <!-- My Work section start here -->
    <h1 class=" text-center text-white mt-4">My Work</h1>
    <div id="work_gallery" class="work_gallery">
      <a href="asset/01.jpg" target="_blank">
        <img src="asset/01.jpg">
      </a>
      <a href="asset/ph-1.png" target="_blank">
        <img src="asset/ph-1.png">
      </a>
      <a href="asset/ph-2.png" target="_blank">
        <img src="asset/ph-2.png">
      </a>
      <a href="asset/work1.jpg" target="_blank">
        <img src="asset/work1.jpg">
      </a>
      <a href="asset/work2.jpg" target="_blank">
        <img src="asset/work2.jpg">
      </a>
      <a href="asset/ph-3.png" target="_blank">
        <img src="asset/ph-3.png">
      </a>

    </div>
    <!-- My Work section start here -->
    <!-- contact section start here -->
    <div class="container-fluid mt-3">
      <div class="row px-5 gy-3">
        <div class=" col-12 col-md-6 col-lg-6">

          <div class="decoration2">
            <h1 class="text-white mb-4">Contact me</h1>
            <img class="img-fluid mb-4" style="width: 30px; height: 30px;" src="asset/email1.png" alt="">
            <a href="mailto:chyprabin224455@gmail.com">chyprabin224455@gmail.com</a><br>


            <img class="img-fluid" style="width: 30px; height: 30px;" src="asset/phone.png" alt="">
            <a href="tel:+9779742448156">9742448156</a>
          </div>
          <div class="mt-5 decoration2">
            <a href="https://www.facebook.com/profile.php?id=100079057660367" target="_blank">
              <img class="img-fluid" src="asset/facebook.png" alt="">
            </a>
            <a href="#">
              <img class="img-fluid" src="asset/twitter.png" alt="">
            </a>
            <a href="#">
              <img class="img-fluid" src="asset/instagram.png" alt="">
            </a>
            <a href="#">
              <img class="img-fluid" src="asset/linkedin.png" alt="">
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 myform">
          <form method="post" class="text-white ps-3">
            <label for="" class="form-group pt-5">Name</label>
            <input class="form-control bg-transparent text-white" type="text" name="name" required>
            <label for="Email" class="form-group">Email</label>
            <input class="form-control bg-transparent text-white" type="email" name="email" required>
            <label class="form-group">Message</label>
            <textarea class="form-control bg-transparent text-white" name="msg" cols="30" rows="5" required></textarea>
            <br>
            <input class="btn btn-primary" type="submit" value="Submit">

          </form>
        </div>
      </div>
    </div>




    <!-- Contact me section end here -->
    <footer class="bg-dark">
      <div class="container mt-3 py-4">
        <div class="row gy-3 px-4">
          <!-- About start -->
          <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <div class="about">
              <h5 class="text-white fw-bold">About</h5>
              <p class="text-white fs-5 ">I have tested a number of registry  fix and clean utililties and present my site. Hope you like it.</p>
            </div>
            <!-- End -->
          </div>
          <!-- About end -->
          <!-- Links start -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="link text-white">

              <ul class="decoration2" type="none">
                <h5 class="text-white fw-bold">Links</h5>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="Home_page.html" target="_blank">Home</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="about_page.html" target="_blank">About</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="Service_page.html" target="_blank">Service</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="Work_page.html" target="_blank">Work</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="Contact-page.html" target="_blank">Contact</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="Note_page.html" target="_blank">Note</a>
                </li>


              </ul>
            </div>
          </div>
          <!-- Links end -->
          <!-- Project  start -->

          <div class="col-lg-2 col-md-6 col-sm-6 col-6">
            <div class="project text-white">
              <ul class="decoration2" type="none" style="text-decoration: none;">
                <h5 class="text-white fw-bold">Projects</h5>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="https://github.com/PoOrBeEn/HTML-CSS-Project/tree/main/Animation">Project 2</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="https://github.com/PoOrBeEn/HTML-CSS-Project/tree/main/Nested%20Marquee">Project 2</a>
                </li>
                <li>
                  <i class="fa-solid fa-arrow-right" style="color: white;"></i>
                  <a href="https://github.com/PoOrBeEn/HTML-CSS-Project/tree/main/Sample%20of%20Form">Project 3</a>
                </li>

              </ul>
            </div>
          </div>
          <!-- Project End -->
          <!-- Question section -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="decoration2">
              <h5 class="text-white fw-bold">Have a Question?</h5>
              <address>
                <small>
                  <span><i class="fa-sharp fa-solid fa-location-dot fa-lg" style="color: #e7eaee;"></i></span>
                  <a href="#"> Dang, Nepal</a>
                </small>
              </address>
              <address>
                <small>
                  <span><i class="fa-solid fa-phone fa-lg" style="color: #eff1f6;"></i>+</span>
                  <a href="tell:+979742448156">9742448156
                  </a>
                </small>
              </address>
              <address>
                <small>
                  <span><i class="fa-regular fa-envelope fa-lg" style="color: #eff1f6;"></i></span>
                  <a href="mailto:chyprabin224455@gmail.com "> chyprabin224455@gmail.com </a>
                </small>
              </address>
            </div>
          </div>
          <!-- Question section -->
        </div>
        <div class="text-white text-center ">
          <p>Copyright ©2024 All rights reserverd | This is made with ❤ by Prabin_Chaudhary</p>
        </div>
      </div>
    </footer>






    <!-- Foooter Section end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
<script>
  let work_gallery = document.getElementById('work_gallery');

  lightGallery(work_gallery, {
    controls: true,
    download: true,

  });

</script>
<!-- This is for  scrolll animation   -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(
      
    );
  </script>

<!-- For home page type writer text -->
<script>
  var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="Amazing">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function () {
      that.tick();
    }, delta);
  };

  window.onload = function () {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .Amazing { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
  };
</script>

</html>