<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher Education</title>
    <link href = "gammadesign.css" rel = "stylesheet"/>
</head>
<body style = "background-color:#05A2C6;padding-bottom:50px;">
<?php
    if(isset($_SESSION['staff'])){
?>
<nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginstaffsuccess.php">Dashboard</a>
        <a href = "logout.php" style = "float:right;">Logout</a>
    </nav>
<center>
<?php
  $link = mysqli_connect("localhost", "id18380925_admin", "C}AHF-v/}Mt7}]HE", "id19228304_id18380925_naac_criterion5");
    $name = $_POST['name'];
    $exam = $_POST['exam'];
    $query = "DELETE FROM exam_qualifications WHERE Student_name = '$name' AND Exam = '$exam'";
    $req = mysqli_query($link, $query) or die(mysqli_error($link));
    if (mysqli_affected_rows($link) == 1){
    ?>
    <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Record successfully deleted!</p></i><br><br></div>
     <?php   }
        else{
            ?>
      <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">An error occured please try again!</p></i><br><br></div>      
      <?php  }
        ?>
        </table><br><br>
<div style="padding-bottom:25px;">
<a href="addstudentprogfp.php"><button class = "button1" style = "top:auto;left:28%;">Add Records</button></a>
<a href="deletefromdbfp.php"><button class = "button" style = "top:auto;left:49%;">Delete Records</button></a><br><br>
<p><br></p>
</div>
</center>
<?php
    }
    else{

        header("Location: index.php?error=NotLoggedIn");

    }?>
</body>
</html>