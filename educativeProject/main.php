<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Educative Website</title>
    <!-- font awesome cdn link -->
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
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
    <!-- home section starts -->
    <section class="home">
      <div class=" swiper homeSlider">
        <div class="swiper-wrapper">
          <section
            class=" swiper-slide  slide"
            style="background: url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
              <h3>Find the best courses to study online!</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                beatae ipsam quam quod saepe porro assumenda molestias dolore
                delectus aspernatur?
              </p>
              <a href="#" class="btn">Get Started </a>
            </div>
          </section>
          <section
            class=" swiper-slide  slide"
            style="background: url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
              <h3>How to enroll on a particular course online!!</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                beatae ipsam quam quod saepe porro assumenda molestias dolore
                delectus aspernatur?
              </p>
              <a href="#" class="btn">Get Started </a>
            </div>
          </section>
          <section
            class="swiper-slide slide"
            style="background: url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
              <h3>Study everywhere you are at your comfort time!!!</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                beatae ipsam quam quod saepe porro assumenda molestias dolore
                delectus aspernatur?
              </p>
              <a href="#" class="btn">Get Started </a>
            </div>
          </section>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        <div class="swiper-pagination"></div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </section>
    <!-- home section ends -->
    <!-- subject section starts-->
    <section class="subjects">
       <h1 class="heading">Find Popular Subjects On Our Websites</h1>
       <div class="box-container">
        <div class="box">
          <img src="images/subject-icon-1.png" alt="">
          <h3>Human Computer Interractions</h3>
          <p>12 modules</p>
        </div>
        <div class="box">
          <img src="images/subject-icon-2.png" alt="">
          <h3>Discrete Mathematics</h3>
          <p>12 modules</p>
        </div>
        <div class="box">
          <img src="images/subject-icon-3.png" alt="">
          <h3>Operation Research</h3>
          <p>12 modules</p>
        </div>
        <div class="box">
          <img src="images/subject-icon-4.png" alt="">
          <h3>Database Systems</h3>
          <p>12 modules</p>
        </div>
        <div class="box">
          <img src="images/subject-icon-5.png" alt="">
          <h3>Backend Technology</h3>
          <p>12 modules</p>
        </div>
        <div class="box">
          <img src="images/subject-icon-6.png" alt="">
          <h3>System Analysis & Design</h3>
          <p>12 modules</p>
        </div>
       </div>
    </section>
    <!-- subject section ends -->
    <!-- home courses slider section starts -->
    <section class="home-courses">
      <div class=" swiper home-courses-slider">
        <div class="swiper-wrapper">
          <div class=" swiper-slide slide">
            <div class="image">
              <img src="images/course-1-1.png" alt="sliderImg">
              <h3>Web Development</h3>
            </div>
           
            <div class="content">
              <h3>Cloud Computing</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam earum iusto, vel omnis inventore accusamus!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/course-1-2.png" alt="sliderImg">
              <h3>NetWorking</h3>
            </div>
           
            <div class="content">
              <h3>Software Engineering</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam earum iusto, vel omnis inventore accusamus!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/course-1-3.png" alt="sliderImg">
              <h3>Artifitial Intelligence</h3>
            </div>
           
            <div class="content">
              <h3>Information Technology</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam earum iusto, vel omnis inventore accusamus!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/course-1-4.png" alt="sliderImg">
              <h3>Electrical Engineering</h3>
            </div>
            
            <div class="content">
              <h3>Chemical  Engineering</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam earum iusto, vel omnis inventore accusamus!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/course-1-5.png" alt="sliderImg">
              <h3>Computer Engineering</h3>
            </div>
           
            <div class="content">
              <h3>Civil Engineering</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam earum iusto, vel omnis inventore accusamus!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="image">
              <img src="images/course-1-6.png" alt="sliderImg">
              <h3>Chemical Engineering</h3>
  
            </div>
            <div class="content">
              <h3>Petrolluem Engineering</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam earum iusto, vel omnis inventore accusamus!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- home courses slider section ends -->
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
