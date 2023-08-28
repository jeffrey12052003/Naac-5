<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
   <nav class="navigation">
        <img src = "logo.png" class = "logo"/>
        <a href = "index.php">Home</a>
        <a href = "naacsearch.php">Exams and qualifications</a>
        <a href = "highereducation.php">Foreign Education</a>
        <a href = "loginsignupfp.php" style = "float:right;">Login/Sign Up</a>
    </nav>

<center>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $link = mysqli_connect("localhost", "id18380925_admin", "C}AHF-v/}Mt7}]HE", "id19228304_id18380925_naac_criterion5");
    $query = "UPDATE stafflogin SET Staff_password = '$pass' WHERE Staff_name = '$name' AND Staff_email = '$email'";
    $req = mysqli_query($link, $query) or die(mysqli_error($link));
    if(mysqli_affected_rows($link)>0){
        ?>
      <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Your password has been reset. Log in again to access your dashboard :)</p></i><br><br></div>
      <a href="loginstaff.php"><button class = "button1" style = "top:auto;left:41.5%;">Staff Login</button></a>
      <p><br></p>
      </div>
      <?php 
        }
        else{
          ?>
          <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Sign Up failed. Please try again</p></i><br><br></div>
       <?php }?>
<div style="padding-bottom:25px;">
<p><br></p>
</div>
</center>
</body>
</html>