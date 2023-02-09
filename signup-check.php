<?php
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])){

    function validate($data){
        $date = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);

    $user_data = 'uname='. $uname.'&name='.$name;

    


    if(empty($uname)){
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    }else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    }
    else if(empty($re_pass)){
        header("Location: signup.php?error= RE Password is required&$user_data");
        exit();
    }
    else if(empty($name)){
        header("Location: signup.php?error= Name is required&$user_data");
        exit();
    }
    
    
    else{
        // $sql = "SELECT * FROM id WHERE username= '$uname' AND password= '$pass'";

        // $result = mysqli_query($conn, $sql);

        // if(mysqli_num_rows($result) === 1){
        //     $row = mysqli_fetch_assoc($result);
        //     if($row['username'] === $uname  && $row['password'] === $pass){
        //         echo "logged in";
        //     }
            
            
        // }else{
        //     header("Location: index.php?error=Incorrect username or password");
        //     exit();
    
        // }
    }

}else{
    // header("Location: signup.php");
    // exit();
}





?>