<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <form action="signup-check.php" method="post" >
        <h2>Sign UP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>

        <?php }?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <p class="error"><?php echo $_GET['name'];?></p>
            <input  type="text" 
                    name="name"
                    placeholder="Name" 
                    value=""
        <?php }else{?>
            <input type="text" name="name" placeholder="Name"><br>
        <?php}?>





        <label>User name</label>
        <input type="text" name="uname" placeholder="User Name"><br>


        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Re Password</label>
        <input type="password" name="re_password" placeholder="Re_Password"><br>


        <button type="submit">Sign up</button>

        <a href="index.php">Inscription</a>

    </form>
</body>
</html>