<?php
if(session_status()>=0){
    session_start();
    if(isset($_SESSION["usertype"])){
        if($_SESSION["usertype"]=='a')
        {
            header("refresh:0.2; url=adminpanel.php");
            exit();
        }
        
        else{
            header("refresh:0.2; url=customerpanel.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>login page</title>
</head>
<body>
    <h2>LOGIN</h2>
  <form action="loginprocess.php" method="post">
      Username <input type="text" name="username"><br><br>
      Password <input type="text" name="pass"><br><br> 
      <input type="submit" name="submit">
</form>



<a href="index.php">back</a>
</body>
</html>