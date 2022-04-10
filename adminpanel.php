<?php
session_start();
if(isset($_SESSION["isAdmin"])!=true){
  
    echo "please log in";
    header("refresh:2; url=login.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html>
 <head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Green</title>
    <link rel="stylesheet" href="style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/5301593776.js" crossorigin="anonymous"></script>

 </head>
<body>
<div class="container">
        <!-- navBar start -->
        <section>
            <div class="navBar">
                <div class="icon">
                    <div class="bar">
                        <i class="menuIcon fas fa-bars" style="font-size: 24px;"></i>
                    </div>
                    <h2>Go Green Nursery</h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a class="link" href="index.php">Home</a></li>
                        <li><a class="link" href="#">Products</a></li>
                        <li><?php echo "Username: ". $_SESSION["username"];?></li>
                        <li><a class="link" href="signout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- navBar end -->


<!-- Popular collection start-->
<h1 style="text-align: center; color: #261C2C; margin-bottom: 30px;">Admin Panel</h1>
<section class="popular-collection">
  <div class="grid-container">
  <div class="grid-item">
      <div class="box2">
          <div class="img">
            <img src="images/product2.jpg">
          </div>
          <h3>&emsp;&emsp;&emsp;&emsp;Product Data</h3>
          <button class="button button1">  <a href="plantdata.php"> Details</a>  </button>
     </div>
   </div>



   <div class="grid-item">
      <div class="box2">
          <div class="img">
            <img src="images/users.jpeg">
          </div>
          <h3>&emsp;&emsp;&emsp;&emsp;User Data</h3>
           <button  class="button button1"> <a  href="userdata.php">Details</a>  </button>
     </div>
   </div>

   <div class="grid-item">
      <div class="box2">
          <div class="img">
            <img src="images/order.png">
          </div>
          <h3>&emsp;&emsp;&emsp;&emsp;Order Data</h3>
          <button class="button button1">  <a href="orderdata.php">Details</a>  </button>
     </div>
   </div>

</div>
</section>

 </body>
</html>


