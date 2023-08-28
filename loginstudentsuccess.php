<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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
img{
  left:40%;
  top:90%;
}
th {
  background-color: #6611CC;
  color: white;
}
</style>
</head>
<body style = "background-color:#05A2C6;padding-bottom:50px;align:auto;">
<?php
    if(isset($_SESSION['student'])){
      $email = $_SESSION['email'];
      $password = $_SESSION['password'];
    }
    else{
      $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
    }
    $link = mysqli_connect("localhost", "id18380925_admin", "C}AHF-v/}Mt7}]HE", "id19228304_id18380925_naac_criterion5");
    $query = "SELECT * FROM studentlogin WHERE student_email = '$email' AND student_password = '$password'";
    $req = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($req->num_rows > 0){
      $_SESSION['student'] = 1;
    ?>
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

    <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Student Details</p></i><br><br></div>
    <table>
        <tr style = "background-color: blanchedalmond;
    color:purple;"> 
          <th>Student Name</th>
          <th>Register Number</th>
          <th>Department</th>
          <th>Student Email</th>
        </tr>
      <?php    
        while($a = mysqli_fetch_array($req)){
          $name = $a['Student_name'];
    ?>
        <tr style = "background-color: blanchedalmond;
    color:purple;">
          <td><?php echo $a['Student_name'];?></td>
          <td><?php echo $a['Register_number'];?></td>
          <td><?php echo $a['Department'];?></td>
          <td><?php echo $a['Student_email'];?></td>
        </tr>
        <?php
        }?>
        </table><br><br>
        </center> 
        <div class = "blurtext" style ="top:62%; left:20%;">
        <img src="displaystudentpic.php?name=<?php echo $name;?>" style="width:200px; height:200px;align:justify;" class = "ssimage" frameborder="2"></img>
      </div>
        <?php
        }
        else{?>
          <nav class="navigation">
          <img src = "logo.png" class = "logo"/>
          <a href = "index.php">Home</a>
          <a href = "naacsearch.php">Exams and qualifications</a>
          <a href = "highereducation.php">Foreign Education</a>
          <a href = "loginsignupfp.php" style = "float:right;">Login/Sign Up</a>
      </nav>
            <center>
            <i><br><p style = "font-family: Georgia;color:rgb(255, 234, 138);font-size:28px;font-weight:0;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align:center;">Login Failed! Please enter correct details and try again :)</p></i><br><br></div>
            <a href="loginstudent.php"><button class = "button1" style = "top:auto;left:28%;">Student Login</button></a>
            <a href="loginstaff.php"><button class = "button" style = "top:auto;left:49%;">Staff Login</button></a><br><br>
            <p><br></p>
            </div>
            </center>
   <?php }
      
 if(isset($_SESSION['student'])){ ?>
<div style="padding-bottom:25px;">
<i><div class = "blurtext" style = "top:69%;left: 47%;text-align:auto;font-family: Cursive;color:rgb(255, 234, 138);font-size:24px;font-weight:0;text-shadow: 1px 1px 2px red, 0 0 25px blue, 0 0 5px darkblue;">Add student progress right here</div></i>


<a href="addstudentprogfp.php"><button class = "button1" style = "top:78%;left:51.5%;text-align:center;">Add student Progress</button></a>
</div>
<?php } ?>

</body>
</html>