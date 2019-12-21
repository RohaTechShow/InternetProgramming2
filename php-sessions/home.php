<html>
  <body>
  <?php
  include ("top-menu.php");
  include_once ("connection.php");
  ?>

    <h1 align="center">Welcome to our homepage.</h1>

  <?php
     $username=$_SESSION['user_id'];
     if (isset($_SESSION['user_id'])){
         echo "Hi <b>".@$_SESSION['user_id']."</b> Welcome to out website.";

         ?>

         <h1>Detail User Profile</h1>
  <?php
         $sql="SELECT * FROM users WHERE username='$username'";
         $sql=mysqli_query($connection,$sql);

         $result=mysqli_fetch_array($sql);

         ?>

         <p><img src="<?=$result['user_photo'] ?>" width="100" height="100"/></p>

         <p>User Name: <?=$result['username']; ?></p>
         <p>Password: <?=$result['password']; ?></p>
  <?php
     }
  ?>
  </body>
</html>