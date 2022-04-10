 <?php
 if(session_status()>=0){
    session_start();
    if(isset($_SESSION["emailid"])){
      header("refresh:0.5; url=private.php"); 
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Go Green</title>
</head>
<body>
    <h2>Registration</h2>
  <form action="process.php" method="post">
      Username<input type="text" name="uname"><br>
      <br>
      Phonenumber<input type="text" name="phnname"><br><br>
      Emailid<input type="text" name="emailid"><br><br>
      Address<input type="text" name="adress"><br><br>
      Password<input type="password" name="pass"><br><br>
      Confirm<input type="password" name="cpass"><br><br>
      <input type="radio" name="tname" value="admin">
      Admin
      <input type ="radio" name="tname" value="user">
      user
      <input type="submit" name="submit">
</form> 
</body>
</html>