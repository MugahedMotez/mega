
<?php  
     include('server.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign Up Teacher</title>
</head>
<body>
    <!-- Subper class include All sup classes -->

    <div class="log">
        <div class="information">

            <!-- title -->
            <span>MEGA</span>
            <h4 style="color:red;">Need To Signup To Access !</h4>

            <!-- Form Data-->

    <form action="signup_teacher.php" method="post">
        <!-- display Valdation Erorr-->
        <?php  include('erorrs.php');?>

         <h2 class="title">Sign up</h2>
        <input type="text"      placeholder ="User Name"         name="user_name"  class="inp"value="<?php echo $username ?>"><br>
        <input type="email"     placeholder ="Email"             name="email"      class="inp" value="<?php echo $email ?>"><br>
        <input type="password"  placeholder ="Password"          name="password_1" class="inp"><br>
        <input type="password"  placeholder =" Confirm Password" name="password_2" class="inp"><br>
        <input type="submit" value="Login" class="but" name="send" class="inp">
        <p>You Have Account ? <a href="login.php">Login</a></p>
        <input type="submit" value="Signup by Google" class="but_google">
        <input type="submit" value="Signup by Linkedin" class="but_Linked_in">
    </form>

    <!-- End Form -->
  </div>
 </div> 
</body>
</html>