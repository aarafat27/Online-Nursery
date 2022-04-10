<?php
if(session_status()>=0){
    session_start();
    session_unset();
    echo"you are now redirected";
}
header("refresh:0.3;url=index.php");
?>
