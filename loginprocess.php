<?php
include_once 'database.php';

if(isset($_POST["submit"]))
{
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
        echo $username_err;
        header ("refresh:2; url=login.php");
        exit();
        
    } else{
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["pass"]))){
        $password_err = "Please enter your password.";
        echo $password_err;
        header ("refresh:2; url=login.php");
        exit();
    } else{
        $password = trim($_POST["pass"]);
    }
    
    $sql1="SELECT * FROM userdata WHERE username = '$username' and upassword = '$password'";
    $result = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count =  mysqli_num_rows($result);

    if ($count == 1) 
       {
        $usertype = $row["user_type"];
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["name"] = $row["name"];
        $_SESSION["phone"] = $row["phone_no"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["usertype"] = $usertype;
        if ($usertype == 'a')
       {
        $_SESSION["isAdmin"] = true;
        echo "Logged in successfully ";
        header ("refresh:0.5; url=adminpanel.php");
        exit();
       }
       else
       {
        $_SESSION["isCustomer"] = true;
        echo "Logged in successfully";
        header ("refresh:0.5; url=customerpanel.php");
        exit();
       }
        
       }
    else
       {
         echo"Invalid username or password";
         header ("refresh:2; url=login.php");
         exit(); 
       }

   

}

?>