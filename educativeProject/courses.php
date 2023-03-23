<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
   <!-- header section start  -->
   <header class="header">
    <a href="#" class="logo"> <i class="fas fa-lightbulb"></i>  Stone Bridge</a>
    <nav class="navBar">
      <div id="closed-navBar" class="fas fa-times" ></div>
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
        <span class="btn active loginBtn " id="loginBtn">Login</span>
        <span class="btn registerBtn"id="regiterBtn" >Register</span>
      </div>
      
      <form class="loginForm active">
        <h3>Login Form</h3>
        <input class="box" type="email" placeholder="Enter Email">
        <input class="box" type="password" placeholder="Enter Password">
         <div class="flex">
          <input type="checkbox" name="" id="remember-me">
          <label for="remember-me">Remember me</label>
          <a href="#">Forgot Password?</a>
        
         </div>
         <input type="submit" value="Login now" class="btn">
      </form>
      <form class="registerForm ">
        <h3>Register Form</h3>
        <input class="box" type="email" placeholder="Enter Email">
        <input class="box" type="password" placeholder="Enter Password">
        <input class="box" type="password" placeholder="Confirm Password">
       
         <input type="submit" value="Register Now" class="btn">
      </form>
     </div>

   <!-- account form section ends -->
   <section class="heading-link">
    <h3>Our Courses</h3>
    <p><a href="index.html">Home</a> / Courses</p>
  </section>
  <!-- courses section starts -->
  <section class="courses">
    <h1 class="heading">Our Famous Courses</h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/course-2-1.jpg" alt=" courseImg">
          <h3>Development</h3>
        </div>
        <div class="content">
          <h3>Choose what is best for you!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum debitis. Fugit veritatis autem quos.</p>
         <a href="#" class="btn" >Learn More</a>
         <div class="icons">
          <span> <i class="fas fa-book" ></i> 12 Modules</span>
          <span> <i class="fas fa-clock" ></i> 4 hours</span>
         </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/course-2-2.jpg" alt=" courseImg">
          <h3>Engineering</h3>
        </div>
        <div class="content">
          <h3>Choose what is best for you!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum debitis. Fugit veritatis autem quos.</p>
         <a href="#" class="btn" >Learn More</a>
         <div class="icons">
          <span> <i class="fas fa-book" ></i> 12 Modules</span>
          <span> <i class="fas fa-clock" ></i> 4 hours</span>
         </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/course-2-3.jpg" alt=" courseImg">
          <h3>Mathematics</h3>
        </div>
        <div class="content">
          <h3>Choose what is best for you!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum debitis. Fugit veritatis autem quos.</p>
         <a href="#" class="btn" >Learn More</a>
         <div class="icons">
          <span> <i class="fas fa-book" ></i> 12 Modules</span>
          <span> <i class="fas fa-clock" ></i> 4 hours</span>
         </div>
        </div>
      </div>

      <div class="box hide">
        <div class="image">
          <img src="images/course-2-4.jpg" alt=" courseImg">
          <h3>Medicine</h3>
        </div>
        <div class="content">
          <h3>Choose what is best for you!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum debitis. Fugit veritatis autem quos.</p>
         <a href="#" class="btn" >Learn More</a>
         <div class="icons">
          <span> <i class="fas fa-book" ></i> 12 Modules</span>
          <span> <i class="fas fa-clock" ></i> 4 hours</span>
         </div>
        </div>
      </div>

      <div class="box hide">
        <div class="image">
          <img src="images/course-2-5.jpg" alt=" courseImg">
          <h3>Finance</h3>
        </div>
        <div class="content">
          <h3>Choose what is best for you!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum debitis. Fugit veritatis autem quos.</p>
         <a href="#" class="btn" >Learn More</a>
         <div class="icons">
          <span> <i class="fas fa-book" ></i> 12 Modules</span>
          <span> <i class="fas fa-clock" ></i> 4 hours</span>
         </div>
        </div>
      </div>

      <div class="box hide">
        <div class="image">
          <img src="images/course-2-6.jpg" alt=" courseImg">
          <h3>Education</h3>
        </div>
        <div class="content">
          <h3>Choose what is best for you!</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum debitis. Fugit veritatis autem quos.</p>
         <a href="#" class="btn" >Learn More</a>
         <div class="icons">
          <span> <i class="fas fa-book" ></i> 12 Modules</span>
          <span> <i class="fas fa-clock" ></i> 4 hours</span>
         </div>
        </div>
      </div>
    </div>
    <div class="load-more">
      <div class="btn">Load More</div>
    </div>
  </section>
  <!-- courses section ends -->

<!-- footer section starts -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3><i class="fas fa-lightbulb" ></i>Stone Bridge</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam natus omnis</p>
          <div class="share">
            <a href="#" class="fab fa-facebook" ></a>
            <a href="#" class="fab fa-twitter" ></a>
            <a href="#" class="fa-brands fa-instagram" ></a>
            <a href="#" class="fa-brands fa-linkedin" ></a>
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
          <form >
            <input type="email" name="email" placeholder="Enter Email" class="email"> 
             <input type="submit" value="Subscribe" class="btn">
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