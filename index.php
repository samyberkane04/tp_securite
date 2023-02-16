<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <img src="./images/lapin.jpg" /> 


    <form action="login.php" method="post" >
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>

        <?php }?>
        <br>
        <label>User name</label>
        <input type="text" name="uname" placeholder="User Name"><br>


        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>


        <button type="submit">Login</button><br>

        <a href="signup.php">Inscription</a><br>

    </form>
</body>
</html>