<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM product");
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
                        <li><a class="link" href="#">Home</a></li>
                        <li><a class="link" href="#">Products</a></li>
                        <li><a class="link" href="signup.php">Sign up</a></li>
                        <li><a class="link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- navBar end -->


<!-- Popular collection start-->
<h2 style="text-align: center; color: #261C2C; margin-bottom: 30px;">Popular Collection</h2>
<section class="popular-collection">



<?php
if (mysqli_num_rows($result) > 0) {
?>

<?php
$i=0;
while($row = mysqli_fetch_array($result)){
?>

  <div class="grid-container">
  <div class="grid-item">
      <div class="box">
          <div class="img">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="">
          </div>

          <h3><?php echo "Name: "; ?>
          <?php echo $row["name"]; ?></h3>
          <h3><?php echo "ID: "; ?>
          <?php echo $row["id"]; ?></h3>
          <h3><?php echo "Price :"; ?>
          <?php echo$row["price"];
          echo" tk" ?>

           </h3>
          
          <p>Available</p>
          <button class="button button1"><a href="payment.php"> Buy</a>  </button>
     </div>
   </div>



<?php
$i++;
if($i%3==0)
{
  
  echo "";
?>

</div>
</section>
<section class="popular-collection">

<?php
 
}


}
?>




<?php
}
else{
    echo "No result found";
}
?>
 </div>
   <div class="see-more">
    <a href="#"><span>See More <i style="margin-left: 10px;"
      class="animation fa fa-arrow-circle-right"></i></span></a>

      </div>
        </section>
<!-- Contact area start -->
<section>
            <h1 align="center " style="font-size: 36px; margin: 40px 0">Contact us</h1>
            <div class="contact">
                <div class="address">
                    <div class="box">
                        <h2><i class="fas fa-map-marker-alt"></i> Address</h2>
                        <p>Kuratoli <br> Kuril, Aiub</p>
                    </div>
                    <div class="box">
                        <h2><i class="fas fa-phone"></i> Phone</h2>
                        <p>+889683764389 <br> +884576965234</p>
                    </div>
                    <div class="box">
                        <h2> <i class="fas fa-envelope-square"></i> Email</h2>
                        <p>gogreen@gmail.com <br> green@yahoo.com</p>
                    </div>
                </div>
                <div class="message">
                    <div>
                        <input type="text" placeholder="Your Name"> <br>
                        <input type="text" placeholder="Your Phone"> <br>
                        <input type="text" placeholder="Your Message"> <br>
                        <button>Send</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->
</div>
<footer>
  <h2>Go Green Nursery</h2>
  <h4>Copyright © 2022 go green nursury</h4>
  <p>All rights reserved</p>
  <span>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-dribbble"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-youtube"></i>
  </span>
</footer>

 </body>
</html>


