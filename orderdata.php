
<?php
session_start();
if(isset($_SESSION["isAdmin"])!=true){
  
    echo "please log in";
    header("refresh:2; url=login.php"); 
    exit();
}
?>


<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM orders");
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

 <?php
if (mysqli_num_rows($result) > 0) {
?>

</body>
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
                        <li><?php echo "Username: ". $_SESSION["username"];?></li>
                        <li><a class="link" href="signout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
            
        </section>
  <h1 style="text-align: center; color: #261C2C; margin-bottom: 30px;">Order Data</h1>
  <table>
  <tr>
    <td><h3>ID&emsp;&emsp;</h3></td>
    <td><h3>Username&emsp;&emsp;</h3></td>
    <td><h3>Product ID&emsp;</h3></td>
    <td><h3>Price</h3></td>
    

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["product_id"]; ?></td>
    <td><?php echo $row["price"]." tk";?> </td> 
    
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
 }

else{
    echo "No result found";
}
?>
 </body>
</html>