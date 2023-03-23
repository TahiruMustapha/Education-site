<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="php.css">
    <link rel="stylesheet" href="style.css">
    <title>Comments</title>
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
    <div class="container my-5">
          <h2>Contact & Comments Section </h2>
          <a href="/educativeProject/create.php" class ="btn btn-primary" role="button">New Comment</a>
          <br>
          <table class="table">
            <th>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Comments</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </th>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "myshop";
                //create connection
                $connection = new mysqli($servername, $username,$password,$database);
                //check connection
                if($connection->connect_error) {
                    die("connection failed: " . $connection->connect_error);
                }
                //read all row from database table
                $sql = "SELECT * FROM client";
                $result = $connection->query($sql);
                if(!$result){
                    die('Invalid Query: '. $connection->error);
                }
                //read data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[comments]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a  href='/educativeProject/edit.php?id=$row[id]' class = 'btn-edit'  >Edit</a>
                        <a  href='/educativeProject/delete.php?id=$row[id]' class = 'btn-delete'>Delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
                
            </tbody>
          </table>
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