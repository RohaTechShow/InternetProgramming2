
<h2>Form Validation</h2>
<h1>Presence Validation</h1>

<form action="php-validation.php" method="post">
    ID (*): <input type="text" name="id"/><br>
    Name (*) : <input type="text" name="name"/><br>
    Department: <input type="text" name="dept"/><br>

    <button type="submit" name="btnSubmit">Check</button>
</form>

  <p><font color='orange'><b>Items indicated with * symbol are required. </b></font></p>
<?php

   if (!preg_match("/PHP/","PNP is SSS")){
       die("Match not found.");
   }
   else
   {
       die("Match found.");
   }

if (isset($_POST['btnSubmit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];

    if (!isset($_POST['btnSubmit']) || empty($id) || empty($name)){
        die ("<font color='red'><b>Please fill all the required fields.</b></font>");
    }

    if (strlen($id)<8 || strlen($name)<8){
        die("<font color='red'><b>Minimum charcter for ID and Name should be above 8.</b></font>");
    }

    if (!is_numeric($id)){
        die("<font color='red'><b>ID Number should be numeric value.</b></font>");
    }


    $set=array("Abebe1234","Ahmed1234");

    if (!in_array($name,$set)){
        die("<font color='red'><b>Name is not available in the list.</b></font>");
    }

    echo "Hello.";
}
