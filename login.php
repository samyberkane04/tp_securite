<?php

if(isset($_POST['uname']) && isset($_POST['password'])){

    function validate($data){
        
    }



    $uname = $_POST['uname'];
    $pass = $_POST['password'];
    
}else{
    header("Location: index.php?error");
    exit();
}