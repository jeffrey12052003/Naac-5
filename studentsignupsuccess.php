<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign Up</title>
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
p{
  top:auto;
}
</style>
</head>
<body style = "background-color:#05A2C6;padding-bottom:50px;">
<nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginsignupfp.php" style = "float:right;">Login/Sign Up</a>
    </nav>
<center>
  <?php
  $link = mysqli_connect("localhost", "id18380925_admin", "C}AHF-v/}Mt7}]HE", "id19228304_id18380925_naac_criterion5");
  $name = $_POST['name'];
  $department = $_POST['department'];
  $rno = $_POST['rno'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $imageType = $_FILES['file1']['type'];
  $imageData = addslashes(file_get_contents($_FILES['file1']['tmp_name']));
  $query = "INSERT INTO studentlogin VALUES('$name', '$rno', '$department', '$email', '$password', '$imageData', '$imageType')";
  $req = mysqli_query($link, $query) or die(mysqli_error($link));
  if($req==1){
  ?>
<i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Signed Up successfully. Log in again to access your dashboard :)</p></i><br><br></div>
<a href="loginstudent.php"><button class = "button1" style = "top:auto;left:41.5%;">Student Login</button></a>
<p><br></p>
</div>
<?php 
  }
  else{
    ?>
    <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Sign Up failed. Please try again</p></i><br><br></div>
 <?php }?>
</center>
</body>
</html>