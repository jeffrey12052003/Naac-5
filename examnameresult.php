<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results!</title>
    <link href = "gammadesign.css" rel = "stylesheet"/>
    <style>
table {
  border-collapse: collapse;
  width: 75%;
}

th, td {
  text-align: left;
  padding: 18px;
  font-size:15px;
}
body{
  padding-bottom: 50px;
}

tr:nth-child(even){background-color: #0608FE}

th {
  background-color: #6611CC;
  color: white;
}
</style>
</head>
<body style = "background-color:#05A2C6;padding-bottom:50px;">
<?php
    if(isset($_SESSION['student'])){
?>
<nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginstudentsuccess.php">Dashboard</a>
        <a href = "logout.php" style = "float:right;">Logout</a>
</nav>
<?php 
    }
    elseif(isset($_SESSION['staff'])){
?>
<nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginstaffsuccess.php">Dashboard</a>
        <a href = "logout.php" style = "float:right;">Logout</a>
</nav>
<?php
    }
    else
    {
?>
      <nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginsignupfp.php" style = "float:right;">Login/Sign Up</a>
    </nav>
<?php
    }
?>
<center>
<?php
  $link = mysqli_connect("localhost", "id18380925_admin", "C}AHF-v/}Mt7}]HE", "id19228304_id18380925_naac_criterion5");
    $exam = $_POST['examname'];
      $query = "SELECT * FROM exam_qualifications WHERE Exam LIKE '$exam%' ORDER BY Academic_year_from";
    $req = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($req->num_rows > 0){
    ?>
    <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">The examination details for <?php echo $exam;?> exam are :</p></i><br><br></div>
    <table>
        <tr style = "background-color: blanchedalmond;
    color:purple;"> 
          <th>Academic Year</th>
          <th>Exam Roll Number</th>
          <th>Name</th>
          <th>Exam Name</th>
        </tr>
      <?php    
        while($a = mysqli_fetch_array($req)){
    ?>
        <tr style = "background-color: blanchedalmond;
    color:purple;">
          <td><?php echo $a['Academic_year_from']."-".$a['Academic_year_to'];?></td>
          <td><?php echo $a['Exam_roll_no'];?></td>
          <td><?php echo $a['Student_name'];?></td>
          <td><?php echo $a['Exam'];?></td>
        </tr>
        <?php
        }
        }
        else{
            echo "Details not found please try again";
        }
        ?>
        </table><br><br>
<div style="padding-bottom:25px;">
<a href="naacsearch.php"><button class = "button1" style = "top:auto;left:28%;">Search Again!</button></a>
<a href="scoressearch.php"><button class = "button" style = "top:auto;left:49%;">View Scores</button></a><br><br>
<p><br></p>
</div>
</center>
</body>
</html>