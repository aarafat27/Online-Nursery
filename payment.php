
<?php
session_start();
if(isset($_SESSION["isCustomer"])!=true){
  
    echo "please log in";
    header("refresh:2; url=login.php"); 
    exit();
}
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <form action="paymentprocess.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>username :</span>
                    <input type="text" name ="username">
                </div>
                <div class="inputBox">
                    <span>product id :</span>
                    <input type="int" name = "id">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="City">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Bangladesh">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

              
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Mr./Mrs .....">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                   
                </div>
                <div class="inputBox">
                    <span>Promo Code :</span>
                    <input type="text" placeholder="Promo Code">
                </div>

            </div>
            
    
        </div>

        
        
        <!-- <input type="submit" name="Confirm Order"> -->
        <input type="submit" name="submit">
        

    </form>

</div>    
<a href="index.php">back</a>
</body>
</html>