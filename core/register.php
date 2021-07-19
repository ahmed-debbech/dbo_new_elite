<?php
include_once("../config.php");

function addUser($user){
    
}
if(!empty($_POST["username"]) && !empty($_POST["name"]) &&
!empty("email") && !empty("password")){
    echo "ALl variables are set";
    $u = new User($_POST["username"], $_POST["name"],
                        $_POST["email"], $_POST["password"]);
    addUser($u);
}
?>