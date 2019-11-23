
<h1>Student Result registration form</h1>

<form action="student.php" method="post">
    ID: <input type="text" name="id"/> <br>
    First Name: <input type="text" name="fname"/><br>
    Last Name: <input type="text" name="lname"/><br>

    College
    <select name="college">
        <option value="Natural Science">Natural Science</option>
        <option value="Technology">Technology</option>
        <option value="School of Law">School of Law</option>
    </select> <br>

    Sex:
    <input type="radio" name="sex" value="Male"/> Male <br>
    <input type="radio" name="sex" value="Female"/> Female <br>

    Course Title
    <input type="text" name="crs_title"/><br>

    Assessment Result (60%)
    <input type="number" name="asst"/><br>
    Final Result (40%)
    <input type="number" name="final_result"/> <br>

    <button type="submit" name="btnDisplay">Display</button>
    <button type="reset">Reset</button>
</form>

<?php
   if (isset($_POST['btnDisplay'])) {
//       collect form data through variable
       $idNumber = $_POST['id'];
       $first_name = $_POST['fname'];
       $last_name = $_POST['lname'];
       $college = $_POST['college'];
       $sex = $_POST['sex'];
       $crs_title = $_POST['crs_title'];
       $assessment = $_POST['asst'];
       $final_exam = $_POST['final_result'];
       $total = $assessment + $final_exam;

       if ($total >= 80) {
           $feedback = "Very Good.";
       } elseif ($total >= 60) {
           $feedback = "Good.";
       } elseif ($total >= 50) {
           $feedback = "Satisfactory";
       } else {
           $feedback = "Poor.";
       }
       ?>
       <h3>Student Result Details</h3>

       <p>ID Number: <?= $idNumber ?></p>
       <p>Full Name: <?= $first_name . " " . $last_name ?></p>
       <p>College: <?= $college ?></p>
       <p>Sex: <?= $sex ?></p>
       <p>Course title: <?= $crs_title ?></p>
       <p>Assessment Result: <?= $assessment ?></p>
       <p>Final Exam Result: <?= $final_exam ?></p>
       <p>Total (100%): <?= $total ?></p>
       <p>Feedback: <?= $feedback ?></p>

       <?php
   }
   ?>


