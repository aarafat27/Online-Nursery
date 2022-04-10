<?php
session_start();
if(isset($_SESSION["isCustomer"])!=true){
  
    echo "please log in";
    header("refresh:2; url=login.php"); 
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
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
                        <li><?php echo "Userame: ". $_SESSION["username"];?></li>
                        <li><a class="link" href="signout.php">Logout</a></li>
                    </ul>
                 </div>
              </div>

            
        </section>
      <h1 style="text-align: center; color: #261C2C; margin-bottom: 30px;">User Panel</h1>

  <table>
  <tr>
    <td><h5>Username&emsp;</h5></td>
    <td><h5>Name&emsp;</h5></td>
    <td><h5>Phone Number&emsp;</h5></td>
    <td><h5>Email&emsp;</h5></td>
  </tr>
  <tr>
    <td><?php echo $_SESSION["username"]; ?></td>
    <td><?php echo $_SESSION["name"]; ?></td>
    <td><?php echo $_SESSION["phone"]; ?></td>
    <td><?php echo $_SESSION["email"]; ?></td>
  </tr>
  </table>
  <h1 style="text-align: center; color: #261C2C; margin-bottom: 30px;">Order List</h1>

 <?php
 $uname = $_SESSION["username"];
include_once 'database.php';
$sql2="SELECT * FROM orders WHERE username ='$uname'";

$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
    ?>

    <table>
      <tr>
       <td><h5>Username&emsp;</h5></td>
       <td><h5> Order Id &emsp;</h5></td>
       <td><h5>Product Id &emsp;</h5></td>
       <td><h5>Price&emsp;</h5></td>
       <?php
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
     
     ?>
      </tr>
     <tr>
     <td><?php echo $row["username"]?> &emsp; &emsp; &emsp;&emsp;</td>
     <td><?php echo $row["id"]?>&emsp; &emsp; &emsp;&emsp;</td>
     <td><?php echo $row["product_id"]?> &emsp; &emsp; &emsp;&emsp;</td>
     <td><?php echo $row["price"]." tk"?> &emsp; &emsp; &emsp;&emsp;</td>
  
   </tr>
   <br>
   </table>
<?php
  
  }
} else {
  echo "0 results";
}

mysqli_close($conn);




?>
</body>
</html>