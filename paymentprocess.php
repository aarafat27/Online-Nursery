<?php

session_start();
if(isset($_SESSION["isCustomer"])!=true){
  
    echo "please log in";
    header("refresh:2; url=login.php"); 
    exit();
}
?>

<?php
if(isset($_POST['submit']))
{

//$username = trim($_POST["username"]);
$uname =$_SESSION["username"];
$id = trim($_POST["id"]);
// echo $username;
include_once 'database.php';
$sql1="SELECT price FROM product WHERE id ='$id'";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION["price"] = $row["price"];
$price = $_SESSION["price"];
include_once 'database.php';
$sq2 = "INSERT INTO orders (username, product_id, price) VALUES ('$uname', '$id', '$price')";
if (mysqli_query($conn, $sq2)) {
    echo "Order Complete";
    header("refresh:2; url=customerpanel.php");
  } else {
    echo "Error: " . $sq2 . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}

?>

