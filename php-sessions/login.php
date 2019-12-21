<html>
<body>
<?php
include ("top-menu.php");
include_once ("connection.php");
?>


<h1 align="center">User Login</h1>

<div align="center">
    <form action="login.php" method="post">
        User Name: <input type="text" name="user_name"/><br/><br/>
        Password: <input type="password" name="user_password"/> <br/><br/>

        <button type="submit" name="btn_signup">Login</button>
    </form>
    <?php
    if (isset($_POST['btn_signup'])){
        $username=@$_POST['user_name'];
        $password=md5(@$_POST['user_password']);

        $sql="SELECT * FROM users WHERE username='$username'
              AND password='$password'";
        $sql=mysqli_query($connection,$sql);

        $record_count=mysqli_num_rows($sql);

        if ($record_count>0){
            $_SESSION['user_id']=$username;
            header("location: home.php");
        }
        else {
            echo "Incorrect username or password. Please try again.";
        }
    }
    ?>
</body>
</html>