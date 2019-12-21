<html>
<body>
<?php
include ("top-menu.php");
include_once("connection.php");
?>


<h1 align="center">Sign-up page. New user registration</h1>

<div align="center">
    <form action="sign-up.php" method="post" enctype="multipart/form-data">
        User Name: <input type="text" name="user_name"/><br/><br/>
        Password: <input type="password" name="user_password"/> <br/><br/>
        Upload photo:
           <input type="file" name="profile_pic"/><br><br/>

        <button type="submit" name="btn_signup">Create Account</button>
    </form>

    <?php
       if (isset($_POST['btn_signup'])){
           $username=@$_POST['user_name'];
           $password=md5(@$_POST['user_password']);

           $originalPicName=@$_FILES['profile_pic']['name'];
           $tempPicName=@$_FILES['profile_pic']['tmp_name'];
           $target="images/".$originalPicName;

           if (!file_exists("images")){
               mkdir("images");
           }

           if (copy($tempPicName,$target)){
               echo "<b><font color='green'>Profile picture uploaded successfully.</font></b>";
           }

           else{
               echo "<b><font color='red'>Unable to upload photo.</font></b>";
           }


           $sql="INSERT INTO users (username,password,user_photo) 
              VALUES ('$username','$password','$target')";
           $sql=mysqli_query($connection,$sql);

           if ($sql){
               echo "<b><font color='green'> Congrats! Account successfully created</font></b>";
           }
           else{
               echo "<b><font color='red'> Ooops! Something went wrong. ".mysqli_error($connection)."</font></b>";
           }
       }
    ?>
</div>
</body>
</html>