<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
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
    if(isset($_SESSION['student']) or isset($_SESSION['staff'])){
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
<center>
  <?php
    }
    $link = mysqli_connect("localhost", "id18380925_admin", "C}AHF-v/}Mt7}]HE", "id19228304_id18380925_naac_criterion5");
  $name = $_POST['name'];
  $comp_program = $_POST['comp_program'];
  $institution = $_POST['institution'];
  $program_joined = $_POST['program_joined'];
  $year_from = $_POST['year_from'];
  $year_to = $_POST['year_to'];
  $rno = $_POST['rno'];
  $imageType = $_FILES['file']['type'];
  $imageData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
  

  $query = "INSERT INTO higher_education VALUES('$name', '$comp_program', '$institution', '$program_joined', '$imageData', '$imageType', '$rno', '$year_from', '$year_to')";
  $req = mysqli_query($link, $query) or die(mysqli_error($link));
  if($req==1){
  ?>
<i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Student record added successfully! View the records by clicking the button below</p></i><br><br></div>
<a href="highereducation.php"><button class = "button1" style = "top:auto;left:41.5%;">Higher Education</button></a>
<p><br></p>
</div>
<?php 
  }
  else{
    ?>
    <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Data not added, please try again!</p></i><br><br></div>
 <?php }?>
</center>
<?php
    }
    else{

        header("Location: index.php?error=NotLoggedIn");

    }?>
</body>
</html>