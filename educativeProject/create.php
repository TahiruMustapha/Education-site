<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";
//create database
$connection = new mysqli($servername, $username, $password,$database);
$name ="";
$email ="";
$phone = "";
$address = "";
$comments = "";

$errorMessage = "";

$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $comments = $_POST["comments"];

    do {
         if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($comments)){
             $errorMessage = "All the field are required";
             break;
         }
          //Add new comment to the database 
         $sql = "INSERT INTO client (name,email,phone,address,comments)" .
         "VALUES ('$name','$email','$phone','$address','$comments')";
         $result = $connection->query($sql);

         if(!$result) {
            $errorMessage = "Invalid Query: " . $connection->error;
            break;
         }

         $name ="";
        $email ="";
        $phone = "";
        $address = "";
        $comments = "";

        $successMessage = "Client Added Successfully";
         header("location: /educativeProject/index.php");
         exit;

    } while (false);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="conatiner my-5">
   <h2>New Comment</h2>
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
</body>
</html>