<?php
session_start();
?>
   <div>
       <p align="center" style="background-color: cadetblue; color: white; font-family: Arial; font-size: large">
           <a href="home.php"><font color="white">Home</font></a>
           <?php
              if (isset($_SESSION['user_id'])){
                  ?>
                  <a href="contact-us.php"><font color="white">Contact us</font></a>
                  <a href="about.php"><font color="white">About us</font></a>
                  <a href="logout.php"><font color="white">Logout</font></a>
           <?php
              }
              else{
                  ?>
                  <a href="login.php"><font color="white">Login</font></a>
                  <a href="sign-up.php"><font color="white">Signup</font></a>
           <?php
              }
           ?>
       </p>
   </div>