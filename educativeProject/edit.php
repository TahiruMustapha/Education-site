<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";
//create connection
$connection = new mysqli($servername, $username, $password,$database);

$id = "";
$name ="";
$email ="";
$phone = "";
$address = "";
$comments = "";

$errorMessage = "";

$successMessage = ""; 
if( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    //Get method, show the data of the client
      if( !isset($_GET['id']) ) {
        header("location: /educativeProject/index.php");  
        exit;
      }
      $id = $_GET['id'];
      //read the row of the selected comment from the database
      $sql = "SELECT * FROM  client WHERE id= $id";
      $result = $connection->query($sql);
      $row = $result->fetch_assoc();


      if(!$row) {
        header("location: /educativeProject/index.php");  
        exit;
      }
    //   $id = $row["id"];
      $name = $row["name"];
      $email = $row["email"];
      $phone = $row["phone"];
      $address = $row["address"];
      $comments = $row["comments"];
      
}else{
    //Post method update data of the comment
      $id = $_POST["id"];
      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $address = $_POST["address"];
      $comments = $_POST["comments"];

      do {
        if(empty($id) || empty($name) || empty($email) || empty($phone) || empty($address) || empty($comments)) {
            $errorMessage = "All fields are required!!";
          break;
        }
        $sql = "UPDATE client " .
        "SET name = '$name', email = '$email', phone = '$phone', address = '$address', comments = '$comments' " .
        "WHERE id = $id";
        $result = $connection->query($sql);

        if(!$result) {
            $errorMessage = "Invalid Query: " . $connection->error;
            break;
        }
        $successMessage = "Comment Updated Successfully";

        header("location: /educativeProject/index.php");  
        exit;
      } while (true);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>myshop</title>
    <link rel="stylesheet" href="php.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
    </header>
    <!-- header section ends -->
<section class="heading-link">
      <h3>Edit Comments</h3>
      <p><a href="index.html">Home</a> / Edit Comments</p>
    </section>
    <div class="conatiner my-5">
   <h2>Edit Comments</h2>
   <?php
     if( !empty($errorMessage) ) {
       
        echo "
        <div class = 'row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
                <div class = 'alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type ='button' class ='btn-close' data-bs-dismiss = 'alert' aria-label = 'Close'></button>
                </div>
          </div>
        </div>
        
        ";
     }
   
   ?>
   <?php
      if( !empty($successMessage) ) {
        echo "
        <div class = 'row mb-3' id='successMessage'>
            <div class='offset-sm-3 col-sm-6'>
                <div class = 'alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type ='button' class ='btn-close' data-bs-dismiss = 'alert' aria-label = 'Close'></button>
                </div>
          </div>
        </div>
        ";
      }
    ?>
   <form  method="post" class="createForm" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class = 'row mb-3' >
         <label class ="col-sm-3 col-form-label">Name</label>
         <input type="text" class='form-control' name="name" value="<?php echo $name; ?>" >
    </div>
    <div class = " row mb-3" >
         <label class ="col-sm-3 col-form-label">Email</label>
         <input type="email" class='form-control' name="email" value="<?php echo $email; ?>" >
    </div>
    <div class = " row mb-3" >
         <label class ="col-sm-3 col-form-label">Phone</label>
         <input type="number" class='form-control' name="phone" value="<?php echo $phone; ?>" >
    </div>
    <div class = " row mb-3" >
         <label class ="col-sm-3 col-form-label">Address</label>
         <input type="text" class='form-control' name="address" value="<?php echo $address ?>" >
    </div>
    <div class = " row mb-3" >
         <label class ="col-sm-3 col-form-label">Comments</label>
         <textarea name="comments" type="text" class='form-control'value="<?php echo "$comments;" ?>" ></textarea>
    </div>
    
    <div  id="createBtnLinks" >
         <div  class="create-btn" >
               <button type="submit" class="btn btn-primary" id="createBtn" >Submit</button>
         </div>

         <div  class="cancel-btn">
               <a href="/myshop/index.php" class="btn btn-outlined" id="cancelBtn" role="button" >Cancel</a>
         </div>
    </div>
   </form>
    </div>
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
</body>
</html>