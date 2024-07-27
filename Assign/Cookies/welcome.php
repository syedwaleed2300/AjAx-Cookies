<?php  
if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){
    echo "welcome" . ($_COOKIE["username"] . "!!");
}
else{
    echo"please login first";
    header("location : rememberMe.php");
}


?>
