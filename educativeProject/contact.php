<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <!-- font awesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <!-- swiper css link -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <!-- css link -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section start  -->
    <header class="header">
      <a href="#" class="logo">
        <i class="fas fa-lightbulb"></i> Stone Bridge</a
      >
      <nav class="navBar">
        <div id="closed-navBar" class="fas fa-times"></div>
        <a href="main.php">Home</a>
        <a href="about.php">About</a>
        <a href="courses.php">Courses</a>
        <a href="contact.php">Contact</a>
        <a href="comment.php">Comment</a>
      </nav>
      <div class="icons">
        <div id="account-btn" class="fas fa-user"></div>
        <div id="menu-btn" class="fas fa-bars"></div>
      </div>
      <!-- header section ends -->
    </header>
    <!-- account form section start -->
    <div class="account-form">
      <div id="closeForm" class="fas fa-times"></div>
      <div class="buttons">
        <span class="btn active loginBtn" id="loginBtn">Login</span>
        <span class="btn registerBtn" id="regiterBtn">Register</span>
      </div>

      <form class="loginForm active">
        <h3>Login Form</h3>
        <input class="box" type="email" placeholder="Enter Email" />
        <input class="box" type="password" placeholder="Enter Password" />
        <div class="flex">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me">Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <input type="submit" value="Login now" class="btn" />
      </form>
      <form class="registerForm">
        <h3>Register Form</h3>
        <input class="box" type="email" placeholder="Enter Email" />
        <input class="box" type="password" placeholder="Enter Password" />
        <input class="box" type="password" placeholder="Confirm Password" />

        <input type="submit" value="Register Now" class="btn" />
      </form>
    </div>

    <!-- account form section ends -->
    <section class="heading-link">
      <h3>Contact Us</h3>
      <p><a href="index.html">Home</a> / Contact</p>
    </section>
    <!-- contact section starts -->
    <section class="contact">
      <h1 class="heading">Get in touch</h1>
      <div class="icons-container">
        <div class="icons">
          <i class="fas fa-clock"></i>
          <h3>Opening Hours</h3>
          <p>00:7am to 00:6pm</p>
        </div>
        <div class="icons">
          <i class="fas fa-phone"></i>
          <h3>Phone :</h3>
          <p>+233-556-230-613</p>
          <p>+145-456-231-986</p>
        </div>
        <div class="icons">
          <i class="fas fa-envelope"></i>
          <h3>Email :</h3>
          <p>tahirumustapha13@gmail.com</p>
          <p>abubakarmustapha23@gmail.com</p>
        </div>
        <div class="icons">
          <i class="fas fa-map"></i>
          <h3>Address :</h3>
          <p>Kumasi,Ghana</p>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="images/contact-img.png" alt="contact-img" />
        </div>
        <form action="">
          <h3>Send us a message</h3>
          <input type="text" class="box" placeholder="Name" />
          <input type="email" class="box" placeholder="Email" />
          <input type="number" class="box" placeholder="Number" />
          <textarea class="box" placeholder="Message"></textarea>
          <input type="submit" value="Send message" class="btn" />
        </form>
      </div>
    </section>
    <!-- contact section ends -->
    <!-- faqs section starts -->
    <section class="faq">
      <h1 class="heading">frequently asked questions</h1>
      <div class="acc-container">
        <div class="acc  active">
          <div class="acc-heading">
            <h3>How to contact for help?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>

        </div>

        <div class="acc" >
          <div class="acc-heading">
            <h3>How to to get admission in your school?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>
        <div class="acc">
          <div class="acc-heading">
            <h3>How to to get admission in your school?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>
        <div class="acc">
          <div class="acc-heading">
            <h3>How to to get admission in your school?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>

        <div class="acc">
          <div class="acc-heading">
            <h3>Which course is best for me as a science student?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>

        <div class="acc">
          <div class="acc-heading">
            <h3>How to register for admission online?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>

        <div class="acc">
          <div class="acc-heading">
            <h3>How much fees for Btech Computer Technology?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>

        <div class="acc">
          <div class="acc-heading">
            <h3>What payment method are avialable for fees payment</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>

        <div class="acc">
          <div class="acc-heading">
            <h3>What is your school's  past mark?</h3>
            <i class="fas fa-angle-down"></i>
          </div>
          <p class="acc-content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, quia
            iste? Ducimus vero, hic sed ipsa consectetur, dolor quae accusantium
            dignissimos necessitatibus ullam voluptatibus enim sit obcaecati
            soluta quia. Harum sequi nobis vel illum iusto esse magni voluptas
            magnam in!
          </p>
          
        </div>
      </div>
    </section>
    <!-- faqs section ends -->
    <!-- logo slider starts -->
    <div class="logo-container">
      <div class="swiper  logo-slider">
        <div class="swiper-wrapper">
           <div class="swiper-slide"><img src="images/partner-logo-1.png" alt="logo slider"></div>
           <div class="swiper-slide"><img src="images/partner-logo-2.png" alt="logo slider"></div>
           <div class="swiper-slide"><img src="images/partner-logo-3.png" alt="logo slider"></div>
           <div class="swiper-slide"><img src="images/partner-logo-4.png" alt="logo slider"></div>
           <div class="swiper-slide"><img src="images/partner-logo-5.png" alt="logo slider"></div>
        </div>
      </div>
    </div>
    <!-- logo slider ends -->
    <!-- footer section starts -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3><i class="fas fa-lightbulb"></i>Stone Bridge</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
            natus omnis
          </p>
          <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fa-brands fa-instagram"></a>
            <a href="#" class="fa-brands fa-linkedin"></a>
            <a href="#" class="fa-brands fa-square-whatsapp"></a>
          </div>
        </div>
        <div class="box">
          <h3>Quick Links</h3>
          <a href="index.html" class="link">Home</a>
          <a href="about.html" class="link">About</a>
          <a href="courses.html" class="link">Courses</a>
          <a href="contact.html" class="link">Contact</a>
          <a href="comment.html" class="link">Comment</a>
        </div>
        <div class="box">
          <h3>Useful Links</h3>
          <a href="#" class="link">Help Center</a>
          <a href="#" class="link">Ask Question</a>
          <a href="#" class="link">Send Feedback</a>
          <a href="#" class="link">Private Policy</a>
          <a href="#" class="link">terms of use</a>
        </div>
        <div class="box">
          <h3>Newsletter</h3>
          <p>Subscribe Latest Updates</p>
          <form>
            <input
              type="email"
              name="email"
              placeholder="Enter Email"
              class="email"
            />
            <input type="submit" value="Subscribe" class="btn" />
          </form>
        </div>
      </div>
      <div class="credits">
        Created by <span>Mustapha Tahiru</span> | &copy; all rights reserved!
      </div>
    </section>

    <!-- footer section ends -->

    <!-- swiperjs link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
  </body>
</html>
